<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    
    public function getQuestion(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => config ('api.port'),
		  CURLOPT_URL => config ('api.getQuestion'),
		  CURLOPT_RETURNTRANSFER => config ('api.returnTransfer'),
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => config ('api.maxRedirs'),
		  CURLOPT_TIMEOUT => config ('api.timeOut'),
		  CURLOPT_HTTP_VERSION => config ('api.httpVersion'),
		  CURLOPT_CUSTOMREQUEST => config ('api.request'),
		  CURLOPT_POSTFIELDS => "{\n    \"category\": \"Major\"\n}",
		  CURLOPT_HTTPHEADER => config ('api.header'),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		
		if ($err) {
		  echo json_encode([
			"question" => "Server can't be reach now"
		  ]);
		} else {
			echo $response;
		}
	}
}
