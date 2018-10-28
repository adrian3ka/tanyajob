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
			'expected_salary_lower' => 'required|numeric|lt :99999999999',
			'expected_salary_upper' => 'required|numeric|gt :expected_salary_lower|lt :99999999999',
			'location_id'    => 'required|array|min:1|max:5',
			'skill_set_id'    => 'required|array|min:1|max:30',
			'facility_id'    => 'required|array|min:1|max:5',
		];
    }
    
    public function messages () {
		return [
			'location_id.required' => 'Lokasi harus diisi',
			'location_id.max' => 'Maksimal 5 item untuk lokasi yang dipilih',
			'location_id.min' => 'Minimal 1 item untuk lokasi yang dipilih',
			'major_id.required' => 'Jurusan harus diisi',
			'expected_salary_lower.required' => 'Gaji minimal harus diisi',
			'expected_salary_upper.required' => 'Gaji maksimal harus diisi',
			'expected_salary_upper.gt' => 'Gaji maksimal harus lebih besar dari gaji minimal',
			'skill_set_id.required' => 'Kemampuan yang dimiliki harus diisi',
			'skill_set_id.min' => 'Minimal 1 item untuk kemampuan yang dipilih',
			'skill_set_id.max' => 'Maksimal 30 item untuk kemampuan yang dipilih',
			'facility_id.required' => 'Fasilitas yang diharapkan harus diisi',
			'facility_id.min' => 'Minimal 1 item untuk fasilitas yang dipilih',
			'facility_id.max' => 'Maksimal 5 item untuk fasilitas yang dipilih',
			'last_degree_id.required' => 'Pendidikan terakhir harus diisi',
			
			
		];
	}
}

