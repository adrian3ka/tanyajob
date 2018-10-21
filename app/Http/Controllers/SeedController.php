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
		
		*/
		App\MasterIndustry::firstOrCreate(['name' => 'Politik']);
		App\MasterIndustry::firstOrCreate(['name' => 'Hiburan']);
		
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
		
		App\MasterField::firstOrCreate(['name' => 'Pemandu Wisata']);
		App\MasterField::firstOrCreate(['name' => 'Sekretaris']);
		App\MasterField::firstOrCreate(['name' => 'Quality Assurance']);
		App\MasterField::firstOrCreate(['name' => 'Hubungan Masyarakat']);
		App\MasterField::firstOrCreate(['name' => 'Marketing']);
		App\MasterField::firstOrCreate(['name' => 'Pengacara']);
		App\MasterField::firstOrCreate(['name' => 'Pengacara Hak Paten/Hak Cipta']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Statistik']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Matematika']);
		App\MasterField::firstOrCreate(['name' => 'Auditor IT']);
		App\MasterField::firstOrCreate(['name' => 'UI/UX Designer']);
		App\MasterField::firstOrCreate(['name' => 'Editor']);
		App\MasterField::firstOrCreate(['name' => 'Polisi']);
		App\MasterField::firstOrCreate(['name' => 'Pemadam Kebakaran']);
		App\MasterField::firstOrCreate(['name' => 'Pemandu Wisata']);
		App\MasterField::firstOrCreate(['name' => 'Petugas Keamanan']);
		App\MasterField::firstOrCreate(['name' => 'Regu Keamanan Pantai']);
		App\MasterField::firstOrCreate(['name' => 'Tentara']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Bedah']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Anestesi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Kandungan']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Medis Lain']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Syaraf']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Anak']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Gigi']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Hewan']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Mata']);
		App\MasterField::firstOrCreate(['name' => 'Dokter Umum']);
		App\MasterField::firstOrCreate(['name' => 'Kardiologis']);
		App\MasterField::firstOrCreate(['name' => 'Psikiatris']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Fisioterapi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Kacamata']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Patologi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Radiografi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Sonografi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Terapi Lainnya']);
		App\MasterField::firstOrCreate(['name' => 'Juru Bidan']);
		App\MasterField::firstOrCreate(['name' => 'Juru Tulis Medis']);
		App\MasterField::firstOrCreate(['name' => 'Kiropraktor']);
		App\MasterField::firstOrCreate(['name' => 'Paramedis']);
		App\MasterField::firstOrCreate(['name' => 'Suster']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Medis Lain']);
		App\MasterField::firstOrCreate(['name' => 'Perpajakan']);
		App\MasterField::firstOrCreate(['name' => 'Analis Saham']);
		App\MasterField::firstOrCreate(['name' => 'Bendahara Korporasi']);
		App\MasterField::firstOrCreate(['name' => 'Investasi Perbankan']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Investasi']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Akuntansi Biaya']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Instrumentasi']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Sistem Kontrol']);
		App\MasterField::firstOrCreate(['name' => 'Freight Forwarding']);
		App\MasterField::firstOrCreate(['name' => 'Operasi Pengiriman']);
		App\MasterField::firstOrCreate(['name' => 'Barista']);
		App\MasterField::firstOrCreate(['name' => 'Bartender']);
		App\MasterField::firstOrCreate(['name' => 'Pembantu Dapur']);
		App\MasterField::firstOrCreate(['name' => 'Desainer Industri']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Terapi Lainnya']);
		App\MasterField::firstOrCreate(['name' => 'Operator Mesin Presisi']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Percetakan']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Pengetesan']);
		App\MasterField::firstOrCreate(['name' => 'Operator Produksi']);
		App\MasterField::firstOrCreate(['name' => 'Tukang Las']);
		App\MasterField::firstOrCreate(['name' => 'Visual Merchandiser']);
		App\MasterField::firstOrCreate(['name' => 'Pelapis Batu Bata']);
		App\MasterField::firstOrCreate(['name' => 'Pelukis']);
		App\MasterField::firstOrCreate(['name' => 'Pembantu']);
		App\MasterField::firstOrCreate(['name' => 'Kurir']);
		App\MasterField::firstOrCreate(['name' => 'Petugas Taman']);
		App\MasterField::firstOrCreate(['name' => 'Tukang Kayu']);
		App\MasterField::firstOrCreate(['name' => 'Tukang Ledeng']);
		App\MasterField::firstOrCreate(['name' => 'Tukang Listrik']);
		App\MasterField::firstOrCreate(['name' => 'Konselor']);
		App\MasterField::firstOrCreate(['name' => 'Petugas Sosial']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Acara']);
		App\MasterField::firstOrCreate(['name' => 'Riset Pasar']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Brand']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Produk']);
		App\MasterField::firstOrCreate(['name' => 'Kontrol Inventoris']);
		App\MasterField::firstOrCreate(['name' => 'Perencana Materi']);
		App\MasterField::firstOrCreate(['name' => 'Pemelihara Gedung/Fasilitas']);
		App\MasterField::firstOrCreate(['name' => 'Pemelihara Mesin']);
		App\MasterField::firstOrCreate(['name' => 'Dosen']);
		App\MasterField::firstOrCreate(['name' => 'Guru Besar']);
		App\MasterField::firstOrCreate(['name' => 'Kepala Sekolah']);
		App\MasterField::firstOrCreate(['name' => 'Penitipan Anak']);
		App\MasterField::firstOrCreate(['name' => 'Operasi Bandara']);
		App\MasterField::firstOrCreate(['name' => 'Operator Mesin Cetak']);
		App\MasterField::firstOrCreate(['name' => 'Eksekutif Penjualan']);
		App\MasterField::firstOrCreate(['name' => 'Koordinator Pendukung Penjualan']);
		App\MasterField::firstOrCreate(['name' => 'Penjualan Regional']);
		App\MasterField::firstOrCreate(['name' => 'Agen Asuransi']);
		App\MasterField::firstOrCreate(['name' => 'Agen Penjualan']);
		App\MasterField::firstOrCreate(['name' => 'Kasir']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Kecantikan/Rias']);
		App\MasterField::firstOrCreate(['name' => 'Instruktor Fitnes']);
		App\MasterField::firstOrCreate(['name' => 'Pemijat']);
		App\MasterField::firstOrCreate(['name' => 'Penata Rambut']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Kredit']);
		App\MasterField::firstOrCreate(['name' => 'Manajemen Risiko']);
		App\MasterField::firstOrCreate(['name' => 'Penjamin Asuransi']);
		App\MasterField::firstOrCreate(['name' => 'Pinjaman/Hipotek']);
		App\MasterField::firstOrCreate(['name' => 'Pemelihara Gedung/Fasilitas']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Negosiasi Real Estate']);
		App\MasterField::firstOrCreate(['name' => 'Penilai Properti']);
		App\MasterField::firstOrCreate(['name' => 'Penjual Properti']);
		App\MasterField::firstOrCreate(['name' => 'Pengembangan Properti']);
		App\MasterField::firstOrCreate(['name' => 'Persewaan Properti']);
		App\MasterField::firstOrCreate(['name' => 'Koordinator Pendukung Penjualan']);
		App\MasterField::firstOrCreate(['name' => 'Konsultan Telesales']);
		App\MasterField::firstOrCreate(['name' => 'Desain Multimedia']);
		App\MasterField::firstOrCreate(['name' => 'Desain Grafis']);
		App\MasterField::firstOrCreate(['name' => 'Desain Web']);
		App\MasterField::firstOrCreate(['name' => 'Desainer Bunga']);
		App\MasterField::firstOrCreate(['name' => 'Konseptor Desain']);
		App\MasterField::firstOrCreate(['name' => 'Chief Executive Officer (CEO)']);
		App\MasterField::firstOrCreate(['name' => 'Chief Financial Officer (CFO)']);
		App\MasterField::firstOrCreate(['name' => 'Chief Operation Officer (COO)']);
		App\MasterField::firstOrCreate(['name' => 'Chief Technology Officer (CTO)']);
		App\MasterField::firstOrCreate(['name' => 'Manager Regional/Wilayah']);
		App\MasterField::firstOrCreate(['name' => 'Pensurvei Kuantitas']);
		App\MasterField::firstOrCreate(['name' => 'Mechatronics Engineer']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi/Pendukung Elektrikal']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi SMT']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi R&D']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Industri/Produksi']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Agrikultural']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Biologikal']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Kelautan']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Nuklir']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Lingkungan, Kesehatan, Keamanan']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Pengeboran/Sumur']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Waduk']);
		App\MasterField::firstOrCreate(['name' => 'Mandor']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Struktural']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Situs']);
		App\MasterField::firstOrCreate(['name' => 'Teknisi Struktural']);
		App\MasterField::firstOrCreate(['name' => 'Helpdesk IT']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Gizi']);
		App\MasterField::firstOrCreate(['name' => 'Ahli Pangan']);s
		
		
		
		App\Facility::firstOrCreate(['name' => 'Fasilitas Kesehatan']);
		App\Facility::firstOrCreate(['name' => 'Pensiun dan Tabungan Perencanaan']);
		App\Facility::firstOrCreate(['name' => 'Pembayaran Cuti']);
		App\Facility::firstOrCreate(['name' => 'Jadwal Fleksibel']);
		App\Facility::firstOrCreate(['name' => 'Tunjangan Perjalanan']);
		App\Facility::firstOrCreate(['name' => 'Fasilitas Tempat Tinggal']);
		App\Facility::firstOrCreate(['name' => 'Program Komunitas Karyawan']);
		App\Facility::firstOrCreate(['name' => 'Fasilitas Studi']);
		App\Facility::firstOrCreate(['name' => 'Fasilitas Bantuan Hukum']);
		
		
		App\MasterJobLevel::firstOrCreate(['name' => 'Magang']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Staff']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Staff Senior']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Supervisor']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Asisten Manajer']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Asisten Manajer Senior']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Manajer']);
		App\MasterJobLevel::firstOrCreate(['name' => 'Manajer Senior']);
		App\MasterJobLevel::firstOrCreate(['name' => 'General Manajer']);
		echo "success";
	}
}
