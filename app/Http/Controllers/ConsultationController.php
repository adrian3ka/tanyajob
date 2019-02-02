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
use App\WorkExperiences;

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
	const JOBLEVEL = "Job_Level";
	const LOCATION = "Location";
	const SKILLSET = "Skill_Set";
	
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
			echo $data->message;
			$master_industry = MasterIndustry::where(['name' => $data->message])->first();
			$user->industry_id = $master_industry->id;
		}/*
		else if ($consultation->last_topic == self::FIELD) {
			$work = new workExperience();
			$data = json_decode($x['response']);
			$master_data = MasterField::where(['name' => $data->message])->first();
			//$user->major_id = $master_data->id;
			$work->field_id = $master_data->id;
		} 
		else if ($consultation->last_topic == self::JOBLEVEL) {
			$data = json_decode($x['response']);
			$master_data = MasterJobLevel::where(['name' => $data->message])->first();
			$user->job_level_id = $master_data->id;
		} 
		else if ($consultation->last_topic == self::LOCATION) {
			$data = json_decode($x['response']);
			$master_data = MasterLocation::where(['name' => $data->message])->first();
			$user->location_id = $master_data->id;
		} 
		else if ($consultation->last_topic == self::SKILLSET) {
			$data = json_decode($x['response']);
			$master_data = MasterSkillSet::where(['name' => $data->message])->first();
			$user->skill_set_id = $master_data->id;
		} */
		$user->save();
	}
	
	public function decideNextTopic() {
		$field = null;
		if(Auth::user()->workExperiences()) {
			$workExps = Auth::user()->workExperiences()->get();
			print_r($workExps);
			exit();
		}
		
		$rules = [
			self::DEGREE => Auth::user()->last_degree_id,
			self::MAJOR => Auth::user()->major_id,
			self::INDUSTRY => Auth::user()->industry_id,
			self::FIELD => $field,
			self::JOBLEVEL => Auth::user()->job_level_id,
			self::LOCATION => Auth::user()->location_id,
			self::SKILLSET => Auth::user()->skill_set_id,
		
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
		$x = $this->curlTanyaJob(config('api.getQuestion'), ['category'=> $nextTopic]);
		$err = $x['err'];
		$response = $x['response'];
		if ($err) {
			echo json_encode([
				"question" => "Server can't be reach now"
			]);
		} else {
			$consultation = Consultation::firstOrNew(['user_id' => Auth::user()->id]);
			$consultation->last_topic = $nextTopic;
			$consultation->save();
			echo $response;
		}
	}
}
