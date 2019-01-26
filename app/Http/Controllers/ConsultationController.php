<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Consultation;

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
		echo $consultation->last_topic;
		
        $input = $request->all();
		$x = $this->curlTanyaJob(config('api.extractInformation'), [
			'category'=> self::DEGREE,
			'text' => $input['text'],
		]);
		
		print_r($x);
	}
	
	
    public function getQuestion(){
		$x = $this->curlTanyaJob(config('api.getQuestion'), ['category'=> self::DEGREE]);
		$err = $x['err'];
		$response = $x['response'];	
		
		if ($err) {
			echo json_encode([
				"question" => "Server can't be reach now"
			]);
		} else {
			$consultation = Consultation::firstOrNew(['user_id' => Auth::user()->id]);
			$consultation->last_topic = self::DEGREE;
			$consultation->save();
			echo $response;
		}
	}
}
