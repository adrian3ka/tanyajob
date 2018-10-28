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
    public function index()
    {
        //
    }

    public function create()
    {
        return view('workexperience/create',[
			'master_industry' => MasterIndustry::orderBy('name')->get(),
			'master_job_level' => MasterJobLevel::all(),
			'master_location' => MasterLocation::orderBy('name')->get(),
			'master_field' => MasterField::orderBy('name')->get(),
        ]);
    }

    public function store(Requests\WorkExperienceRequest $request)
    {
        $workExperience = new WorkExperience();
        $input = $request->all();
        
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
        
        if (isset($input['ended_work_at'])) {
           $workExperience->ended_work_at = $input['ended_work_at'];
        } 
        
        if (isset($input['current'])) {
           $workExperience->current = true;
        } else {
			$workExperience->current = false ;
		}
        $workExperience->save();
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $workExp = WorkExperience::FindOrFail($id);
        return view('workexperience/edit',[
			'workExp' => $workExp,
			'master_industry' => MasterIndustry::orderBy('name')->get(),
			'master_job_level' => MasterJobLevel::all(),
			'master_location' => MasterLocation::orderBy('name')->get(),
			'master_field' => MasterField::orderBy('name')->get(),
		]);
    }

    public function update(Requests\WorkExperienceRequest $request, $id)
    {     
        $workExperience = WorkExperience::FindOrFail($id);
        $input = $request->all();
        
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
        if (isset($input['ended_work_at'])) {
           $workExperience->ended_work_at = $input['ended_work_at'];
        } 
        
        if (isset($input['current'])) {
           $workExperience->current = true;
        } else {
			$workExperience->current = false ;
		}
        $workExperience->save();
		return redirect ('home');
    }

    public function destroy($id)
    {
    }
}
