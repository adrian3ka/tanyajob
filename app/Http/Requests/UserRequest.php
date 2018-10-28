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
			'expected_salary_upper' => 'required|numeric|gte :expected_salary_lower',
			'location_id'    => 'required|array|min:1|max:5',
			'skill_set_id'    => 'required|array|min:1|max:30',
			'facility_id'    => 'required|array|min:1|max:5',
		];
    }
    
    public function messages () {
		return [
			'location_id.required' => 'Harap Isi Lokasi Yang Anda Inginkan',
			'location_id.max' => 'Harap Isi Lokasi Maximal 5 Item',
		];
	}
}

