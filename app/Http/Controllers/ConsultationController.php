<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Consultation;
use App\MasterDegree;
use App\MasterMajor;
use App\MasterJobLevel;
use App\MasterLocation;
use App\MasterSkillSet;
use App\MasterField;
use App\MasterIndustry;
use App\WorkExperience;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const NIL = "Null";
	const MAJOR = "Major";
	const DEGREE = "Degree";
	const INDUSTRY = "Industry";
	const FIELD = "Field";
	const JOBLEVEL = "JobLevel";
	const FACILITES = "Facilities";
	const EXPECTED_LOCATION = "ExpectedLocation";
	const SKILLSET = "SkillSet";
	const COMPLETED = "Completed";
	
	/*kalo ga login ga bisa masuk*/
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {
        //
        return view('consultation/index',[
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
		
	private function curlTanyaJob($url, $data){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_PORT => config ('api.port'),
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => config ('api.returnTransfer'),
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => config ('api.maxRedirs'),
			CURLOPT_TIMEOUT => config ('api.timeOut'),
			CURLOPT_HTTP_VERSION => config ('api.httpVersion'),
			CURLOPT_CUSTOMREQUEST => config ('api.request'),
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => config ('api.header'),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		
		return [
			'response' => $response,
			'err' => $err
		];
		
	}
	
	public function extractInformation(Request $request) {
		$consultation = Consultation::where(['user_id' => Auth::user()->id])->first();
        $input = $request->all();
		$x = $this->curlTanyaJob(config('api.extractInformation'), [
			'category'=> $consultation->last_topic,
			'text' => $input['text'],
		]);
		$user = Auth::user();
		$workExp = Auth::user()->workExperiences()->first();
		echo $consultation->last_topic."\n";
		if ($consultation->last_topic == self::DEGREE) {
			$data = json_decode($x['response']);
			$master_degree = MasterDegree::where(['name' => $data->message])->first();
			$user->last_degree_id = $master_degree->id;
		} 
		else if ($consultation->last_topic == self::MAJOR) {
			$data = json_decode($x['response']);
			$master_data = MasterMajor::where(['name' => $data->message])->first();
			$user->major_id = $master_data->id;
		} 
		else if ($consultation->last_topic == self::INDUSTRY) {
			$data = json_decode($x['response']);
			$master_industry = MasterIndustry::where(['name' => $data->message])->first();
			if ($workExp == null) {
				$newWorkExp = new WorkExperience();
				$newWorkExp->industry_id = $master_industry->id;
				$user->workExperiences()->save($newWorkExp);
			} else {
				$workExp->industry_id = $master_industry->id;
				$workExp->save();
			}
		}
		else if ($consultation->last_topic == self::FIELD) {
			$data = json_decode($x['response']);
			$master_data = MasterField::where(['name' => $data->message])->first();
			if ($workExp == null) {
				$newWorkExp = new WorkExperience();
				$newWorkExp->field_id = $master_data->id;
				$user->workExperiences()->save($newWorkExp);
			} else {
				$workExp->field_id = $master_data->id;
				$workExp->save();
			}
		}
		else if ($consultation->last_topic == self::JOBLEVEL) {
			$data = json_decode($x['response']);
			$master_joblevel = MasterJobLevel::where(['name' => $data->message])->first();
			if ($workExp == null) {
				$newWorkExp = new WorkExperience();
				$newWorkExp->job_level_id = $master_joblevel->id;
				$user->workExperiences()->save($newWorkExp);
			} else {
				$workExp->job_level_id = $master_joblevel->id;
				$workExp->save();
			}
		}
		else if ($consultation->last_topic == self::EXPECTED_LOCATION) {
			$data = json_decode($x['response']);
			$master_data = MasterLocation::where(['name' => $data->message])->first();
			$user->expectedLocations()->attach([$master_data->id]);
		} 
		else if ($consultation->last_topic == self::SKILLSET) {
			$data = json_decode($x['response']);
			$master_data = MasterSkillSet::where(['name' => $data->message])->first();
			$user->skillSets()-> attach([$master_data->id]);
		}
		else if ($consultation->last_topic == self::FACILITES) {
			$data = json_decode($x['response']);
			$master_data = MasterFacilities::where(['name' => $data->message])->first();
			$user->expectedFacilities()-> attach([$master_data->id]);
		}
		$user->save();
	}
	
	public function decideNextTopic() {
		$field = null;
		$industry = null;
		$job_level = null;
		$expected_location = null;
		$skill_set = null;
		
		$workExp = Auth::user()->workExperiences()->first();
		$user_expected_location = Auth::user()->expectedLocations()->first();
		$user_skill_set = Auth::user()->skillSets()->first();
		
		if($workExp != null) {
			$industry = $workExp->industry_id;
			$field = $workExp->field_id;
			$job_level =  $workExp->job_level_id;
		}
		
		if($user_expected_location != null) {
			$expected_location = $user_expected_location->id;
		}
		
		if($user_skill_set != null) {
			$skill_set = $user_skill_set->id;
		}
		
		$rules = [
			self::DEGREE => Auth::user()->last_degree_id,
			self::MAJOR => Auth::user()->major_id,
			self::INDUSTRY => $industry ,
			self::FIELD => $field,
			self::JOBLEVEL => $job_level,
			self::EXPECTED_LOCATION => $expected_location,
			self::SKILLSET => $skill_set,
		];
		$nextTopic = null;
		foreach ($rules as $key => $value) {
			if ($value == null) {
				$nextTopic = $key;
				break;
			}
		}
		
		return $nextTopic;
	}
	
    public function getQuestion(){
		$nextTopic = $this->decideNextTopic();
		$err = null;
		if ($nextTopic == null) {
			$nextTopic = self::COMPLETED;
		} else {
			$x = $this->curlTanyaJob(config('api.getQuestion'), ['category'=> $nextTopic]);
			$err = $x['err'];
			$response = $x['response'];
		}
		if ($err) {
			echo json_encode([
				"question" => "Server can't be reach now"
			]);
		} else {
			$consultation = Consultation::firstOrNew(['user_id' => Auth::user()->id]);
			$consultation->last_topic = $nextTopic;
			
			$consultation->save();
			
			if ($nextTopic == self::COMPLETED) {
				echo json_encode([
					"question" => "Rekomendasi Pekerjaan untuk kamu adalah"
				]);
			} else {
				echo $response;
			}
		}
	}
}
