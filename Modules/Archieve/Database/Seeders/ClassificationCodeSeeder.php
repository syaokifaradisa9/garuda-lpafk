<?php

namespace Modules\Archieve\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Archieve\App\Models\ClassificationCode;

class ClassificationCodeSeeder extends Seeder
{
    public function run(): void
    {
        $codes = [
            'AR' => 'Kearsipan',
            'BJ' => 'Pengadaan Barang dan Jasa',
            'IR' => 'Informatika',
            'HK' => 'Hukum',
            'KH' => 'Kemahasiswaan',
            'KM' => 'Komunikasi Publik',
            'KN' => 'Kekayaan Negara',
            'KP' => 'Kepegawaian',
            'KR' => 'Kerumahtanggaan',
            'KS' => 'Kerja Sama Luar Negeri',
            'KU' => 'Keuangan',
            'MR' => 'Manajemen Risiko',
            'MR' => 'Manajemen Risiko',
            'OT' => 'Organisasi dan Tata Laksana',
            'PP' => 'Pendidikan dan Pengajaran',
            'PR' => 'Perencanaan',
            'PS' => 'Pengawasan',
            'UM' => 'Umum',
            
            'AD' => 'Analisis Determinan Kesehatan',
            'BP' => 'Kebijakan Pembangunan Kesehatan',
            'DP' => 'Penyediaan Tenaga Kesehatan',
            'FH' => 'Ketahanan Kefarmasian dan Alat Kesehatan',
            'FK' => 'Pengawasan Alat Kesehatan',
            'FP' => 'Produksi dan Distribusi Kefarmasian',
            'FR' => 'Produksi dan Distribusi Alat Kesehatan',
            'FY' => 'Pengelolaan dan Pelayanan Kefarmasian',
            'GM' => 'Gizi Masyarakat',
            'HJ' => 'Kesehatan Haji',
            'IM' => 'Imunisasi',
            'JP' => 'Pembiayaan dan Jaminan Kesehatan',
            'KG' => 'Kesehatan Keluarga',
            'KI' => 'Konsil Kedokteran Indonesia',
            'KJ' => 'Kesehatan Jiwa',
            'KK' => 'Penanggulangan Krisis Kesehatan',
            'KL' => 'Kesehatan Lingkungan',
            'KO' => 'Kesehatan Kerja dan Olahraga',
            'KT' => 'Tenaga Kesehatan Indonesia',
            'PG' => 'Pendayagunaan tenaga Kesehatan',
            'PL' => 'Peningkatan Mutu tenaga Kesehatan dan Penunjang Kesehatan',
            'PK' => 'Promosi Kesehatan dan pemberdayaan Masyarakat',
            'PM' => 'Pencegahan dan Pengendalian Penyakit Menular',
            'PN' => 'Perencanaan Tenaga Kesehatan',
            'PT' => 'Pembinaan dan Pengawasan tenaga Kesehatan',
            'PV' => 'Pencegahan dan Pengendalian Penyakit Tular Vektor dan Zoonotik',
            'RS' => 'Pelayanan Kesehatan di RS dan Fasilitas Kesehatan Lainnya',
            'SR' => 'Surveilans dan Kekarantinaan Kesehatan',
            'SS' => 'Sistem dan Strategi Kesehatan',
            'TK' => 'Tata kelola Pelayanan Kesehatan',
            'TL' => 'Pengembangan Teknologi Laboratorium',
            'TM' => 'Pencegahan dan Pengendalian Penyakit Tidak Menular',
            'YK' => 'Fasilitas Pelayanan Kesehatan',
            'YM' => 'Mutu Pelayanan Kesehatan',
            'YP' => 'Pelayanan Kesehatan Primer',
            'YR' => 'Pelayanan Kesehatan Rujukan',
            'YT' => 'Pelayanan Kesehatan Tradisional',
        ];

        foreach($codes as $code => $name){
            ClassificationCode::create([
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
