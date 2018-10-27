<?php

namespace App\Http\Controllers;

use App\MasterIndustry;
use App\MasterJobLevel;
use App\MasterLocation;
use App\MasterField;
use App\WorkExperience;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workexperience/create',[
			'master_industry' => MasterIndustry::orderBy('name')->get(),
			'master_job_level' => MasterJobLevel::all(),
			'master_location' => MasterLocation::orderBy('name')->get(),
			'master_field' => MasterField::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\WorkExperienceRequest $request)
    {
        //
        echo "store";
        $workExperience = new WorkExperience();
        $input = $request->all();
        echo json_encode($input);
        $workExperience->user_id = Auth::user()->id;
        $workExperience->company_name = $input['company_name'];
        $workExperience->industry_id = $input['industry_id'];
        $workExperience->field_id = $input['field_id'];
        $workExperience->job_position = $input['job_position'];
        $workExperience->job_level_id = $input['job_level_id'];
        $workExperience->salary_lower = $input['salary_lower'];
        $workExperience->salary_upper = $input['salary_upper'];
        $workExperience->location_id = $input['location_id'];
        $workExperience->started_work_at = $input['started_work_at'];
        $workExperience->save();
        dd($workExperience);
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
}
