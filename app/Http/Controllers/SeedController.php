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
		/*
		App\MasterField::firstOrCreate(['name' => 'Operasional']);
		App\MasterField::firstOrCreate(['name' => 'Penerbangan']);
		App\MasterField::firstOrCreate(['name' => 'Penerjemah']);
		App\MasterField::firstOrCreate(['name' => 'Perdagangan']);
		App\MasterField::firstOrCreate(['name' => 'Makanan dan Minuman']);
		App\MasterField::firstOrCreate(['name' => 'Keamanan']);
		App\MasterField::firstOrCreate(['name' => 'Ilmu Kesehatan']);
		App\MasterField::firstOrCreate(['name' => 'Jurnalisme']);
		App\MasterField::firstOrCreate(['name' => 'Seni dan Desain']);
		App\MasterField::firstOrCreate(['name' => 'Sosial dan Humaniora']);
		App\MasterField::firstOrCreate(['name' => 'Sumber Daya Manusia']);
		App\MasterField::firstOrCreate(['name' => 'Teknik']);
		App\MasterField::firstOrCreate(['name' => 'Ritel']);
		App\MasterField::firstOrCreate(['name' => 'Perhotelan, Pariwisata, dan Event']);
		App\MasterField::firstOrCreate(['name' => 'Pemerintahan dan Administrasi Publik']);
		App\MasterField::firstOrCreate(['name' => 'Pertanian dan Pangan']);
		App\MasterField::firstOrCreate(['name' => 'Riset dan Pengembangan']);
		App\MasterField::firstOrCreate(['name' => 'Olahraga']);
		App\MasterField::firstOrCreate(['name' => 'Pemasaran, Penjualan, Pelayanan']);
		App\MasterField::firstOrCreate(['name' => 'Media dan Periklanan']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen dan Bisnis']);
		App\MasterField::firstOrCreate(['name' => 'Konseling dan Psikologi']);
		App\MasterField::firstOrCreate(['name' => 'Hukum dan Kriminalitas']);
		App\MasterField::firstOrCreate(['name' => 'Teknologi Informasi']);
		App\MasterField::firstOrCreate(['name' => 'Akuntansi dan Keuangan']);
		App\MasterField::firstOrCreate(['name' => 'Training dan Pendidikan']);
		App\MasterField::firstOrCreate(['name' => 'Sumber Daya Alam']);
		App\MasterField::firstOrCreate(['name' => 'Peternakan']);
		App\MasterField::firstOrCreate(['name' => 'Ilmu Pengetahuan dan Teknologi']);
		App\MasterField::firstOrCreate(['name' => 'Hubungan Masyarakat']);
		App\MasterField::firstOrCreate(['name' => 'Transportasi, Distribusi, dan Logistik']);
		App\MasterField::firstOrCreate(['name' => 'Arsitektur dan Konstruksi (Desain)']);
		App\MasterField::firstOrCreate(['name' => 'Teologi']);
		App\MasterField::firstOrCreate(['name' => 'Geologi']);
		App\MasterField::firstOrCreate(['name' => 'Farmasi']);
		App\MasterField::firstOrCreate(['name' => 'Percetakan']);
		App\MasterField::firstOrCreate(['name' => 'Geografi']);
		App\MasterField::firstOrCreate(['name' => 'Kelautan']);
		App\MasterField::firstOrCreate(['name' => 'Politik']);
		App\MasterField::firstOrCreate(['name' => 'Hiburan']);
		
		*/
		
		App\MasterField::firstOrCreate(['name' => 'Dokter Umum']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Gigi']);
		App\MasterField::firstOrCreate(['name' => 'Administrasi']);
		App\MasterField::firstOrCreate(['name' => 'Administrasi Export']);
		App\MasterField::firstOrCreate(['name' => 'Administrasi Import']);
		App\MasterField::firstOrCreate(['name' => 'Agen Real Estate']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Ekonomi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Geologi']);
		App\MasterField::firstOrCreate(['name' => 'Penjahit']);
		App\MasterField::firstOrCreate(['name' => 'Aktuaria']);
		App\MasterField::firstOrCreate(['name' => 'Aktuaria Perpajakan']);
		App\MasterField::firstOrCreate(['name' => 'Akuntansi, Keuangan']);
		App\MasterField::firstOrCreate(['name' => 'Apoteker']);
		App\MasterField::firstOrCreate(['name' => 'Arsitek']);
		App\MasterField::firstOrCreate(['name' => 'Arsitek Kapal Laut']);
		App\MasterField::firstOrCreate(['name' => 'Programmer, IT']);
		App\MasterField::firstOrCreate(['name' => 'System Analyst, IT']);
		App\MasterField::firstOrCreate(['name' => 'Akuntansi, Keuangan']);
		App\MasterField::firstOrCreate(['name' => 'Fisikawan']);
		App\MasterField::firstOrCreate(['name' => 'Astronot']);
		App\MasterField::firstOrCreate(['name' => 'Ilmuwan']);
		App\MasterField::firstOrCreate(['name' => 'Apoteker']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Jaringan']);
		App\MasterField::firstOrCreate(['name' => 'Pramugari']);
		App\MasterField::firstOrCreate(['name' => 'Pilot']);
		App\MasterField::firstOrCreate(['name' => 'Supir']);
		App\MasterField::firstOrCreate(['name' => 'HRD']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Mesin']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Metalurgi']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi']);
		App\MasterField::firstOrCreate(['name' => 'Pustakawan']);
		App\MasterField::firstOrCreate(['name' => 'Resepsionis']);
		App\MasterField::firstOrCreate(['name' => 'Reporter']);
		App\MasterField::firstOrCreate(['name' => 'Wartawan']);
		App\MasterField::firstOrCreate(['name' => 'Psikiater']);
		App\MasterField::firstOrCreate(['name' => 'Psikolog']);
		App\MasterField::firstOrCreate(['name' => 'Pendidik']);
		App\MasterField::firstOrCreate(['name' => 'Pelatih Olahraga']);
		App\MasterField::firstOrCreate(['name' => 'model Fashion']);
		App\MasterField::firstOrCreate(['name' => 'Sekretaris']);
		App\MasterField::firstOrCreate(['name' => 'Sekuritas, Trader']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Perangkat Keras']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Perangkat Lunak']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Pertanian']);
		App\MasterField::firstOrCreate(['name' => 'Arkeolog']);
		App\MasterField::firstOrCreate(['name' => 'Periklanan']);
		App\MasterField::firstOrCreate(['name' => 'Pemandu Wisata']);
		App\MasterField::firstOrCreate(['name' => 'Pramuwisma']);
		App\MasterField::firstOrCreate(['name' => 'Terapis']);
		App\MasterField::firstOrCreate(['name' => 'Pendidik']);
		App\MasterField::firstOrCreate(['name' => 'Juru Masak']);
		App\MasterField::firstOrCreate(['name' => 'Desain Interior']);
		App\MasterField::firstOrCreate(['name' => 'Sekretaris']);
		App\MasterField::firstOrCreate(['name' => 'Pramuniaga']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Perangkat Keras']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Perangkat Lunak']);
		App\MasterField::firstOrCreate(['name' => 'Teknik Pertanian']);
		App\MasterField::firstOrCreate(['name' => 'Arkeolog']);
		App\MasterField::firstOrCreate(['name' => 'Periklanan']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Hewan']);
		App\MasterField::firstOrCreate(['name' => 'Penyanyi']);
		App\MasterField::firstOrCreate(['name' => 'Perawat']);
		App\MasterField::firstOrCreate(['name' => 'Operator']);
		App\MasterField::firstOrCreate(['name' => 'Penerjemah']);
		App\MasterField::firstOrCreate(['name' => 'Merchandiser']);
		App\MasterField::firstOrCreate(['name' => 'Asisten Lab']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Lab Klinis']);
		App\MasterField::firstOrCreate(['name' => 'Perawat']);
		App\MasterField::firstOrCreate(['name' => 'Operator']);
		App\MasterField::firstOrCreate(['name' => 'Penerjemah']);
		App\MasterField::firstOrCreate(['name' => 'Merchandiser']);
		App\MasterField::firstOrCreate(['name' => 'Perencana Pola']);
		App\MasterField::firstOrCreate(['name' => 'Konseptor Desain/Penggambar']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Produk']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Geofisika']);
		App\MasterField::firstOrCreate(['name' => 'Aktor']);
		App\MasterField::firstOrCreate(['name' => 'Juru Kamera']);
		App\MasterField::firstOrCreate(['name' => 'Musisi']);
		App\MasterField::firstOrCreate(['name' => 'Penari']);
		App\MasterField::firstOrCreate(['name' => 'Penulis']);
		App\MasterField::firstOrCreate(['name' => 'Produser']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Hotel']);
		App\MasterField::firstOrCreate(['name' => 'Penjaga Kebersihan']);
		App\MasterField::firstOrCreate(['name' => 'Petugas Layanan Tiket']);
		App\MasterField::firstOrCreate(['name' => 'Pengurus Gaji']);
		App\MasterField::firstOrCreate(['name' => 'Rekrutmen']);
		App\MasterField::firstOrCreate(['name' => 'Editor']);
		App\MasterField::firstOrCreate(['name' => 'Perencana Pola']);
		App\MasterField::firstOrCreate(['name' => 'Konseptor Desain/Penggambar']);
		
		
		App\Facility::firstOrCreate(['name' => 'Fasilitas Kesehatan']);
		App\Facility::firstOrCreate(['name' => 'Pensiun dan Tabungan Perencanaan']);
		App\Facility::firstOrCreate(['name' => 'Pembayaran Cuti']);
		App\Facility::firstOrCreate(['name' => 'Jadwal Fleksibel']);
		App\Facility::firstOrCreate(['name' => 'Tunjangan Perjalanan']);
		App\Facility::firstOrCreate(['name' => 'Fasilitas Tempat Tinggal']);
		App\Facility::firstOrCreate(['name' => 'Program Komunitas Karyawan']);
		App\Facility::firstOrCreate(['name' => 'Fasilitas Studi']);
		App\Facility::firstOrCreate(['name' => 'Fasilitas Bantuan Hukum']);
		
		echo "success";
	}
}
