<?php

namespace Modules\Archieve\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Archieve\App\Models\ClassificationCode;
use Modules\Archieve\App\Models\SpecificClassificationCode;
use Modules\Archieve\App\Models\SubClassificationCode;

class SpecificClassificationCodeSeeder extends Seeder
{
    public function run(): void
    {
        $specific_codes = [
            'AR' => [
                '01' => [
                    'Tata Naskah Dinas',
                    'Pola Klasifikasi Arsip',
                    'Jadwal Retensi Arsip',
                    'Sistem Klasifikasi dan Keamanan Akses Arsip',
                    'Pengelolaan Kearsipan Dinamis'
                ],
                '02' => [
                    'Pengelolaan Surat Masuk',
                    'Pengelolaan Surat Keluar'
                ],
                '03' => [
                    'Pengelolaan Arsip Aktif',
                    'Pengelolaan Arsip Inaktif',
                    'Pengelolaan Arsip Vital',
                    'Pengelolaan Arsip Terjaga',
                    'Pengelolaan Arsip Audio Visual',
                    'Pengelolaan Arsip Elektronik',
                    'Alih Media Arsip',
                    'Layanan Arsip',
                    'Pemeliharaan Fisik Arsip'
                ],
                '04' => [
                    'Pemindahan Arsip',
                    'Pemusnahan Arsip',
                    'Penyerahan Arsip Statis'
                ],
                '05' => [
                    'Pembinaan Organisasi Kearsipan',
                    'Pembinaan SDM Kearsipan',
                    'Penyediaan Prasarana dan Sarana Kearsipan'
                ]
            ],
            'BJ' => [
                '01' => [
                    'Tender Seleksi',
                    'Tender Cepat',
                    'Pengadaan Langsung',
                    'e-Purchasing'
                ],
                '02' => [
                    'Layanan Pengadaan Secara Elektronik (LPSE)',
                    'Kontrak Kerja Sama pemerintah dengan Badan Usaha',
                    'Katalog Elektronik Sektoral'
                ]
            ],
            'HK' => [
                '01' => [
                    'Rancangan Undang-undang atau Peraturan Pemerintah Pengganti Undang-undang',
                    'Rancangan Peraturan Pemerintah',
                    'Rancangan Peraturan Presiden',
                    'Rancangan Keputusan Presiden',
                    'Rancangan Instruksi Presiden',
                    'Rancangan Peraturan Menteri Kesehatan',
                    'Rancangan Keputusan Menteri',
                    'Rancangan Keputusan Bersama'
                ],
                '02' => [
                    'Rancangan Instruksi/Surat Edaran Menteri Kesehatan',
                    'Rancangan Keputusan/Surat Edaran Pejabat Setingkat Eselon I',
                    'Rancangan Keputusan/Surat Edaran Pejabat Setingkat Eselon II dan kepala Unit Pelaksana Teknis (UPT)'
                ],
                '03' => [
                    'Kerja Sama Dalam Negeri',
                    'Kerja Sama Luar Negeri'
                ],
                '04' => [
                    'Sosialisasi Hukum',
                    'Dokumentasi Hukum'
                ],
                '05' => [
                    'Bantuan Hukum Kasus Pidana',
                    'Bantuan Hukum Kasus Perdata',
                    'Bantuan Hukum Tata Usaha Negara',
                    'Bantuan Hukum Hak Uji Materiil',
                    'Bantuan Hukum Judicial Review',
                ],
                '06' => [
                    'Kasus/Sengketa Hukum Pidana',
                    'Kasus/Sengketa Hukum Perdata',
                    'Kasus/Sengketa Hukum Tata Usaha Negara'
                ],
                '07' => [
                    'Pengawasan Bidang Kesehatan',
                    'Penyidikan Bidang Kesehatan'
                ],
                '08' => [
                    'Hak Cipta',
                    'Hak Paten (Hak Biasa dan Hak Sederhana)',
                    'Hak Merk'
                ]
            ]
        ];

        foreach($specific_codes as $classificationCode => $subClassificationCodes){
            $classificationCodeId = ClassificationCode::whereMainCode($classificationCode)->first()->id;

            
            foreach($subClassificationCodes as $subClassificationCode => $specificCodes){
                $subClassificationCodeId = SubClassificationCode::whereSubCode($subClassificationCode)
                                            ->whereClassificationCodeId($classificationCodeId)
                                            ->first()
                                            ->id;
                $index = 0;
                foreach($specificCodes as $specificCode){
                    $index++;
                    SpecificClassificationCode::create([
                        'sub_classification_code_id' => $subClassificationCodeId,
                        'specific_code' => sprintf("%02d", $index),
                        'name' => $specificCode,
                        'description' => null,
                    ]);
                }
            }
        }
    }
}
