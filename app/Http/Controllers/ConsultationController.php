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
use Exception;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const LIMIT = 10;
    const OFFSET = 0;
    const AGE_RANGE = 5;
    const OPENING = "Opening";
    const NIL = "Null";
	const MAJOR = "Major";
	const FRESH_GRADUATE = "FreshGraduate";
	const DEGREE = "Degree";
	const INDUSTRY = "Industry";
	const FIELD = "Field";
	const JOBLEVEL = "JobLevel";
	const WORK_EXPERIENCE = "WorkExp";
	const FACILITES = "Facility";
	const EXPECTED_LOCATION = "ExpectedLocation";
	const AGE = "Age";
	const SALARY_UPPER = "SalaryUpper";
	const SALARY_LOWER = "SalaryLower";
	const SKILLSET = "SkillSet";
	const COMPLETED = "Completed";
	const NOT_FOUND_IN_DB = "NOT FOUND IN DB";
	const CATEGORY_MISMATCH = "CATEGORY MISMATCH";
	const EXPERIENCED_CATEGORY = [self::INDUSTRY, self::FIELD, self::JOBLEVEL, self::WORK_EXPERIENCE];
	const NOT_FOUND_IN_DB_RESPONSE = array("Wah maaf ya. Saya belum mengerti yang kamu maksud. Coba kalimat lain.", 
										   "Saat ini saya belum mengerti kalimatmu. Coba kalimat lain ya.", 
										   "Sayang sekali saya belum mengerti maksud kamu. Mohon coba kata lain.");
										   
	const CATEGORY_MISMATCH_RESPONSE = array("Hmmm, Kayanya jawaban kamu ga nyambung sama pertanyaannya deh.", 
										     "Kok jawabnya gak sesuai pertanyaan ya?", 
										     "Wah jawaban kamu ngaco nih, ga menjawab pertanyaan.");


    /*kalo ga login ga bisa masuk*/
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function recommendation(Request $request) {
		$curr_rules = $this->getRules ();
		
		$completed = true;
		
		foreach ($curr_rules as $key => $value) {
			if ($value === null) {
				$completed = false;
				break;
			}
		}
		
		if (!$completed) {
			return redirect('consultations')->withErrors(['Silakan Lakukan Konsultasi Terlebih Dahulu untuk Melengkapi Semua data!']);
		}
		
		$current_page = $request->query('page');
		
		if ($current_page == null) {
			$current_page = 1;
		}
		
		$data = $this->getUserData($current_page);
		
		$x = $this->curlTanyaJob(config('api.getJobRecommendation'), $data);
		
		$err = $x['err'];
		$response = $x['response'];
		
		$data = json_decode($response, true);
		
		$start_page = $current_page - 2;
		$last_page = $current_page + 2;
		
		$final_page = ceil($data['total']/self::LIMIT);
		
		if ($start_page < 1) {
			$start_page = 1;
		}
		
		if ($last_page > ceil($data['total']/self::LIMIT)) {
			$last_page = ceil($data['total']/self::LIMIT);
		}
		
        return view('consultation/recommendation',[
			'data' => $data,
			'current_page' => $current_page,
			'start_page' => $start_page,
			'last_page' => $last_page,
			'final_page' => $final_page,
        ]);
	}
    
    protected function getRules () {
		$field = null;
		$industry = null;
		$job_level = null;
		$expected_location = null;
		$skill_set = null;
		$age = null;
		$salary_upper = null;
		$salary_lower = null;
		
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
		
		//Null if not freshgraduate
        if (Auth::user()->fresh_graduate == true) {
        	$freshgraduate = 1;
        } else {
			$freshgraduate = 0;
		}
		
		$rules = [
			self::AGE => Auth::user()->date_of_birth,
			self::FRESH_GRADUATE => Auth::user()->fresh_graduate,
			self::WORK_EXPERIENCE => Auth::user()->total_work_experiences_in_month,
			self::DEGREE => Auth::user()->last_degree_id,
			self::MAJOR => Auth::user()->major_id,
			self::INDUSTRY => $industry,
			self::FIELD => $field,
			self::JOBLEVEL => $job_level,
			self::EXPECTED_LOCATION => $expected_location,
			//self::SKILLSET => $skill_set,
			self::SALARY_UPPER => Auth::user()->expected_salary_upper,
			self::SALARY_LOWER => Auth::user()->expected_salary_lower,
		];
		
		return $rules;
	}

    protected function getUserData($page = 1) {
		$current_year = date ("Y");
		$birth_year = date('Y', strtotime(Auth::user()->date_of_birth));
		$current_age = $current_year-$birth_year;
		
		$data = [
			'max_age'=> $current_age + self::AGE_RANGE,
			'major' => Auth::user()->major->name,
			'degree' => MasterDegree::find(Auth::user()->last_degree_id)->name,
			'industry' => (Auth::user()->fresh_graduate ? null : MasterIndustry::find (Auth::user()->workExperiences()->first()->industry_id)->name), 
			'min_age' => $current_age - self::AGE_RANGE,
			'field' => (Auth::user()->fresh_graduate ? null : MasterField::find (Auth::user()->workExperiences()->first()->field_id)->name),
			'location' => Auth::user()->expectedLocations()->first()->name,
			'max_salary'=> Auth::user()->expected_salary_upper,
			'job_level'=> (Auth::user()->fresh_graduate ? null : MasterJobLevel::find (Auth::user()->workExperiences()->first()->job_level_id)->name),
			'work_exp'=> (Auth::user()->total_work_experiences_in_month ? 0 : Auth::user()->total_work_experiences_in_month),
			'min_salary'=> Auth::user()->expected_salary_lower,
			'limit' => self::LIMIT,
			'offset' => ($page - 1) * self::LIMIT,
		];
		return $data;
	}

    public function index()
    {
        //
        
		$rules = $this->getRules();
		
		$alreadyAnswered = false;
		
		foreach ($rules as $key => $value) {
			if ($value !== null) {
				$alreadyAnswered = true;
				break;
			}
		}
		
		$greeting = null;
		
        if (!$alreadyAnswered) {
			$x = $this->curlTanyaJob(config('api.getQuestion'), ['category'=> self::OPENING]);
			$err = $x['err'];
			$greeting = json_decode($x['response'], true);
		}
        return view('consultation/index',[
			'greeting' => $greeting,
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
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => json_encode($data),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return [
			'response' => $response,
			'err' => $err
		];
	}
		
	public function extractFreshGraduateInformation($text) {
		$x = $this->curlTanyaJob(config('api.extractFreshGraduate'), [
			'text' => $text,
		]);
		$data = json_decode($x['response'], true);
		echo print_r($data);
		return $data["fresh_graduate"][0];
	}
	
	public function extractInformation(Request $request) {
		$consultation = Consultation::where(['user_id' => Auth::user()->id])->first();
        $input = $request->all();
        
        
		if ($consultation->last_topic == self::FRESH_GRADUATE) {
			$state = $this->extractFreshGraduateInformation($input['text']);
            $user = Auth::user();
			if ($state) {
				echo "TRUE";
				$user->fresh_graduate = true; 
			} else {
				echo "FALSE";
				$user->fresh_graduate = false; 
			}
            $user->save();
            return;
		}
        
		$x = $this->curlTanyaJob(config('api.extractInformation'), [
			'category'=> $consultation->last_topic,
			'text' => $input['text'],
		]);
		$user = Auth::user();
		$workExp = Auth::user()->workExperiences()->first();
		
		$data = json_decode($x['response']);
		
		echo $x['response'];
		if(!$data->category){
			$consultation->suggested_word = self::CATEGORY_MISMATCH;
		    $consultation->save();
		    return;
		}
		
        try{
			if ($consultation->last_topic == self::DEGREE) {
				$master_degree = MasterDegree::where(['name' => $data->message])->first();
				if ($master_degree == null) {
					throw new Exception("Cannot Find Data");	
				}
				$user->last_degree_id = $master_degree->id;
			} 
			else if ($consultation->last_topic == self::MAJOR) {
				$master_data = MasterMajor::where(['name' => $data->message])->first();
				if ($master_data == null) {
					throw new Exception("Cannot Find Data");	
				}
				$user->major_id = $master_data->id;
			} 
			else if ($consultation->last_topic == self::INDUSTRY) {
				$master_industry = MasterIndustry::where(['name' => $data->message])->first();
				
				if ($master_industry == null) {
					throw new Exception("Cannot Find Data");	
				}
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
				$master_data = MasterField::where(['name' => $data->message])->first();
				
				if ($master_data == null) {
					throw new Exception("Cannot Find Data");	
				}
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
				$master_joblevel = MasterJobLevel::where(['name' => $data->message])->first();
				if ($master_joblevel == null) {
					throw new Exception("Cannot Find Data");	
				}
				if ($workExp == null) {
					$newWorkExp = new WorkExperience();
					$newWorkExp->job_level_id = $master_joblevel->id;
					$user->workExperiences()->save($newWorkExp);
				} else {
					$workExp->job_level_id = $master_joblevel->id;
					$workExp->save();
				}
			}
			else if ($consultation->last_topic == self::WORK_EXPERIENCE) {
				$user->total_work_experiences_in_month = $data->message;
			}
			else if ($consultation->last_topic == self::EXPECTED_LOCATION) {
				$master_data = MasterLocation::where(['name' => $data->message])->first();
				if ($master_data == null) {
					throw new Exception("Cannot Find Data");	
				}
				$user->expectedLocations()->attach([$master_data->id]);
			} 
			else if ($consultation->last_topic == self::SKILLSET) {
				$master_data = MasterSkillSet::where(['name' => $data->message])->first();
				
				if ($master_data == null) {
					throw new Exception("Cannot Find Data");	
				}
				$user->skillSets()-> attach([$master_data->id]);
			}
			else if ($consultation->last_topic == self::FACILITES) {
				$master_data = MasterFacilities::where(['name' => $data->message])->first();
				
				if ($master_data == null) {
					throw new Exception("Cannot Find Data");	
				}
				$user->expectedFacilities()-> attach([$master_data->id]);
			}
			
			else if ($consultation->last_topic == self::AGE) {
				$current_year = date ("Y");
				$age = $data->message;
				$date_year = $current_year - $age;
				$dob = mktime(0,0,0,01,01, $date_year);
				$dob_format = date ("Y-m-d H:i:s", $dob);
				$user->date_of_birth = $dob_format;
			}
			else if ($consultation->last_topic == self::SALARY_UPPER) {
				$user->expected_salary_upper = $data->message;
			}
			else if ($consultation->last_topic == self::SALARY_LOWER) {
				$user->expected_salary_lower = $data->message;
			}
			$user->save();
	    }
	    catch(exception $e){
			if(is_array($data->suggested_word) && count($data->suggested_word) > 0){
		        $suggestion_word = $data->suggested_word;		
		        $list_suggestion_word="";
		        $list_suggestion_word = implode(", ", $suggestion_word);
		   
		        $consultation->suggested_word = $list_suggestion_word;
		        $consultation->save();
		        return;
		    }
			$consultation->suggested_word = self::NOT_FOUND_IN_DB;
		    $consultation->save();
		}
	}
	
	public function decideNextTopic() {
		$field = null;
		$industry = null;
		$job_level = null;
		$expected_location = null;
		$skill_set = null;
		$age = null;
		$salary_upper = null;
		$salary_lower = null;
		
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
		
		//Null if not freshgraduate
        if (Auth::user()->fresh_graduate == true) {
        	$freshgraduate = 1;
        } else {
			$freshgraduate = 0;
		}
		$rules = [
			self::AGE => Auth::user()->date_of_birth,
			self::FRESH_GRADUATE => Auth::user()->fresh_graduate,
			self::WORK_EXPERIENCE => Auth::user()->total_work_experiences_in_month,
			self::DEGREE => Auth::user()->last_degree_id,
			self::MAJOR => Auth::user()->major_id,
			self::INDUSTRY => $industry,
			self::FIELD => $field,
			self::JOBLEVEL => $job_level,
			self::EXPECTED_LOCATION => $expected_location,
			//self::SKILLSET => $skill_set,
			self::SALARY_UPPER => Auth::user()->expected_salary_upper,
			self::SALARY_LOWER => Auth::user()->expected_salary_lower,
		];
		$nextTopic = null;
		foreach ($rules as $key => $value) {
			if (in_array($key, self::EXPERIENCED_CATEGORY) && $value == null && $freshgraduate == 0){
				$nextTopic = $key;
				break;
			} else if (in_array($key, self::EXPERIENCED_CATEGORY) && $value == null && $freshgraduate == 1){
                continue;				
			} else if ($value === null) {
				$nextTopic = $key;
				break;
			}
		}
		
		return $nextTopic;
	}
	
	protected function generateSugesstionForNotFoundWord ($topic) {
		if ($topic == self::DEGREE) {
			$master_data = MasterDegree::select('name')->limit(3)->get();
		} else if ($topic == self::MAJOR) {
			$master_data = MasterMajor::select('name')->limit(3)->get();
		} else if ($topic == self::INDUSTRY) {
			$master_data = MasterIndustry::select('name')->limit(3)->get();
		} else if ($topic == self::FIELD) {
			$master_data = MasterField::select('name')->limit(3)->get();
		} else if ($topic == self::JOBLEVEL) {
			$master_data = MasterJobLevel::select('name')->limit(3)->get();
		} else if ($topic == self::EXPECTED_LOCATION) {
			$master_data = MasterJobLevel::select('name')->limit(3)->get();
		}
		
		$word = [];
		foreach ($master_data as $d) {
			array_push($word, $d->name);
		}
		
		return "Contohnya : ". implode(", ", $word) . " atau lainnya";
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
			
			if($consultation->suggested_word != null){
				if($consultation->suggested_word == self::CATEGORY_MISMATCH){
					$randomRespon = array_rand(self::CATEGORY_MISMATCH_RESPONSE,1);
					$respon = self::CATEGORY_MISMATCH_RESPONSE[$randomRespon];
					echo json_encode([
			            "question" => $respon
		            ]);
					
				} else if($consultation->suggested_word == self::NOT_FOUND_IN_DB){
					$randomRespon = array_rand(self::NOT_FOUND_IN_DB_RESPONSE,1);
					$respon = self::NOT_FOUND_IN_DB_RESPONSE[$randomRespon];
					$word = $this->generateSugesstionForNotFoundWord($consultation->last_topic);
					echo json_encode([
			            "question" => $respon . $word
		            ]);
				} else{
		            echo json_encode([
			            "question" => "Apakah yang kamu maksud adalah " . $consultation->suggested_word . "?"
		            ]);
				}
			        $consultation->suggested_word = null;
		            $consultation->save();
		            return;
		    }
			
			if ($nextTopic == self::COMPLETED) {
				$job_title = $this->getJobRecommendation();
				echo json_encode([
					"question" => "Rekomendasi Pekerjaan untuk kamu adalah " . implode(", ", $job_title) . 
					"<br>Klik Link  <a href='". url('/consultations/recommendation') ."'>Berikut</a> untuk melihat saran lowongan pekerjaan dari kami "
				]);
			} else {
				echo $response;
			}
		}
	}
	
	public function getJobRecommendation(){
		$data = $this->getUserData();

		$x = $this->curlTanyaJob(config('api.getJobRecommendation'), $data);
		
		$err = $x['err'];
		$response = $x['response'];
		if ($err) {
			echo json_encode([
				"question" => "Server can't be reach now"
			]);
		} else {
			$data = json_decode($response);
			return $data->job_title;
		
		}
	}
}
