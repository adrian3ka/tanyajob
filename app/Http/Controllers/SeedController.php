<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class SeedController extends Controller
{
	function index(){
		App\MasterDegree::firstOrCreate(['name' => 'SMA']);
		App\MasterDegree::firstOrCreate(['name' => 'SMK']);
		App\MasterDegree::firstOrCreate(['name' => 'Sarjana (S1)']);
		App\MasterDegree::firstOrCreate(['name' => 'Magister (S2)']);
		App\MasterDegree::firstOrCreate(['name' => 'Doktor (S3)']);


		App\MasterMajor::firstOrCreate(['name' => 'Teknik Informatika (Computer Science)']);
		App\MasterMajor::firstOrCreate(['name' => 'Pariwisata']);
		App\MasterMajor::firstOrCreate(['name' => 'Akuntansi']);
		App\MasterMajor::firstOrCreate(['name' => 'Ekonomi']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen']);

		App\SkillSet::firstOrCreate(['name' => 'PHP']);
		App\SkillSet::firstOrCreate(['name' => 'MySQL']);
		App\SkillSet::firstOrCreate(['name' => 'Scripting']);
		App\SkillSet::firstOrCreate(['name' => 'COBOL']);
		App\SkillSet::firstOrCreate(['name' => 'Microsoft Word']);


		App\MasterLocation::firstOrCreate(['name' => 'DKI-Jakarta']);
		App\MasterLocation::firstOrCreate(['name' => 'DIY-Yogyakarta']);
		App\MasterLocation::firstOrCreate(['name' => 'Bantul']);
		App\MasterLocation::firstOrCreate(['name' => 'Sleman']);
		App\MasterLocation::firstOrCreate(['name' => 'Bandung']);

		App\Facility::firstOrCreate(['name' => 'Makan Siang']);
		App\Facility::firstOrCreate(['name' => 'Makan Malam']);
		App\Facility::firstOrCreate(['name' => 'Gaji Net']);
		App\Facility::firstOrCreate(['name' => 'Asuransi Kesehatan']);
		
		App\MasterField::firstOrCreate(['name' => 'Operasional']);
		App\MasterField::firstOrCreate(['name' => 'Penerbangan']);
		App\MasterField::firstOrCreate(['name' => 'Penerjemah']);
		App\MasterField::firstOrCreate(['name' => 'Penerbangan']);
		App\MasterField::firstOrCreate(['name' => 'Restoran']);
		App\MasterField::firstOrCreate(['name' => 'Kesehatan']);
		App\MasterField::firstOrCreate(['name' => 'Jurnalisme']);
		echo "success";
	}
}
