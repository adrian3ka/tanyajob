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


		App\MasterMajor::firstOrCreate(['name' => 'Kedokteran']);
		App\MasterMajor::firstOrCreate(['name' => 'Kedokteran Gigi']);
		App\MasterMajor::firstOrCreate(['name' => 'Kedokteran Hewan']);
		App\MasterMajor::firstOrCreate(['name' => 'Kesehatan Masyarakat']);
		App\MasterMajor::firstOrCreate(['name' => 'Kesehatan Lingkungan']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Gizi']);
		App\MasterMajor::firstOrCreate(['name' => 'Keselamatan & Kesehatan Kerja']);
		App\MasterMajor::firstOrCreate(['name' => 'Kesehatan Lingkungan']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Keperawatan']);
		App\MasterMajor::firstOrCreate(['name' => 'Farmasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Nutrisi dan Teknologi Pangan']);
		App\MasterMajor::firstOrCreate(['name' => 'Kesehatan Lingkungan']);
		App\MasterMajor::firstOrCreate(['name' => 'Kebidanan']);
		App\MasterMajor::firstOrCreate(['name' => 'Fisioterafi']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Keolahragaan']);
		App\MasterMajor::firstOrCreate(['name' => 'Teknik Radiodiagnostik dan Radioterapi']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Pelayanan Rumah Sakit']);
		App\MasterMajor::firstOrCreate(['name' => 'Matematika']);
		App\MasterMajor::firstOrCreate(['name' => 'Fisika']);
		App\MasterMajor::firstOrCreate(['name' => 'Kimia']);
		App\MasterMajor::firstOrCreate(['name' => 'Biologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Statistika']);
		App\MasterMajor::firstOrCreate(['name' => 'Astronomi']);
		App\MasterMajor::firstOrCreate(['name' => 'Bioteknologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Geofisika']);
		App\MasterMajor::firstOrCreate(['name' => 'Meteorologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Geografi']);
		App\MasterMajor::firstOrCreate(['name' => 'Biokimia']);
		App\MasterMajor::firstOrCreate(['name' => 'Metrologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Aktuaria']);
		App\MasterMajor::firstOrCreate(['name' => 'Statistika Terapan']);
		App\MasterMajor::firstOrCreate(['name' => 'Mikrobiologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Bioentrepreneurship']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Pangan (Food Science)']);
		App\MasterMajor::firstOrCreate(['name' => 'Matematika Bisnis']);
		App\MasterMajor::firstOrCreate(['name' => 'Fisika Medis']);
		App\MasterMajor::firstOrCreate(['name' => 'Kartografi dan Penginderaan Jauh']);
		App\MasterMajor::firstOrCreate(['name' => 'Pengelolaan dan Pemberdayaan SDA dan Lingkungan']);
		App\MasterMajor::firstOrCreate(['name' => 'llmu Politik']);
		App\MasterMajor::firstOrCreate(['name' => 'Filsafat']);
		App\MasterMajor::firstOrCreate(['name' => 'Kriminologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Psikologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Hukum']);
		App\MasterMajor::firstOrCreate(['name' => 'Sosiologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Jurnalistik']);
		App\MasterMajor::firstOrCreate(['name' => 'Antropologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Hubungan Internasional (HI)']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Kesejahteraan Sosial']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Pemerintahan']);
		App\MasterMajor::firstOrCreate(['name' => 'Administrasi Publik']);
		App\MasterMajor::firstOrCreate(['name' => 'Administrasi Bisnis']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Komunikasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Hubungan Masyarakat']);
		App\MasterMajor::firstOrCreate(['name' => 'Marketing Communication']);
		App\MasterMajor::firstOrCreate(['name' => 'Penyiaran (Broadcasting)']);
		App\MasterMajor::firstOrCreate(['name' => 'Periklanan (Advertiing)']);
		App\MasterMajor::firstOrCreate(['name' => 'Peradilan Agama']);
		App\MasterMajor::firstOrCreate(['name' => 'Politik Islam']);
		App\MasterMajor::firstOrCreate(['name' => 'Pembangunan Sosial dan Kesejahteraan']);
		App\MasterMajor::firstOrCreate(['name' => 'Hukum Bisnis']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Komunikasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Sains Komunikasi dan Pengembangan Masyarakat']);
		App\MasterMajor::firstOrCreate(['name' => 'Kearsipan']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Produksi Media']);
		App\MasterMajor::firstOrCreate(['name' => 'Akuntansi']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Keuangan']);
		App\MasterMajor::firstOrCreate(['name' => 'Menajemen Sumber Daya Manusia dan Organisasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Operasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Pemasaran']);
		App\MasterMajor::firstOrCreate(['name' => 'Administrasi Fiskal']);
		App\MasterMajor::firstOrCreate(['name' => 'Ekonomi']);
		App\MasterMajor::firstOrCreate(['name' => 'Bisnis Internasional']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Informatika']);
		App\MasterMajor::firstOrCreate(['name' => 'Ekonomi Pembangunan']);
		App\MasterMajor::firstOrCreate(['name' => 'Techopreneurship']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Keuangan Syariah']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Bisnis']);
		App\MasterMajor::firstOrCreate(['name' => 'Kewirausahaan']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Bisnis dan Pemasaran']);
		App\MasterMajor::firstOrCreate(['name' => 'Manajemen Bisnis Internasional']);
		App\MasterMajor::firstOrCreate(['name' => 'Keuangan']);
		App\MasterMajor::firstOrCreate(['name' => 'Pemasaran Internasional']);
		App\MasterMajor::firstOrCreate(['name' => 'Administrasi Keuangan']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Sejarah']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Inggris']);
		App\MasterMajor::firstOrCreate(['name' => 'Arkeologi']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Jawa']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Arab']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Jepang']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Indonesia']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Rusia']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Perancis']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Korea']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Jerman']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Belanda']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Cina']);
		App\MasterMajor::firstOrCreate(['name' => 'Sastra Nusantara']);
		App\MasterMajor::firstOrCreate(['name' => 'Sejarah dan Kebudayaan Islam']);
		App\MasterMajor::firstOrCreate(['name' => 'Teknik Informatika (Computer Science)']);
		App\MasterMajor::firstOrCreate(['name' => 'Mobile Application & Technology']);
		App\MasterMajor::firstOrCreate(['name' => 'Sistem Informasi (Manajemen Informatika)']);
		App\MasterMajor::firstOrCreate(['name' => 'Teknologi Game']);
		App\MasterMajor::firstOrCreate(['name' => 'Ilmu Komputasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Cyber Security']);
		App\MasterMajor::firstOrCreate(['name' => 'Bioinformatika']);
		App\MasterMajor::firstOrCreate(['name' => 'Sistem Komputer']);
		App\MasterMajor::firstOrCreate(['name' => 'Teknik Komputer']);
		App\MasterMajor::firstOrCreate(['name' => 'Sistem dan Teknologi Informasi']);
		App\MasterMajor::firstOrCreate(['name' => 'Komputer Akuntansi']);
		App\MasterMajor::firstOrCreate(['name' => 'Pariwisata']);
		

		App\SkillSet::firstOrCreate(['name' => 'PHP']);
		App\SkillSet::firstOrCreate(['name' => 'MySQL']);
		App\SkillSet::firstOrCreate(['name' => 'Scripting']);
		App\SkillSet::firstOrCreate(['name' => 'COBOL']);
		App\SkillSet::firstOrCreate(['name' => 'Microsoft Word']);


		App\MasterLocation::firstOrCreate(['name' => 'Banda Aceh']);
		App\MasterLocation::firstOrCreate(['name' => 'Medan']);
		App\MasterLocation::firstOrCreate(['name' => 'Padang']);
		App\MasterLocation::firstOrCreate(['name' => 'Pekanbaru']);
		App\MasterLocation::firstOrCreate(['name' => 'Jambi']);
		App\MasterLocation::firstOrCreate(['name' => 'Tanjungpinang']);
		App\MasterLocation::firstOrCreate(['name' => 'Bengkulu']);
		App\MasterLocation::firstOrCreate(['name' => 'Palembang']);
		App\MasterLocation::firstOrCreate(['name' => 'Pangkalpinang']);
		App\MasterLocation::firstOrCreate(['name' => 'Bandar Lampung']);
		App\MasterLocation::firstOrCreate(['name' => 'Batam']);
		App\MasterLocation::firstOrCreate(['name' => 'Pematang Siantar']);
		App\MasterLocation::firstOrCreate(['name' => 'Surabaya']);
		App\MasterLocation::firstOrCreate(['name' => 'Serang']);
		App\MasterLocation::firstOrCreate(['name' => 'Jakarta']);
		App\MasterLocation::firstOrCreate(['name' => 'Bekasi']);
		App\MasterLocation::firstOrCreate(['name' => 'Karawang']);
		App\MasterLocation::firstOrCreate(['name' => 'Purwakarta']);
		App\MasterLocation::firstOrCreate(['name' => 'Tangerang']);
		App\MasterLocation::firstOrCreate(['name' => 'Bandung']);
		App\MasterLocation::firstOrCreate(['name' => 'Depok']);
		App\MasterLocation::firstOrCreate(['name' => 'Semarang']);
		App\MasterLocation::firstOrCreate(['name' => 'Bogor']);
		App\MasterLocation::firstOrCreate(['name' => 'Malang']);
		App\MasterLocation::firstOrCreate(['name' => 'Yogyakarta']);
		App\MasterLocation::firstOrCreate(['name' => 'Makassar']);
		App\MasterLocation::firstOrCreate(['name' => 'Manado']);
		App\MasterLocation::firstOrCreate(['name' => 'Palu']);
		App\MasterLocation::firstOrCreate(['name' => 'Kendari']);
		App\MasterLocation::firstOrCreate(['name' => 'Gorontalo']);
		App\MasterLocation::firstOrCreate(['name' => 'Bitung']);
		App\MasterLocation::firstOrCreate(['name' => 'Parepare']);
		App\MasterLocation::firstOrCreate(['name' => 'Denpasar']);
		App\MasterLocation::firstOrCreate(['name' => 'Lombok']);
		App\MasterLocation::firstOrCreate(['name' => 'Mataram']);
		App\MasterLocation::firstOrCreate(['name' => 'Kendari']);
		App\MasterLocation::firstOrCreate(['name' => 'Mamuju']);
		App\MasterLocation::firstOrCreate(['name' => 'Kupang']);
		App\MasterLocation::firstOrCreate(['name' => 'Mataram']);
		App\MasterLocation::firstOrCreate(['name' => 'Pontianak']);
		App\MasterLocation::firstOrCreate(['name' => 'Palangka Raya']);
		App\MasterLocation::firstOrCreate(['name' => 'Banjarmasin']);
		App\MasterLocation::firstOrCreate(['name' => 'Samarinda']);
		App\MasterLocation::firstOrCreate(['name' => 'Tanjung Selor']);
		App\MasterLocation::firstOrCreate(['name' => 'Ambon']);
		App\MasterLocation::firstOrCreate(['name' => 'Manokwari']);
		
		
		

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
