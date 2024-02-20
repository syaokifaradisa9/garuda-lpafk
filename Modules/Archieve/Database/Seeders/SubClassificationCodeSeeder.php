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
            'AR' => [
                [
                    'code' => '01',
                    'name' => 'Instrumen Pengelolaan Arsip Dinamis'
                ],[
                    'code' => '02',
                    'name' => 'Penciptaan Arsip'
                ],[
                    'code' => '03',
                    'name' => 'Penggunaandan pemeliharaan Arsip'
                ],[
                    'code' => '04',
                    'name' => 'Penyusutan'
                ],[
                    'code' => '05',
                    'name' => 'Sumber Daya Kearsipan',
                ]
            ],
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
            'KH' => [
                [
                    'code' => '01',
                    'name' => 'Kesejahteraan dan Fasilitas Mahasiswa'
                ],[
                    'code' => '02',
                    'name' => 'Organisasi Mahasiswa'
                ],[
                    'code' => '03',
                    'name' => 'Kegiatan Mahasiswa'
                ],[
                    'code' => '04',
                    'name' => 'Status Mahasiswa'
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
            'PP' => [
                [
                    'code' => '01',
                    'name' => 'Penerimaan Mahasiswa Baru'
                ],[
                    'code' => '02',
                    'name' => 'Registrasi Mahasiswa'
                ],[
                    'code' => '03',
                    'name' => 'Perkuliahan'
                ],[
                    'code' => '04',
                    'name' => 'Kurikulum'
                ],[
                    'code' => '05',
                    'name' => 'Program Studi'
                ],[
                    'code' => '06',
                    'name' => 'Dosen'
                ],[
                    'code' => '07',
                    'name' => 'Penunjang Akademik'
                ],[
                    'code' => '08',
                    'name' => 'Evaluasi Mahasiswa'
                ],[
                    'code' => '09',
                    'name' => 'Yudisium'
                ],[
                    'code' => '10',
                    'name' => 'Alumni'
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
                    'name' => 'Pemantauan Tindak Lanjut Laporan Pengawasan'
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
            'AD' => [
                [
                    'code' => '01',
                    'name' => 'Analisis Lingkungan Strategis'
                ],[
                    'code' => '02',
                    'name' => 'Pelaksanaan Program'
                ],[
                    'code' => '03',
                    'name' => 'Pemantauan, Evaluasi dan pelaporan'
                ]
            ],
            'BP' => [
                [
                    'code' => '01',
                    'name' => 'Penyusunan Kebijakan Teknis Kebijakan Pembangunan kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Pelaksanaan Analisis dan Pemberian Rekomendasi kebijakan Kesehatan'
                ],[
                    'code' => '03',
                    'name' => 'Pelaksanaan Diseminasi dan Advokasi Rekomendasi Kebijakan'
                ],[
                    'code' => '04',
                    'name' => 'Pelaksanaan Integrasi dan Sinergi Kebijakan Kesehatan'
                ],[
                    'code' => '05',
                    'name' => 'Pemantauan, Evaluasi dan pelaporan Kebijakan Kesehatan'
                ]
            ],
            'DP' => [
                [
                    'code' => '01',
                    'name' => 'Fasilitas Produksi dan Peningkatan Kualifikasi tenaga Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Koordinasi Penyelenggaraan Pendidikan TinggiBidang Kesehatan dengan Kebutuhan Pelayanan Kesehatan dan Industri dan Dunia Kerja (IDUKA)'
                ],[
                    'code' => '03',
                    'name' => 'Penyiapan Cadangan tenaga Kesehatan dalam Situasi Khusus'
                ],[
                    'code' => '04',
                    'name' => 'Fasilitasi Pembinaan Teknis Kepada Unit Pelaksana Teknis Milik Kementrian Kesehatan Terkait Bidang Penyediaan Tenaga Kesehatan'
                ],[
                    'code' => '05',
                    'name' => 'Fasilitas Penjaminan Mutu Lulusan Pendidikan Tinggi Bidang Kesehatan'
                ],[
                    'code' => '06',
                    'name' => 'fasilitas Pengelolaan Jabatan Fungsional Bidang Pendidikan Tinggi Tenaga Kesehatan'
                ]
            ],
            'FH' => [
                [
                    'code' => '01',
                    'name' => 'bahan Baku dan Sediaan Fitofarmaka dan Produk Biologi Dalam Negeri'
                ],[
                    'code' => '02',
                    'name' => 'Bahan Baku dan Sediaan Vaksin Dalam Negeri'
                ],[
                    'code' => '03',
                    'name' => 'Alat Kesehatan Diagnostik In-Vitro Dalam Negeri'
                ],[
                    'code' => '04',
                    'name' => 'Bahan Baku Obat Kimia dan Obat Kimia Dalam Negeri'
                ],[
                    'code' => '05',
                    'name' => 'Tingkat Komponen Dalam Negeri (TKDN) Alat Kesehatan dan Penggunaan Alat Kesehatan Dalam Negeri'
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
            'FR' => [
                [
                    'code' => '01',
                    'name' => 'Penyusunan Standardisasi'
                ],[
                    'code' => '02',
                    'name' => 'Klarifikasi'
                ],[
                    'code' => '03',
                    'name' => 'Perizinan'
                ]
            ],
            'FY' => [
                [
                    'code' => '01',
                    'name' => 'Seleksi Obat'
                ],[
                    'code' => '02',
                    'name' => 'Perencanaan Kebutuhan Obat dan Digital Inventory'
                ],[
                    'code' => '03',
                    'name' => 'Pengelolaan Instalasi Farmasi Pemerintah'
                ],[
                    'code' => '04',
                    'name' => 'Pengendalian Ketersediaan Vaksin'
                ],[
                    'code' => '05',
                    'name' => 'Pengendalian Ketersediaan Obat'
                ],[
                    'code' => '06',
                    'name' => 'Farmasi Manajemen dan Farmasi Klinis'
                ],[
                    'code' => '07',
                    'name' => 'Evaluasi Penggunaan Obat Rasional'
                ]
            ],
            'GM' => [
                [
                    'code' => '01',
                    'name' => 'Peningkatan Mutu dan Kecukupan Gizi'
                ],[
                    'code' => '02',
                    'name' => 'kewaspadaan Gizi'
                ],[
                    'code' => '03',
                    'name' => 'Penanggulangan Masalah Gizi'
                ],[
                    'code' => '04',
                    'name' => 'Pengelolaan Konsumsi Gizi '
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
            'IM' => [
                [
                    'code' => '01',
                    'name' => 'Imunisasi Dasar dan Bayi di Bawah 2 (Dua) Tahun'
                ],[
                    'code' => '02',
                    'name' => 'Imunisasi Tambahan dan Khusus'
                ],[
                    'code' => '03',
                    'name' => 'Imunisasi Wanita Usia Subur (WUS), Surveilans PD3I dan kejadian Ikutan Pasca Imunisasi'
                ],[
                    'code' => '04',
                    'name' => 'Imunisasi Usia Sekolah dan Sumber Daya Imunisasi'
                ]
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
            'KG' => [
                [
                    'code' => '01',
                    'name' => 'Kesehatan Maternal dan Neonatal'
                ],[
                    'code' => '02',
                    'name' => 'Kesehatan Balita dan Anak Pra Sekolah'
                ],[
                    'code' => '03',
                    'name' => 'Kesehatan Anak Usia Sekolah dan Remaja'
                ],[
                    'code' => '04',
                    'name' => 'Kesehatan Reproduksi'
                ],[
                    'code' => '05',
                    'name' => 'Kesehatan Lanjut Usia (Lansia)'
                ],[
                    'code' => '06',
                    'name' => 'Kesehatan kelompok Rentan'
                ]
            ],
            'KI' => [
                [
                    'code' => '01',
                    'name' => 'Registrasi Dokter'
                ],[
                    'code' => '02',
                    'name' => 'Standar Pendidikan profesi Dokter'
                ],[
                    'code' => '03',
                    'name' => 'Registrasi Kedokteran Gigi'
                ],[
                    'code' => '04',
                    'name' => 'Standar Pendidikan Profesi Dokter Gigi'
                ],[
                    'code' => '05',
                    'name' => 'Pembinaan Praktik'
                ],[
                    'code' => '06',
                    'name' => 'Pelayanan Hukum'
                ]
            ],
            'KJ' => [
                [
                    'code' => '01',
                    'name' => 'Promosi Kesehatan Jiwa dan Kemitraan'
                ],[
                    'code' => '02',
                    'name' => 'Deteksi Dini dan Pencegahan Masalah Kesehatan Jiwa'
                ],[
                    'code' => '03',
                    'name' => 'Tata Kelola Gangguan Jiwa'
                ],[
                    'code' => '04',
                    'name' => 'Masalah Penyalahgunaan Narkotika, Psikotropika dan Zar Adiktif Lainnya (NAPZA)'
                ],[
                    'code' => '05',
                    'name' => 'Surveilans Kesehatan Jiwa dan NAPZA'
                ],[
                    'code' => '06',
                    'name' => 'Hari Besar Kesehatan Jiwa'
                ],[
                    'code' => '07',
                    'name' => 'Pelatihan tenaga Kesehatan dan Kader Terkait Kesehatan Jiwa'
                ]
            ],
            'KK' => [
                [
                    'code' => '01',
                    'name' => 'NSPK Penaggulangan Krisis Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Bimbingan, Informasi, Evaluasi dan Koordinasi'
                ]
            ],
            'KL' => [
                [
                    'code' => '01',
                    'name' => 'Penyehatan Air, Udara, tanah, Sanitasi Dasar dan Kawasan Lingkungan'
                ],[
                    'code' => '02',
                    'name' => 'Penyehatan Pangan'
                ],[
                    'code' => '03',
                    'name' => 'Pengamanan Limbah dan Radiasi'
                ],[
                    'code' => '04',
                    'name' => 'Adaptasi Perubahan dan Kebencanaan'
                ]
            ],
            'KO' => [
                [
                    'code' => '01',
                    'name' => 'Okupasi dan Surveilans Kesehatan Kerja'
                ],[
                    'code' => '02',
                    'name' => 'Kesehatan Kerja'
                ],[
                    'code' => '03',
                    'name' => 'Kesehatan Olahraga'
                ]
            ],
            'KT' => [
                [
                    'code' => '01',
                    'name' => 'Fasilitas Registrasi'
                ],[
                    'code' => '02',
                    'name' => 'Fasilitas Standisasi'
                ],[
                    'code' => '03',
                    'name' => 'Fasilitas pembinaan Keprofesian'
                ],[
                    'code' => '04',
                    'name' => 'Disiplin Praktik Tenaga Kesehatan'
                ],[
                    'code' => '05',
                    'name' => 'Fasilitasi Penyiapan Bahan Pertimbangan Institusi Pendidikan Tenaga Kesehatan'
                ]
            ],
            'PG' => [
                [
                    'code' => '01',
                    'name' => 'Pendayagunaan Tenaga Kesehatan termasuk Dokter/Dokter Gigi, Dokter/Dokter Gigi Spesialis/Sub Spesialis dan Tenaga Pendukung/Penunjang Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Pendayagunaan Tenaga kesehatan dan tenaga Pendukung/Penunjang kesehatan Warga Indonesia Lulusan Luar negeri (WNI LLN) dan Purna Penempatan Luar Neger'
                ],[
                    'code' => '03',
                    'name' => 'Pendayagunaan Tenaga kesehatan dan tenaga Pendukung/Penunjang Kesehatan Indonesia ke Luar negeri dan Warga Negara Asing (WNA) di Indonesia'
                ],[
                    'code' => '04',
                    'name' => 'Pendayagunaan Dokter/Dokter Gigi, Dokter/Dokter Gigi Spesialis/Sub Spesialis WNI LLN dan WNA yang Melaksanakan Adaptasi'
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
            'PK' => [
                [
                    'code' => '01',
                    'name' => 'Strategi Komunikasi Risiko, Informasi dan Edukasi Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Penyebarluasan Informasi Kesehatan'
                ],[
                    'code' => '03',
                    'name' => 'Advokasi Kesehatan'
                ],[
                    'code' => '04',
                    'name' => 'Kemitraan Kesehatan'
                ],[
                    'code' => '05',
                    'name' => 'Pemberdayaan dan Penggerak Promosi Kesehatan'
                ],[
                    'code' => '06',
                    'name' => 'Perorganisasian Masyarakat'
                ],[
                    'code' => '07',
                    'name' => 'Peningkatan Peran Serta Masyarakat'
                ],[
                    'code' => '08',
                    'name' => 'Data dan Analisis Pelaku'
                ],[
                    'code' => '09',
                    'name' => 'Perilaku Bumil, Anak dan Remaja'
                ],[
                    'code' => '10',
                    'name' => 'Perilaku Usia Produktif dan Lansia'
                ]
            ],
            'PM' => [
                [
                    'code' => '01',
                    'name' => 'TBC'
                ],[
                    'code' => '02',
                    'name' => 'Pengendalian AIDS dan Penyakit Infeksi Menular Seksual'
                ],[
                    'code' => '03',
                    'name' => 'Pengendalian Penyakit Menular'
                ]
            ],
            'PN' => [
                [
                    'code' => '01',
                    'name' => 'Proyeksi dan Pemetaan Produksi Tenaga Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Perencanaan Kebutuhan dan Pemenuhan Tenaga Kesehatan dan Tenaga Penunjang/Pendukung'
                ],[
                    'code' => '03',
                    'name' => 'Strategi Nasional Pemenuhan dan pengembangan Tenaga Kesehatan'
                ],[
                    'code' => '04',
                    'name' => 'Perencanaan Pengembangan Tenaga Kesehatan'
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
            'PV' => [
                [
                    'code' => '01',
                    'name' => 'Pengendalian Manusia'
                ],[
                    'code' => '02',
                    'name' => 'Pengendalian Arbovirosis'
                ],[
                    'code' => '03',
                    'name' => 'Pengendalian Zoonosis'
                ],[
                    'code' => '04',
                    'name' => 'Pengendalian Filariasis dan Kecacingan'
                ],[
                    'code' => '05',
                    'name' => 'Pengendalian Vector dan Binatang Pembawa Penyakit'
                ]
            ],
            'RS' => [
                [
                    'code' => '01',
                    'name' => 'Pelayanan Kesehatan di RS'
                ],[
                    'code' => '02',
                    'name' => 'Pelayanan Kesehatan'
                ]
            ],
            'SR' => [
                [
                    'code' => '01',
                    'name' => 'Surveilans'
                ],[
                    'code' => '02',
                    'name' => 'Karantina Kesehatan dan Kesehatan Pelabuhan'
                ],[
                    'code' => '03',
                    'name' => 'Penyakit Infeksi Emerging'
                ],[
                    'code' => '04',
                    'name' => 'Sertifikat dan Surat Keterangan Dikeluarkan Oleh UPT'
                ],[
                    'code' => '05',
                    'name' => 'Laboratorium Surveilans Pencegahan dan Pengendalian Penyakit'
                ],[
                    'code' => '06',
                    'name' => 'Surveilans Terintegrasi'
                ]
            ],
            'SS' => [
                [
                    'code' => '01',
                    'name' => 'Penyusunan Kebijakan Teknis Bidang Analisis, Harmonisasi dan Sinergi Strategi dan Sistem Kesehatan'
                ],[
                    'code' => '02',
                    'name' => 'Pelaksanaan Analisis, Harmonisasi dan Sinergi Strategi dan Sistem Kesehatan'
                ],[
                    'code' => '03',
                    'name' => 'Pemantauan, Evaluasi dan Pelaporan'
                ]
            ],
            'TK' => [
                [
                    'code' => '01',
                    'name' => 'Tata Kelola Sistem Rujukan'
                ],[
                    'code' => '02',
                    'name' => 'Pengelolaan Wahana Pendidikan dan RS Pendidikan'
                ],[
                    'code' => '03',
                    'name' => 'Pengelolaan Kerja Sama Pelayanan Kesehatan'
                ],[
                    'code' => '04',
                    'name' => 'Pengelolaan BLU'
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
            'TM' => [
                [
                    'code' => '01',
                    'name' => 'Pengendalian Penyakit Jantung dan Pembuluh Darah'
                ],[
                    'code' => '02',
                    'name' => 'Pengendalian Diabetes Melitus dan Gangguan Metabolik'
                ],[
                    'code' => '03',
                    'name' => 'Pengendalian penyakit Kanker dan Kelainan Darah'
                ],[
                    'code' => '04',
                    'name' => 'Pengendalian Penyakit Paru Kronik dan gangguan Imunologi'
                ],[
                    'code' => '05',
                    'name' => 'Gangguan Indera dan Fungsional'
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
            ],
            'YP' => [
                [
                    'code' => '01',
                    'name' => 'pelayanan Kesehatan Masyarakat'
                ],[
                    'code' => '02',
                    'name' => 'Pelayanan Klinik'
                ],[
                    'code' => '03',
                    'name' => 'Perizinan dan Registrasi Klinik'
                ]
            ],
            'YR' => [
                [
                    'code' => '01',
                    'name' => 'Standardisasi Klinis Pelayanan Kesehatan Rujukan'
                ],[
                    'code' => '02',
                    'name' => 'Perizinan dan Pengembangan Serta Pengawasan Pelayanan Kesehatan Rujukan'
                ],[
                    'code' => '03',
                    'name' => 'Transformasi Pelayanan Kesehatan Rujukan'
                ]
            ],
            'YT' => [
                [
                    'code' => '01',
                    'name' => 'Pelayanan Kesehatan Tradisional Empiris'
                ],[
                    'code' => '02',
                    'name' => 'Pelayanan Kesehatan Tradisional Komplementer'
                ],[
                    'code' => '03',
                    'name' => 'Pelayanan Kesehatan Tradisional Integrasi'
                ]
            ]
        ];

        foreach($subClassificationCodes as $classificationCode => $subClassificationCodevalues){
            $classificationCodeId = ClassificationCode::whereMainCode($classificationCode)->first()->id;
            foreach($subClassificationCodevalues as $subClassificationCodevalue){
                SubClassificationCode::create([
                    'classification_code_id' => $classificationCodeId,
                    'sub_code' => $subClassificationCodevalue['code'],
                    'sub_name' => $subClassificationCodevalue['name'],
                ]);
            }
        }
    }
}
