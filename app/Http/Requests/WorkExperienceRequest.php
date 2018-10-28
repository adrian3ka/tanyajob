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
			'job_level_id' => 'required|numeric',
			'salary_lower' => 'required',
			'salary_upper' => 'required|gte :salary_lower',
			'started_work_at' => 'required',
			'ended_work_at' => 'required_without :current|after :started_work_at',
			'current' => 'required_without :ended_work_at',
			'location_id'    => 'required',
			'industry_id'    => 'required',
			'field_id'    => 'required',
		];
    }
    
    public function messages () {
		return [
			'location_id.required' => 'Lokasi harus diisi',
			'company_name.required' => 'Nama perusahaan harus diisi',
			'salary_lower.required' => 'Gaji minimal harus diisi',
			'salary_upper.required' => 'Gaji maksimal harus diisi',
			'expected_salary_upper.gte' => 'Gaji maksimal harus lebih besar dari gaji minimal',
			'started_work_at.required' => 'Tanggal masuk harus diisi',
			'ended_work_at.required_without' => 'Tanggal keluar harus diisi',
			'current.required_without' => 'Harap memberi checklist jika Anda masih bekerja di perusahaan tersebut atau mengisi tanggal selesai bekerja',
			'industry_id.required' => 'Bidang industri harus diisi',
			'job_position.required' => 'Posisi pekerjaan harus diisi',
			'field_id.required' => 'Bidang pekerjaan harus diisi',
			'job_level_id.required' => 'Jenjang karir harus diisi',
		];
	}
}
