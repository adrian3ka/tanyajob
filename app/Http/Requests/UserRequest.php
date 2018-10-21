<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'date_of_birth' => 'required',
			'last_degree_id' => 'required|numeric',
			'major_id' => 'required|numeric',
			'expected_salary_lower' => 'required|numeric',
			'expected_salary_upper' => 'required|numeric',
			'skill_set' => 'required'
		];
    }
}
