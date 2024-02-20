<?php

namespace Modules\Archieve\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Archieve\App\Models\ClassificationCode;
use Modules\Archieve\App\Models\SubClassificationCode;

class SubClassificationCodeSeeder extends Seeder
{
    public function run(): void
    {
        $subClassificationCodes = [
            'BJ' => [
                [
                    'code' => '01',
                    'name' => 'Pengadaan Barang dan Jasa',
                ],[
                    'code' => '02',
                    'name' => 'Layanan Pengadaan Barang dan Jasa',
                ]
            ],
            'HK' => [
                [
                    'code' => '01',
                    'name' => 'Rancangan Peraturan Perundang-undangan',
                ],[
                    'code' => '02',
                    'name' => 'Rancangan Instruksi/Surat Edaran'
                ],[
                    'code' => '03',
                    'name' => 'Rancangan Nota Kesepahaman/Memorandum Of Understanding (MoU)/Kontrak/Kerjasama'
                ],[
                    'code' => '04',
                    'name' => 'Pembinaan Hukum',
                ],[
                    'code' => '05',
                    'name' => 'Bantuan Hukum',
                ],[
                    'code' => '06',
                    'name' => 'Kasus/Sengketa Hukum',
                ],[
                    'code' => '07',
                    'name' => 'Pengawasan dan Penyidikan Bidang Kesehatan'
                ],[
                    'code' => '08',
                    'name' => 'Kekayaan Intelektual',
                ]
            ],
            'IR' => [
                [
                    'code' => '01',
                    'name' => 'Pengembangan Sistem Informasi',
                ],[
                    'code' => '02',
                    'name' => 'Pengelolaan Teknologi Informasi'
                ],[
                    'code' => '03',
                    'name' => 'Pengelolaan Data dan Informasi',
                ]
            ],
            'KM' => [
                [
                    'code' => '01',
                    'name' => 'Media Masa',
                ],[
                    'code' => '02',
                    'name' => 'Opini Publik'
                ],[
                    'code' => '03',
                    'name' => 'Produksi Komunikasi',
                ],[
                    'code' => '04',
                    'name' => 'Hubungan Antar Lembaga',
                ],[
                    'code' => '05',
                    'name' => 'Pelayanan Informasi Publik',
                ],[
                    'code' => '06',
                    'name' => 'penerbitan Dan Perpustakaan'
                ]
            ],
            'KN' => [
                [
                    'code' => '01',
                    'name' => 'Barang Milik Negara (BMN)'
                ],
            ],
            'KP' => [
                [
                    'code' => '01',
                    'name' => 'Pengadaan Pegawai'
                ],[
                    'code' => '02',
                    'name' => 'Mutasi Pegawai',
                ],[
                    'code' => '03',
                    'name' => 'Pengembangan pegawai',
                ],[
                    'code' => '04',
                    'name' => 'Disiplin dan Kesejahteraan Pegawai',
                ]
            ],
            'KR' => [
                [
                    'code' => '01',
                    'name' => 'Pelayanan Kerumahtanggan',
                ],[
                    'code' => '02',
                    'name' => 'Pemeliharaan dan Perbaikan'
                ],[
                    'code' => '03',
                    'name' => 'Pengelolaan jaringan',
                ],[
                    'code' => '04',
                    'name' => 'Pengelolaan Kendaraan Dinas',
                ],[
                    'code' => '05',
                    'name' => 'Ketertiban Dan Keamanan',
                ]
            ],
            'KS' => [
                [
                    'code' => '01',
                    'name' => 'Penyusunan Dokumen Kerja Sama Luar Negeri'
                ],[
                    'code' => '02',
                    'name' => 'Penyusunan Program, Perencanaan, Pemantauan dan Evaluasi Kerja Sama KEsehatan Luar Negeri'
                ],[
                    'code' => '03',
                    'name' => 'Administrasi Kerja Sama Luar Negeri'
                ],
            ],
            'KU' => [
                [
                    'code' => '01',
                    'name' => 'Tata Laksana Keuangan',
                ],[
                    'code' => '02',
                    'name' => 'Pelaksanaan Anggaran'
                ],[
                    'code' => '03',
                    'name' => 'Pengelolaan Perbendaharaan'
                ],[
                    'code' => '04',
                    'name' => 'Akuntansi dan Pelaporan Keuangan',
                ]
            ],
            'MR' => [
                [
                    'code' => '01',
                    'name' => 'Manajemen Risiko di Lingkungan kementrian Kesehatan'
                ]
            ],
            'OT' => [
                [
                    'code' => '01',
                    'name' => 'Organisasi'
                ],[
                    'code' => '02',
                    'name' => 'Ketatalaksanaan'
                ],[
                    'code' => '03',
                    'name' => 'Analisis Jabatan'
                ],[
                    'code' => '04',
                    'name' => 'Fasilitas Implementasi Reformasi Birokrasi'
                ]
            ],
            'PR' => [
                [
                    'code' => '01',
                    'name' => 'Perencanaan Strategis dan Program'
                ],[
                    'code' => '02',
                    'name' => 'Pokok-pokok Kebijakan dan Strategi Pembangungan'
                ],[
                    'code' => '03',
                    'name' => 'Rencana Kerja Tahunan'
                ],[
                    'code' => '04',
                    'name' => 'Penyusunan Anggaran Pendapatan Belanja Negara (APBN)'
                ],[
                    'code' => '05',
                    'name' => 'Pelaporan dan Evaluasi'
                ]
            ],
            'PS' => [
                [
                    'code' => '01',
                    'name' => 'Audit'
                ],[
                    'code' => '02',
                    'name' => 'Reviu'
                ],[
                    'code' => '03',
                    'name' => 'Evaluasi'
                ],[
                    'code' => '04',
                    'name' => 'Pengaduan Masyarakat'
                ],[
                    'code' => '05',
                    'name' => 'Laporan Hasil Pengawasan'
                ],[
                    'code' => '06',
                    'name' => 'Tuntutan Perbendaharaan dan Tuntutan Ganti Rugi (TP-TGR)'
                ],[
                    'code' => '07',
                    'name' => 'Pemnantauan Tindak Lanjut Laporan Pengawasan'
                ],[
                    'code' => '08',
                    'name' => 'Program Pencegahan Korupsi'
                ],[
                    'code' => '09',
                    'name' => 'Kegiatan Pengawasan Lainnya'
                ]
            ],
            'UM' => [
                [
                    'code' => '01',
                    'name' => 'Kesekretariatan Pimpinan'
                ],[
                    'code' => '02',
                    'name' => 'Keprotokolan'
                ],[
                    'code' => '03',
                    'name' => 'Pengelolaan Gaji Apatur Sipil Negara (ASN) dan Calon Aparatur Sipil Negara (CASN)'
                ],[
                    'code' => '04',
                    'name' => 'Pengelolaan Tenaga Kontrak dengan Perjanjian (TKDP)'
                ]
            ],
            'FK' => [
                [
                    'code' => '01',
                    'name' => 'Sertifikasi dan Pengawasan Sarana Produksi'
                ],[
                    'code' => '02',
                    'name' => 'Sertifikasi dan Pengawasan Sarana Distribusi'
                ],[
                    'code' => '03',
                    'name' => 'Pengawasan Produk',
                ],[
                    'code' => '04',
                    'name' => 'Pembakuan dan Pengujian'
                ],[
                    'code' => '05',
                    'name' => 'Pengawasan, Pengamatan, Penelitian atau Pemeriksaan (Wasmatlistrik) dan penanganan pengaduan Masyarakat'
                ]
            ],
            'HJ' => [
                [
                    'code' => '01',
                    'name' => 'Pelayanan Kesehatan Haji'
                ],[
                    'code' => '02',
                    'name' => 'Surveilans Kesehatan Haji'
                ],[
                    'code' => '03',
                    'name' => 'Strategi Pengembangan Kesehatan Haji'
                ],[
                    'code' => '04',
                    'name' => 'Pengendalian Risiko dan Promosi Kesehatan Haji'
                ],[
                    'code' => '05',
                    'name' => 'Sistem Informasi dan Publikasi'
                ],
            ],
            'JP' => [
                [
                    'code' => '01',
                    'name' => 'Pembiayaan'
                ],[
                    'code' => '02',
                    'name' => 'Jaminan Kesehatan'
                ],[
                    'code' => '03',
                    'name' => 'Evaluasi Ekonomi Pembiayaan Kesehatan'
                ]
            ],
            'PL' => [
                [
                    'code' => '01',
                    'name' => 'Kebutuhan pelatihan Bidang Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Pengembangan Pelatihan Bidang Kesehatan'
                ],[
                    'code' => '03',
                    'name' => 'Penjaminan Mutu Pelatihan Bidang Kesehatan'
                ],[
                    'code' => '04',
                    'name' => 'Peningkatan Kompetensi'
                ]
            ],
            'PT' => [
                [
                    'code' => '01',
                    'name' => 'Pengembangan Karier Tenaga Kesehatan ASN'
                ],[
                    'code' => '02',
                    'name' => 'Pengembangan Karier Tenaga Kesehatan Non ASN'
                ],[
                    'code' => '03',
                    'name' => 'Pengawasan tenaga Kesehatan'
                ],[
                    'code' => '04',
                    'name' => 'Kesejahteraan dan Perlindungan tenaga Kesehatan'
                ]
            ],
            'TL' => [
                [
                    'code' => '01',
                    'name' => 'Teknologi Pengendalian Penyakit'
                ],[
                    'code' => '02',
                    'name' => 'Teknologi Laboratorium'
                ]
            ],
            'YK' => [
                [
                    'code' => '01',
                    'name' => 'Prasarana dan Sarana Fasilitas Pelayanan Kesehatan Primer'
                ],[
                    'code' => '02',
                    'name' => 'Prasarana dan Sarana Fasilitas Pelayanan Kesehatan Rujukan'
                ],[
                    'code' => '03',
                    'name' => 'Prasarana dan Sarana Fasilitas Pelayanan Kesehatan Lainnya'
                ],[
                    'code' => '04',
                    'name' => 'Standar Alat Kesehatan di Fasilitas Pelayanan Kesehatan'
                ],[
                    'code' => '05',
                    'name' => 'Pengujian dan Kalibrasi'
                ]
            ],
            'YM' => [
                [
                    'code' => '01',
                    'name' => 'Mutu Pelayanan Kesehatan',
                ],[
                    'code' => '02',
                    'name' => 'Akreditasi Pelayanan kesehatan'
                ]
            ]
        ];

        foreach($subClassificationCodes as $classificationCode => $subClassificationCodevalues){
            $classificationCodeId = ClassificationCode::whereCode($classificationCode)->first()->id;
            foreach($subClassificationCodevalues as $subClassificationCodevalue){
                SubClassificationCode::create([
                    'classification_code_id' => $classificationCodeId,
                    'code' => $subClassificationCodevalue['code'],
                    'name' => $subClassificationCodevalue['name'],
                ]);
            }
        }
    }
}
