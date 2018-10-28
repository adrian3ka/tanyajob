<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       	return [
			'company_name' => 'required',
			'job_position' => 'required',
			'salary_lower' => 'required',
			'salary_upper' => 'required|gte :salary_lower',
			'started_work_at' => 'required',
			'ended_work_at' => 'required_without :current',
			'current' => 'required_without :ended_work_at',
			'location_id'    => 'required',
			'industry_id'    => 'required',
			'field_id'    => 'required',
		];
    }
}
