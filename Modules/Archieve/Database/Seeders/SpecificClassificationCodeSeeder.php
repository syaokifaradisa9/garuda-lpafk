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
            ],
            'IR' => [
                '01' => [
                    'pembuatan/Pengembangan/pemeliharaan Sistem Informasi atau Aplikasi',
                    'Standardisasi Sistem Informasi',
                    'Rancangan Kebijakan Teknis dan Regulasi Layanan Data dan Produk Informasi'
                ],
                '02' => [
                    'Pengelolaan Aplikasi dan Database',
                    'Pengelolaan Infrastruktur Teknologi Informasi',
                    'Keamanan Informasi',
                ],
                '03' => [
                    'Analisis Data dan Informasi',
                    'Tata Kelola Kesehatan dan Tata Kelola Perlindungan Data Pribadi'
                ]
            ],
            'KH' => [
                '01' => [
                    'Fasilitas Mahasiswa',
                    'Beasiswa'
                ],
                '02' => [
                    'Kegiatan Organisasi',
                    'Pelaksanaan Kegiatan'
                ],
                '03' => [
                    'Kegiatan Akademik',
                    'Kegiatan Non-Akademik',
                    'Proposal Mahasiswa'
                ],
                '04' => [
                    'Status Mahasiswa'
                ]
            ],
            'KM' => [
                '01' => [
                    'Liputan dan Dokumentasi',
                    'Wawancara',
                    'Penyajian Berita dan Konten Media Sosial',
                    'Pertemuan Media Massa',
                    'Kompetisi Komunikasi',
                    'Press Tour'
                ],
                '02' => [
                    'Analisis Opini Publik',
                    'Strategi Komunikasi'
                ],
                '03' => [
                    'Pembuatan Film atau Video',
                    'Advertorial Cetak dan Online'
                ],
                '04' => [
                    'Hubungan Antar Lembaga Pemerintah',
                    'Hubungan Antar-Lembaga Non-Pemerintah',
                    'Forum Kehumasan'
                ],
                '05' => [
                    'Layanan Informasi',
                    'Publikasi'
                ],
                '06' => [
                    'Penerbitan',
                    'Perpustakaan'
                ]
            ],
            'KN' => [
                '01' => [
                    'Perencanaan Kebutuhan BMN',
                    'Penggunaan BMN',
                    'Pemanfaatan BMN',
                    'Asuransi BMN',
                    'Penatausahaan BMN',
                    'Inventarisasi BMN',
                    'Pelaporan BMN',
                    'Penghapusan BMN',
                    'Pengelolaan Rumah Negara'
                ]
            ],
            'KP' => [
                '01' => [
                    'Penyusunan Formasi dan Kebutuhan Pegawai',
                    'Pengangkatan Pegawai Negeri Sipil (PNS)',
                    'Identitas Pegawai Negeri Sipil',
                    'Pengangkatan Pegawai dengan Penugasan Khusus',
                    'Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)',
                    'Pegawai Perbantuan (Magang, BKO, PKWT)',
                ],
                '02' => [
                    'Kenaikan Pangkat',
                    'Kenaikan Gaji Berkala (KGB)',
                    'Pemindahan, Pemberhentian dan Pensiun',
                    'Penilaian Sasaran Kinerja Pegawai (SKP)',
                    'Dukungan Informasi Kepegawaian'
                ],
                '03' => [
                    'Pengembangan Karier',
                    'Administrasi Jabatan Fungsional Tertentu',
                    'Perancangan Pengembangan Jabatan Pimpinan Tinggi dan Jabatan Administrasi',
                    'Penugasan/Surat Perintah Pegawai',
                    'Manajemen Talenta'
                ],
                '04' => [
                    'Penegakan Disiplin Pegawai',
                    'Kesejahteraan Pegawai',
                    'Penghargaan bagi PNS',
                    'Penghargaan Lainnya',
                    'Pemeriksaan Kesehatan',
                    'Tata Usaha Kepegawaian',
                    'Organisasi Non-Kedinasan'
                ]
            ],
            'KR' => [
                '01' => [
                    'Pelayanan Umum',
                    'Pelayanan Khusus',
                    'Administrasi Pakaian Dinas Pegawai',
                    'Gerakan Kantor Berhias (GKB)'
                ],
                '02' => [
                    'Pemeliharaan dan Perbaikan Gedung',
                    'Pemeliharaan dan Perbaikan rumah dinas/wisma/gudang',
                    'Pertamanan/landscaping/penghijauan',
                    'Peralatan kantor, mesin dan pengolah data',
                    'Pelaksanaan Kesehatan dan Keselamatan Kerja'
                ],
                '03' => [
                   'Pengelolaan Jaringan Telekomunikasi',
                   'Pengelolaan Jaringan Listrik',
                   'Pengelolaan Jaringan Air',
                   'Pengelolaan TV Kabel',
                   'Pelaksanaan Penghematan Energi' 
                ],
                '04' => [
                    'Pengurusan surat-surat kendaraan dinas',
                    'Pengelolaan Kendaraan Dinas',
                    'Penggunaan Kendaraan Dinas'
                ],
                '05' => [
                    'Pengamanan',
                    'Pengelolaan Ketertiban dan Keamanan',
                    'Administrasi Pengelolaan Parkir'
                ]
            ],
            'KS' => [
                '01' => [
                    'Telaah Permohonan',
                    'Dokumen Kerja Sama Intenasional',
                    'Kertas Posisi/Surat Pendelegasian',
                    'Registrasi Pinjaman Hibah Luar Negeri (PHLN)'
                ],
                '02' => [
                    'Kerja sama Kesehatan Bilateral',
                    'Kerja Sama Kesehatan Regional',
                    'Kerja Sama Kesehatan Multilateral'
                ],
                '03' => [
                    'Administrasi Kerja Sama Antar-Lembaga Pemerintah, Lembaga Non-Pemerintah dan International Non Government Organization (INGO)',
                    'Administrasi Tenaga Kerja Asing Kesehatan',
                    'Administrasi Perjalanan Dinas Luar Negeri'
                ]
            ],
            'KU' => [
                '01' => [
                    'Pendapatan Negara Bukan Pajak (PNBP)',
                    'Hibah Langsung Luar Negeri Barang/Jasa',
                    'Penghapusan Piutang'
                ],
                '02' => [
                    'Belanja Pegawai',
                    'Belanja Barang',
                    'Belanja Modal',
                    'Pengeluaran Anggaran',
                ],
                '03' => [
                    'Perbendaharaan',
                    'Kartu Pengawasan Pembayaran Penghasilan Pegawai (KP4)',
                    'Pajak',
                    'Penerimaan Non Pajak',
                    'Pengembalian Belanja',
                    'Berita Acara Pemeriksaan Kas',
                    'Verifikasi Anggaran',
                    'Pembukuan Anggaran'
                ],
                '04' => [
                    'Akuntansi dan Pelaporan Keuangan pada Satuan Kerja (Unit Akuntansi Kuasa Pengguna Anggaran/Barang)',
                    'Akuntansi dan Pelaporan Keuangan pada Koordinator Wilayah (pada UPT yang menjadi Koordinator Wilayah)',
                    'Akuntansi dan Pelaporan Keuangan pada Unit Eselon I (Biro Keuangan dan BMN/Sekretariat Inspektorat Jenderal/Sekretariat Direktorat Jenderal/Sekretariat Badan)',
                    'Akuntansi dan Pelaporan Keuangan pada Kementerian Kesehatan (Biro Keuangan dan BMN)',
                    'Akuntansi dan Pelaporan Keuangan pada Satuan Kerja BLU',
                    'Akuntansi dan Pelaporan Keuangan pada Satuan Kerja Non-BLU',
                    'Penyiapan Bahan Analisis Akuntansi Kementerian',
                    'Pengendalian Intern atas Pelaporan Keuangan pada Satuan Kerja',
                    'Pengendalian Intern Atas Pelaporan Keuangan Pada Unit Eselon I',
                    'Pengendalian Intern atas Pelaporan Keuangan pada Kementerian Kesehatan'
                ],
            ],
            'MR' => [
                '01' => [
                    'Risk Register',
                    'Laporan Manajemen Risiko'
                ]
            ],
            'OT' => [
                '01' => [
                    'Penataan Organisasi',
                    'Evaluasi Organisasi',
                    'Koordinasi Lintas Program dan Lintas Sektor',
                    'Budaya Kerja Organisasi'
                ],
                '02' => [
                    'Proses Bisnis',
                    'Standar Operasional Prosedur',
                    'Pedoman Ketatalaksanaan'
                ],
                '03' => [
                    'Informasi Jabatan',
                    'Analisis Beban Kerja',
                    'Evaluasi Jabatan'
                ],
                '04' => [
                    'Fasilitasi Implementasi Reformasi Birokrasi dan Transformasi Internal',
                    'Evaluasi Implementasi Reformasi Birokrasi'
                ]
            ],
            'PP' => [
                '01' => [
                    'Penerimaan Mahasiswa Baru',
                    'Orientasi Mahasiswa Baru',
                    'Mahasiswa  Asing',
                ],
                '02' => [
                    'Registrasi administras',
                    'Registrasi Akademik'
                ],
                '03' => [
                    'Administrasi Perkuliahan',
                    'Silabus Mata Kuliah',
                    'Rencana  Pelaksanaan Pembelajaran',
                    'Proses Belajar Mengajar',
                    'Daftar Kehadiran '
                ],
                '04' => [
                    'Administrasi Kurikulum',
                    'Pedoman Kurikulum',
                    'Mata Kuliah'
                ],
                '05' => [
                    'Administrasi Program Studi',
                    'Penolakan Program Studi',
                    'Evaluasi Program Studi',
                ],
                '06' => [
                    'Pengajaran'
                ],
                '07' => [
                   'Administrasi Kegiatan',
                   'Peraturan' 
                ],
                '08' => [
                    'Pelaksanaan Ujian Semester',
                    'Tugas Akhir',
                    'Pelaksanaan Uji Kompetensi'
                ],
                '09' => [
                    'Kelulusan',
                    'Surat Kelulusan',
                    'Buku Induk'
                ],
                '10' => [
                    'Himpunan Organisasi',
                    'Perkembangan Alumni'
                ]
            ],
            'PR' => [
                '01' => [
                    'Perencanaan Strategis',
                    'Nota Keuangan dan Lampiran Pidato Presiden',
                    'Pengelolaan Sistem Akuntabiltas Kinerja Instansi Pemerintah (SAKIP)',
                    'Standar Pelayanan Minimal Bidang Kesehatan',
                    'Usulan Perencanaan',
                    'Usulan Program Transfer Daerah'
                ],
                '02' => [
                    'Rencana Pembangunan Jangka Panjang (RPJP)',
                    'Rencana Pembangunan Jangka Menengah (RPJM)'
                ],
                '03' => [
                    'Rencana Kerja Tahunan Kementerian Kesehatan',
                    'Penetapan Kinerja',
                ],
                '04' => [
                    'Penyusunan Anggaran Kementerian Kesehatan',
                    'Revisi Dokumen Anggaran Kementerian Kesehatan',
                    'Penyusunan Anggaran Transfer Daerah',
                    'Revisi Dokumen Anggaran Transfer Daerah'
                ],
                '05' => [
                    'Laporan Berkala',
                    'Laporan Khusus',
                    'Progress Report',
                    'Laporan Akuntabilitas Kinerja Instansi Pemerintah (LAKIP)',
                    'Laporan Program Transfer Daerah'
                ]
            ],
            'PS' => [
                '01' => [
                    'Audit Kinerja',
                    'Audit dengan Tujuan Tertentu (ADTT)',
                    'Probity Audit',
                    'Audit Penugasan Khusus'
                ],
                '02' => [
                    'Reviu Laporan Keuangan',
                    'Reviu RKA-KL',
                    'Reviu Lainnya'
                ],
                '03' => [
                    'Evaluasi SAKIP',
                    'Evaluasi Jaminan Kesehatan Nasional (JKN)',
                    'Evaluasi Reformasi dan Birokrasi (RB)',
                    'Evaluasi Sistem Pengendalian Intern Pemerintah (SPIP) Teritegrasi',
                    'Evaluasi Efektivitas Kepatuhan SKI/SPI',
                    'Evaluasi Program Lainnya'
                ],
                '04' => [
                    'Penanganan Pengaduan Masyarakat',
                    'Daftar Hitam',
                    'Klarifikasi'
                ],
                '05' => [
                    'Ikhtisar Hasil Pengawasan Semester (IHPS)',
                ],
                '06' => [
                    'Laporan TP-TGR'
                ],
                '07' => [
                    'Tindak Lanjut Laporan Hasil Pengawasan'
                ],
                '08' => [
                    'Pengendalian Gratifikasi/Sponshorship',
                    'Pembangunan Zona Integritas (ZI)',
                    'Laporan Harta Kekayaan Penyelenggara Negara (LHKPN)',
                    'Laporan Harta Kekayaan Aparat Sipil Negara (LHKASN)',
                    'Program Pencegahan Korupsi Lainnya'
                ],
                '09' => [
                    'Konsultasi Pengawasan',
                    'Rapat Kerja/Koordinasi Pengawasan',
                    'Kebijakan Pengawasan',
                    'Perencanaan Pengawasan',
                    'Verifikasi Pengawasan'
                ]
            ],
            'UM' => [
                '01' => [
                    'Penyelenggaraan Rapat Pimpinan',
                    'Pelayanan Pencetakan dan Penggandaan'
                ],
                '02' => [
                    'Lambang, Bendera dan Lagu Kebangsaan',
                    'Pelaksanaan Upacara',
                    'Audiensi dan Jamuan',
                    'Agenda Pimpinan',
                    'Ucapan'
                ],
                '03' => [
                    'Pembayaran Gaji ASN dan CASN',
                    'Tunjangan ASN dan CASN',
                    'Pemotongan Pajak ASN dan CASN',
                    'Rekening Gaji ASN dan CASN',
                    'Administrasi Kepesertaan Jaminan Kesehatan',
                    'Penggunaan Aplikasi e-Monev'
                ],
                '04' => [
                    'Administrasi Pengelolaan Pembayaran Insentif TKDP',
                    'Tunjangan Uang Lembur TKDP',
                    'Pemotongan Pajak TKDP',
                    'Rekening Gaji TKDP',
                    'Administrasi Kepesertaan Jaminan Kesehatan dan Ketenagakerjaan TKDP'
                ]
            ],
            'AD' => [
                '01' => [
                    'Analisis Politik Kesehatan',
                    'Analisis Sosial Ekonomi',
                    'Analisis Perilaku',
                    'Analisis Kesehatan Intelegensia'
                ],
                '02' => [
                    'Analisis Politik Kesehatan',
                    'Analisis Sosial Ekonomi',
                    'Analisis Perilaku',
                    'Analisis Kesehatan Intelegensia'
                ],
                '03' => [
                    'Analisis Politik Kesehatan',
                    'Analisis Sosial Ekonomi',
                    'Analisis Perilaku',
                    'Analisis Kesehatan Intelegensia'
                ]
            ],
            'BP' => [
                '01' => [
                    'Kebijakan Upaya Kesehatan',
                    'Kebijakan Sistem Ketahanan Kesehatan dan Sumber Daya Kesehatan',
                    'Kebijakan Pembiayaan dan Desentralisasi Kesehatan',
                    'Kebijakan Kesehatan Global dan Teknologi Kesehatan'
                ],
                '02' => [
                    'Kebijakan Upaya Kesehatan',
                    'Kebijakan Sistem Ketahanan Kesehatan dan Sumber Daya Kesehatan',
                    'Kebijakan Pembiayaan dan Desentralisasi Kesehatan',
                    'Kebijakan Kesehatan Global dan Teknologi Kesehatan '
                ],
                '03' => [
                    'Kebijakan Upaya Kesehatan',
                    'Kebijakan Sistem Ketahanan Kesehatan dan Sumber Daya Kesehatan',
                    'Kebijakan Pembiayaan dan Desentralisasi Kesehatan',
                    'Kebijakan Kesehatan Global dan Teknologi Kesehatan '
                ],
                '04' => [
                    'Kebijakan Upaya Kesehatan',
                    'Kebijakan Sistem Ketahanan Kesehatan dan Sumber Daya Kesehatan',
                    'Kebijakan Pembiayaan dan Desentralisasi Kesehatan',
                    'Kebijakan Kesehatan Global dan Teknologi Kesehatan '
                ],
                '05' => [
                    'Kebijakan Upaya Kesehatan',
                    'Kebijakan Sistem Ketahanan Kesehatan dan Sumber Daya Kesehatan',
                    'Kebijakan Pembiayaan dan Desentralisasi Kesehatan',
                    'Kebijakan Kesehatan Global dan Teknologi Kesehatan '
                ],
            ],
            'DP' => [
                '01' => [
                    'Program Bantuan Biaya Pendidikan Dokter dan Dokter Gigi Spesialis',
                    'Program Bantuan Biaya Pendidikan SDM Kesehatan',
                    'Program Afirmasi Pendidikan Dokter dan Dokter Gigi',
                    'Program Afirmasi Pendidikan Tenaga Kesehatan',
                    'Penyiapan Program Studi Pendidikan Tinggi Kesehatan',
                    'Penerimaan Mahasiswa Baru Politeknik Kesehatan Kementerian Kesehatan',
                    'Program pemenuhan dan pemerataan tenaga dokter melalui pendidikan '
                ],
                '02' => [
                    'Penyelenggaraan Penyelarasan Pendidikan Tinggi Bidang Kesehatan dengan Kebutuhan Pelayanan Kesehatan dan IDUKA',
                    'Penyiapan Tenaga Pendidik dan Kependidikan dalam Penyelarasan Pendidikan dengan Kebutuhan Pelayanan Kesehatan atau IDUKA'
                ],
                '03' => [
                    'Penyiapan Tenaga Kesehatan Cadangan',
                    'Mobilisasi Tenaga Kesehatan Cadangan',
                    'Pembinaan Tenaga Kesehatan Cadangan'
                ],
                '04' => [
                    'Penyelenggaraan Pendidikan',
                    'Pengembangan Pendidikan',
                    'Penelitian dan Pengabdian Masyarakat Tingkat Pusat',
                    'Peningkatan Kapasitas Dosen, Tenaga Kependidikan dan Mahasiswa'
                ],
                '05' => [
                    'Standar Penyelenggaraan Pendidikan Tinggi Tenaga Kesehatan',
                    'Pengendalian Mutu Pendidikan Tinggi Tenaga Kesehatan',
                    'Uji Kompetensi Pendidikan Tinggi Bidang Kesehatan'
                ],
                '06' => [
                    'Pengelolaan Jabatan Fungsional Bidang Pendidikan Tinggi Tenaga Kesehatan'
                ]
            ],
            'FH' => [
                '01' => [
                    'Bahan Baku dan Sediaan Fitofarmaka Dalam Negeri',
                    'Bahan Baku dan Sediaan Produk Biologi Dalam Negeri',
                    'Pemantauan dan Evaluasi Bahan Baku dan Sediaan 
                    Fitofarmaka dan Produk Biologi Dalam Negeri'
                ],
                '02' => [
                    'Bahan Baku Dalam Negeri',
                    'Sediaan Vaksin Dalam Negeri',
                    'Pemantauan dan Evaluasi Bahan Baku dan Sediaan Vaksin Dalam Negeri'
                ],
                '03' => [
                    'Alat Kesehatan',
                    'Alat Kesehatan Diagnostik In-Vitro Dalam Negeri',
                    'Uji Klinik Alat Kesehatan Dalam Negeri',
                    'Pemantauan dan Evaluasi Alat Kesehatan'
                ],
                '04' => [
                    'Sediaan Farmasi',
                    'Bahan Baku Obat Kimia Dalam Negeri',
                    'Obat Kimia Dalam Negeri',
                    'Pemantauan dan Evaluasi Bahan Baku Obat Kimia dan Obat Kimia Dalam Negeri'
                ],
                '05' => [
                    'TKDN Alat Kesehatan Dalam Negeri',
                    'Penggunaan Alat Kesehatan Dalam Negeri',
                    'Pemantauan dan Evaluasi TKDN Alat Kesehatan dan Penggunaan Alat Kesehatan Dalam Negeri'
                ]
            ],
            'FK' => [
                '01' => [
                    'Audit Cara Pembuatan Alat Kesehatan yang Baik (CPAKB)',
                    'Audit Cara Pembuatan Perbekalan Kesehatan Rumah Tangga (PKRT) yang Baik (CPPKRTBC)',
                    'Verifikasi sertifikasi CPAKB',
                    'Verifikasi sertifikasi CPPKRTBC',
                    'Pengawasan Post-Market Sarana Produksi'
                ],
                '02' => [
                    'Audit Cara Distribusi Alat Kesehatan yang Baik (CDAKB)',
                    'Verifikasi sertifikasi CDAKB',
                    'Pengawasan Post-Market Sarana Distribusi'
                ],
                '03' => [
                    'Alat Kesehatan',
                    'PKRT',
                    'Pengawasan Iklan',
                    'Kejadian Tidak Diinginkan (KTD)',
                    'Pengawasan Vigilans'
                ],
                '04' => [
                    'Standar Pengawasan Produk',
                    'Standar Nasional Indonesia (SNI)',
                    'Standar Pengawasan Sarana Produksi',
                    'Standar Pengawasan Sarana Distribusi',
                    'Standar Sistem Manajemen Mutu'
                ],
                '05' => [
                    'Tindak Lanjut Hasil Pengawasan dan Penyidikan',
                    'Penanganan Pengaduan Masyarakat',
                    'Komunikasi Informasi dan Edukasi (KIE) Pengawasan Alat Kesehatan dan PKRT',
                    'Sistem Informasi Penyidikan dan Penanganan Pengaduan Masyarakat'
                ]
            ],
            'FP' => [
                '01' => [
                    'Produksi dan Distribusi Kefarmasian di bidang Obat',
                    'Izin Pedagang Besar Farmasi',
                    'Izin Industri Farmasi'
                ],
                '02' => [
                    'Harga Obat Katalog',
                    'Harga Obat Generik',
                    'Harga Obat Program Khusus',
                    'Pasar Obat',
                    'Pasar Perbekalan Kesehatan',
                    'E-Logistik Obat',
                    'E-Monev Obat'
                ],
                '03' => [
                    'Kebijakan di bidang Farmakoekonomi',
                    'Peningkatan Kapasitas SDM bidang Farmakoekonomi',
                    'Implementasi Analisis Farmakoekonomi di Fasilitas Pelayanan Kesehatan'
                ],
                '04' => [
                    'Produksi dan Distribusi di Bidang Obat Narkotika',
                    'Produksi dan Distribusi di Bidang Obat Psikotropika',
                    'Produksi dan Distribusi di Bidang Obat Prekursor Farmasi',
                    'Perizinan di bidang Obat Narkotika, Psikotropika dan Prekursor Farmasi'
                ],
                '05' => [
                    'Produksi dan Distribusi Industri di bidang Obat Tradisional',
                    'Produksi dan Distribusi Industri di bidang Kosmetika'
                ]
            ],
            'FR' => [
                '01' => [
                    'Standardisasi Alat Kesehatan',
                    'Standardisasi Produk Diagnostik',
                    'Standardisasi Produk PKRT',
                    'Standardisasi Pengembangan Produk Mandiri',
                    'Harmonisasi Regulasi Alat Kesehatan',
                    'Pemasukan Alat Kesehatan melalui Jalur Khusus (Special Access Scheme)'
                ],
                '02' => [
                    'Klarifikasi Izin Edar Alat Kesehatan dan PKRT',
                    'Double Keagenan'
                ],
                '03' => [
                    'Izin Edar Alat Kesehatan dan PKRT',
                    'Surat keterangan Alat Kesehatan dan PKRT',
                    'Rekomendasi Persetujuan Impor',
                    'Persetujuan Iklan Alat Kesehatan dan PKRT',
                    'Persetujuan Pemasukan Alat Kesehatan melalui Jalur Khusus (Special Access Scheme)',
                    'Izin Distribusi Alat Kesehatan'
                ]
            ],
            'FY' => [
                '01' => [
                    'Formularium Nasional',
                    'Formularium Haji',
                    'Daftar Obat Esensial Nasional',
                    'Bimbingan Teknis dan Supervisi Penggunaan Formularium Nasional',
                    'Laporan dan Evaluasi',
                ],
                '02' => [
                    'Perencanaan kebutuhan Obat Perbekalan Kesehatan dan Vaksin',
                    'Kebijakan Perencanaan Kebutuhan Obat dan Digital Inventory',
                    'Bimbingan Teknis dan Supervisi Perencanaan Kebutuhan Obat dan Digital Inventory',
                    'Sistem Informasi Perencanaan Kebutuhan Obat dan Digital Inventory',
                    'Laporan dan Evaluasi'
                ],
                '03' => [
                    'Tata Kelola Obat Buffer Stock Provinsi dan Nasional',
                    'Tata Kelola Obat Program dan Pelayanan Kesehatan Dasar',
                    'Kebijakan Pengelolaan Instalasi Farmasi Pemerintah',
                    'Bimbingan Teknis dan Supervisi Pengelolaan Instalasi Farmasi Pemerintah'
                ],
                '04' => [
                    'Vaksin',
                    'Auto Disable Syringe (ADS) dan Safety Box',
                    'Reagen',
                    'Kebijakan Pengendalian Ketersediaan Vaksin',
                    'Bimbingan Teknis dan Supervisi Pengendalian Ketersediaan Vaksin',
                    'Laporan dan Evaluasi'
                ],
                '05' => [
                    'Obat Program Kesehatan',
                    'Kebijakan Pengendalian Ketersediaan Obat',
                    'Bimbingan Teknis dan Supervisi Pengendalian Ketersediaan Obat',
                    'Laporan dan Evaluasi'
                ],
                '06' => [
                    'Kebijakan Farmasi Manajemen dan Farmasi Klinis',
                    'Bimbingan Teknis dan Supervisi Farmasi Manajemen dan Farmasi Klinis',
                    'Penyelenggara Sistem Elektronik Farmasi (PSEF)',
                    'Sistem Informasi Pelayanan Kefarmasian',
                    'Peningkatan Mutu Pelayanan Kefarmasian',
                    'Laporan dan Evaluasi'
                ],
                '07' => [
                    'Kebijakan Pengendalian dan penggunaan Obat Rasional',
                    'Bimbingan Teknis dan Supervisi Pengendalian dan penggunaan Obat Rasional',
                    'Promosi dan Edukasi',
                    'Pemantauan dan Evaluasi'
                ]
            ],
            'GM' => [
                '01' => [
                    'Pedoman Gizi Seimbang',
                    'Pemberian Makanan Bayi dan Anak',
                    'Hari Gizi Nasional',
                    'Pelayanan Gizi Masyarakat'
                ],
                '02' => [
                    'Standar Antropometri',
                    'Pemantauan Konsumsi Gizi',
                    'Gizi dalam Kegiatan Bencana',
                    'Pemantauan Status Gizi',
                    'Jaringan Informasi Pangan dan Gizi'
                ],
                '03' => [
                    'Stunting/pendek',
                    'Manajemen Taburia',
                    'Suplementasi Gizi Tablet Tambah Darah dan Vitamin A',
                    'Buffer Stock Makanan Pendamping'
                ],
                '04' => [
                    'Pelayanan Gizi di Puskesmas',
                    'Pelayanan Gizi di Rumah Sakit (RS)',
                    'Pekan ASI Sedunia',
                    'Gizi Buruk'
                ]
            ],
            'HJ' => [
                '01' => [
                    'Pendayagunaan Sumber Daya Kesehatan Haji',
                    'Fasilitasi Pelayanan Kesehatan Haji',
                    'Pelatihan Petugas Kesehatan Haji'
                ],
                '02' => [
                    'Surveilans Kesehatan Haji',
                    'Analisis Data Kesehatan Haji',
                ],
                '03' => [
                    'Analisis dan Rekomendasi Kebijakan Kesehatan Haji',
                    'Kebijakan Kesehatan haji'
                ],
                '04' => [
                    'Program Manasik Kesehatan Haji',
                    'Penyuluhan dan Pembimbingan Kesehatan Haji',
                    'Pengendalian Faktor Risiko Kesehatan Haji'
                ],
                '05' => [
                    'Informasi dan Publikasi Kesehatan haji',
                    'Rekrutmen Petugas Kesehatan Haji'
                ]
            ],
            'IM' => [
                '01' => [
                    'Imunisasi Hepatitis B0 (HB0), Bacillus Calmette-Guérin (BCG), Polio (Oral Polio Vaccine (OPV) dan Inactivated Polio Vaccine (IPV)), Dipteri Pertusis Tetanus (DPT)-Hepatitis B (HB)- Haemophilus Influenzae type B (HiB), MR, JE pada Bayi dan Baduta',
                    'Pekan Imunisasi',
                    'Data Imunisasi'
                ],
                '02' => [
                    'Imunisasi Tambahan',
                    'Imunisasi Antigen Baru',
                    'Imunisasi Respons KLB',
                    'Imunisasi Khusus'
                ],
                '03' => [
                    'Imunisasi WUS',
                    'Surveilans PD3I',
                    'Surveilans KIPI'
                ],
                '04' => [
                    'Imunisasi Anak Sekolah',
                    'Sumber Daya Manusia Imunisasi',
                    'Logistik Imunisasi',
                    'Sistem Informasi Imunisasi',
                    'Koordinasi Lintas Sektor (LS) dan Lintas Program (LP)'
                ]
            ],
            'JP' => [
                '01' => [
                    'National Health Account (NHA)/Provincial Health Account (PHA)/District Health Account(DHA)',
                    'Analisis Biaya Kesehatan'
                ],
                '02' => [
                    'Kepesertaan',
                    'Iuran',
                    'Tarif',
                    'Clinical Advisory',
                    'Manfaat Pelayanan',
                    'Laporan Pelaksanaan Pembayaran Tagihan Jaminan Kesehatan'
                ],
                '03' => [
                    'Penilaian Teknologi Kesehatan/Health Technology Assesment (PTK/HTA)',
                    'Efektifitas dan Efisiensi Pembiayaan Kesehatan'
                ]
            ],
            'KG' => [
                '01' => [
                    'Pelayanan Antenatal Terpadu',
                    'Pelayanan Kelas Ibu Hamil',
                    'Pencegahan Penularan Human Immunodeficiency Virus (HIV) AIDS dari Ibu ke Anak (PPIA)',
                    'Kemitraan Bidan dan Dukun',
                    'Rumah Tunggu Kelahiran (RTK)',
                    'Supervisi Fasilitatif',
                    'Audit Maternal Perinatal',
                    'Program Perencanaan Persalinan dan Pencegahan Komplikasi (P4K)/Pemberdayaan Masyarakat',
                    'Tanda Bahaya pada Kehamilan',
                    'Surveilans Gizi, Kesehatan Ibu dan Anak',
                    'Pelayanan Kesehatan Neonatal',
                    'Manajemen Asfiksia',
                    'Manajemen Berat Bayi Lahir Rendah (BBLR)',
                    'Pencegahan Infeksi',
                    'Kegawatdaruratan Maternal dan Neonatal',
                    'Screening Hypotheroid Congenital',
                    'Kelainan Bawaan'
                ],
                '02' => [
                    'Stimulasi Dini Intervensi Deteksi Tumbuh Kembang (SDIDTK)',
                    'Rujukan Tumbuh Kembang',
                    'Manajemen Terpadu Balita Sakit Berbasis Komputer (The Implementation of the Integrated Management of Childhood Illnesses (IMCI) Computerized Adaptation and Training Tools (ICATT))',
                    'Manajemen Terpadu Balita Sakit (MTBS)',
                    'Manajemen Terpadu Balita Sakit Berbasis Masyarakat',
                    'Buku Kesehatan Ibu dan Anak',
                    'Kohort Bayi, Kohort Anak Balita dan Anak Pra-Sekolah',
                    'Anak dengan Disabilitas',
                    'Knowledge Sharing Program (KSP)',
                    'Kelas Ibu Balita'
                ],
                '03' => [
                    'Standar Nasional Pelayanan Kesehatan Peduli Remaja (PKPR)',
                    'Akselarasi Pelaksanaan Upaya Kesehatan Sekolah (UKS)',
                    'Kader Kesehatan Remaja/Konselor Sebaya',
                    'PKPR',
                    'Kesehatan Usia Sekolah dan Remaja di Dalam Sekolah',
                    'Kesehatan Usia Sekolah dan Remaja di Luar Sekolah',
                    'Partisipasi Anak Usia Sekolah dan Remaja',
                    'Jejaring Kesehatan Usia Sekolah dan Remaja'
                ],
                '04' => [
                    'Pelayanan Kesehatan Reproduksi bagi Calon Pengantin',
                    'Pelayanan Kesehatan Reproduksi bagi PUS/Skrining Layak Hamil',
                    'Pelayanan Kesehatan Reproduksi bagi Mahasiswa',
                    'Kesehatan Reproduksi di Tempat Kerja',
                    'Pelayanan kontrasepsi/Keluarga Berencana',
                    'Pelayanan Infertilitas dan Kesehatan Reproduksi Lainnya',
                    'Kemitraan dan Jejaring Kesehatan Reproduksi',
                    'Pendampingan/Penyeliaan/Fasilitasi/Monitoring Evaluasi Program Kesehatan Reproduksi'
                ],
                '05' => [
                    'Penyelenggaraan Puskesmas santun lansia dan Pelayanan Geriatri Terpadu di Rumah Sakit',
                    'Posyandu Lanjut Usia/Pelayanan Home Care/Long Term Care (PJP)',
                    'Kemitraan LP/LS dalam penyelenggaraan kesehatan lansia',
                    'TOT/Pelatihan/Orientasi Kesehatan Lanjut Usia',
                    'Komunikasi Informasi Edukasi (KIE) Kesehatan Lanjut Usia',
                    'Pendampingan/Penyeliaan/Fasilitasi/Monitoring dan Evaluasi Program Kesehatan Lansia',
                    'Data Dan Informasi Kesehatan Lansia',
                    'Isu Global Kesehatan Lansia'
                ],
                '06' => [
                    'Pelayanan Kesehatan bagi Korban Kekerasan terhadap Perempuan dan Anak (KtP/A) dan Tindak Pidana Perdagangan Orang (TPPO)',
                    'Paket Pelayanan Awal Minimal (PPAM)',
                    'Pelayanan Kesehatan Bagi Disabilitas dan Kelompok Rentan Lainnya',
                    'Pengarusutamaan Gender',
                    'Isu-Isu Global Kelompok Rentan'
                ]
            ],
            'KI' => [
                '01' => [
                    'Penerbitan Surat Tanda Registrasi Dokter',
                    'Pencabutan Surat Tanda Registrasi Dokter',
                    'Penerbitan Registrasi Dokter Sementara',
                    'Penerbitan Registrasi Dokter Bersyarat',
                    'Her Registrasi Dokter',
                ],
                '02' => [
                    'Pendidikan Profesi Dokter',
                    'Pendidikan Profesi Dokter Spesialis',
                    'Pengesahan Cabang Ilmu Kedokteran',
                    'Pendidikan Berkelanjutan Dokter',
                    'Pengesahan Standar Kompetensi Dokter'
                ],
                '03' => [
                    'Penerbitan Surat Tanda Registrasi Dokter Gigi',
                    'Pencabutan Surat Tanda Registrasi Dokter Gigi',
                    'Penerbitan Registrasi Dokter Gigi Sementara',
                    'Penerbitan Registrasi Dokter Gigi Bersyarat',
                    'Her Registrasi Dokter Gigi',
                ],
                '04' => [
                    'Pendidikan Profesi Dokter Gigi',
                    'Pendidikan Profesi Dokter Gigi Spesialis',
                    'Pengesahan Cabang Ilmu Kedokteran Gigi',
                    'Pendidikan Berkelanjutan Dokter Gigi',
                    'Pengesahan Standar Kompetensi Dokter Gigi'
                ],
                '05' => [
                    'Pembinaan Praktik Dokter',
                    'Pembinaan Praktik Dokter Gigi'
                ],
                '06' => [
                    'Persidangan Pemeriksaan Awal Kedokteran',
                    'Persidangan Pemeriksaan Awal Kedokteran Gigi',
                    'Persidangan Pemeriksaan Kedokteran',
                    'Persidangan Pemeriksaan Kedokteran Gigi',
                    'Tindak Lanjut/Eksekusi Keputusan'
                ]
            ],
            'KJ' => [
                '01' => [
                    'Promosi Kesehatan Jiwa dan Kemitraan di Institusi',
                    'Promosi Kesehatan Jiwa dan Kemitraan di Organisasi Lainnya'
                ],
                '02' => [
                    'Kesehatan Jiwa Anak dan Remaja Berkebutuhan Khusus dan atau Disabilitas',
                    'Kesehatan Jiwa Anak dan Remaja Usia Sekolah',
                    'Kesehatan Jiwa pada Anak dan Remaja dalam Penanganan Masalah Kasus Lainnya',
                    'Penjangkauan Pelayanan dan Deteksi Dini Masalah Kesehatan Jiwa melalui Kesehatan Jiwa Bergerak',
                    'Pencegahan Masalah Kesehatan Jiwa'
                ],
                '03' => [
                    'Kasus Gangguan Jiwa Berat',
                    'Kasus Gangguan Jiwa Ringan',
                    'Kegawatdaruratan Kesehatan Jiwa pada Situasi Krisis'
                ],
                '04' => [
                    'Masalah Penyalahgunaan NAPZA di Institusi',
                    'Masalah Penyalahgunaan NAPZA di Masyarakat',
                    'Upaya Promotif NAPZA',
                    'Upaya Preventif NAPZA',
                    'Upaya Kuratif NAPZA',
                    'Upaya Rehabilitatif NAPZA'
                ],
                '05' => [
                    'Surveilans Kesehatan Jiwa dan NAPZA',
                    'Sistem Informasi Kesehatan Jiwa',
                    'Pembinaan dan Advokasi Kesehatan Jiwa dan NAPZA'
                ],
                '06' => [
                    'Peringatan Hari Kesehatan Jiwa Sedunia',
                    'Peringatan Hari Besar Kesehatan Jiwa Lainnya'
                ],
                '07' => [
                    'Anak dan Remaja',
                    'Dewasa dan Lansia',
                    'Penanganan Gangguan NAPZA'
                ]
            ],
            'KK' => [
                '01' => [
                    'Pencegahan, Mitigasi dan Kesiapsiagaan',
                    'Ketahanan Kesehatan',
                    'Tanggap Darurat dan Tim Kegawatdaruratan Medis',
                    'Evaluasi, Rehabilitasi, dan Rekonstruksi',
                    'Kerja Sama United Nations dan Kemitraan Lainnya',
                    'Pengelolaan Data dan Informasi Pemantauan Krisis Kesehatan',
                    'Revitalisasi Gudang Regional',
                    'Logistik Kesehatan dan Barang Milik Negara'
                ],
                '02' => [
                    'Pencegahan, mitigasi dan Kesiapsiagaan',
                    'Ketahanan Kesehatan',
                    'Tanggap Darurat dan Tim Kegawatdaruratan Medis',
                    'Evaluasi, Rehabilitasi, dan Rekonstruksi',
                    'Kerja Sama United Nations dan Kemitraan Lainnya',
                    'Pengelolaan Data dan Informasi, Pemantauan Krisis Kesehatan',
                    'Revitalisasi Gudang Regional',
                    'Logistik Kesehatan dan Barang Milik Negara'
                ]
            ],
            'KL' => [
                '01' => [
                    'Penyehatan Air',
                    'Penyehatan Udara',
                    'Penyehatan Tanah',
                    'Penyehatan Sanitasi Dasar',
                    'Penyehatan Kawasan'
                ],
                '02' => [
                    'Peningkatan Higiene Sanitasi Pangan',
                    'Pengawasan dan Perlindungan Higiene Sanitasi Pangan'
                ],
                '03' => [
                    'Pengamanan Limbah',
                    'Pengamanan Radiasi'
                ],
                '04' => [
                    'Adaptasi Perubahan Iklim',
                    'Kebencanaan Bidang Kesehatan Lingkungan'
                ]
            ],
            'KO' => [
                '01' => [
                    'Kesehatan Okupasi',
                    'Surveilans Kesehatan Kerja',
                ],
                '02' => [
                    'Kesehatan Kerja Formal',
                    'Kesehatan Kerja Informal'
                ],
                '03' => [
                    'Kesehatan Olahraga Masyarakat',
                    'Kesehatan Olahraga Prestasi'
                ]
            ],
            'KT' => [
                '01' => [
                    'Registrasi Tenaga Kesehatan',
                    'Registrasi Psikologi Klinis',
                    'Registrasi Perawat',
                    'Registrasi Bidan',
                    'Registrasi Kefarmasian',
                    'Registrasi Tenaga Kesehatan Masyarakat',
                    'Registrasi Tenaga Kesehatan Lingkungan',
                    'Registrasi Tenaga Gizi',
                    'Registrasi Tenaga Keterapian Fisik',
                    'Registrasi Tenaga Keteknisian Medis',
                    'Registrasi Tenaga Biomedis',
                    'Registrasi Tenaga Kesehatan Tradisional'
                ],
                '02' => [
                    'Standar Kompetensi Tenaga Kesehatan',
                    'Standar Kompetensi Kerja Tenaga Kesehatan',
                    'Standar Nasional Pendidikan Tenaga Kesehatan',
                    'Standar Praktik Tenaga Kesehatan'
                ],
                '03' => [
                    'Pembinaan Keprofesian',
                    'Pengembangan Keprofesian'
                ],
                '04' => [
                    'Disiplin Praktik Tenaga Kesehatan',
                    'Disiplin Praktik Psikologi Klinis',
                    'Disiplin Praktik Perawat',
                    'Disiplin Praktik Bidan',
                    'Disiplin Praktik Kefarmasian',
                    'Disiplin Praktik Tenaga Kesehatan Masyarakat',
                    'Disiplin Praktik Tenaga Kesehatan Lingkungan',
                    'Disiplin Praktik Tenaga Gizi',
                    'Disiplin Praktik Tenaga Keterapian Fisik',
                    'Disiplin Praktik Keteknisian Medis',
                    'Disiplin Praktik Keteknisian Medis',
                    'Disiplin Praktik Tenaga Kesehatan Tradisional'
                ],
                '05' => [
                    'Bahan Pertimbangan Pendirian Institusi Pendidikan Tenaga Kesehatan',
                    'Bahan Pertimbangan Penutupan Institusi Pendidikan Tenaga Kesehatan'
                ]
            ],
            'PG' => [
                '01' => [
                    'Pendayagunaan Dokter Spesialis',
                    'Program Internsip Dokter Indonesia',
                    'Komite Internsip Dokter Indonesia',
                    'Penugasan Khusus Team Based',
                    'Penugasan Khusus Individual',
                    'Penugasan Khusus Residen',
                    'Pembinaan Teknis kepada Unit Pelaksana Teknis (UPT) Kementerian Kesehatan terkait Pendayagunaan Tenaga Kesehatan'
                ],
                '02' => [
                    'Fasilitasi Pendayagunaan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan WNI LLN',
                    'Fasilitasi Pendayagunaan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Purna Penempatan Luar Negeri',
                    'Pembinaan teknis kepada UPT Kementerian Kesehatan terkait Pendayagunaan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan WNI LLN dan Purna Penempatan Luar Negeri',
                ],
                '03' => [
                    'Fasilitasi Pendayagunaan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan Indonesia ke Luar Negeri',
                    'Fasilitasi Pendayagunaan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan WNA di Indonesia',
                    'Pembinaan Teknis terkait Bidang Pendayagunaan Tenaga Kesehatan Indonesia ke Luar Negeri dan WNA di Indonesia'
                ],
                '04' => [
                    'Fasilitasi Pendayagunaan Dokter/Dokter Gigi, Dokter/Dokter Gigi Spesialis/Sub-Spesialis WNI LLN',
                    'Fasilitasi Pendayagunaan Dokter/Dokter Gigi, Dokter/Dokter Gigi Spesialis/Sub-Spesialis WNA yang melaksanakan Adaptasi',
                    'Pembinaan Teknis terkait Dokter/Dokter Gigi, Dokter/Dokter Gigi Spesialis/Sub Spesialis WNI LLN dan WNA yang melaksanakan Adaptasi'
                ]
            ],
            'PL' => [
                '01' => [
                    'Analisis Kompetensi Kebutuhan Pelatihan Tenaga Kesehatan',
                    'Analisis Kompetensi Kebutuhan Pelatihan Tenaga Penunjang Kesehatan',
                    'Penilaian Potensi, Kompetensi, serta Sertifikasi Tenaga Kesehatan dan Tenaga Penunjang Kesehatan',
                    'Lembaga Sertifikasi Profesi (LSP)',
                    'Pemetaan Kebutuhan Pelatihan Tenaga Kesehatan dan Tenaga Penunjang Kesehatan'
                ],
                '02' => [
                    'Program Pelatihan Tenaga Kesehatan',
                    'Program Pelatihan Tenaga Penunjang Kesehatan',
                    'Penyelenggaraan Pelatihan'
                ],
                '03' => [
                    'Penjaminan Mutu Institusi Pelatihan',
                    'Penjaminan Mutu Pelatihan Tenaga Kesehatan dan Tenaga Penunjang Kesehatan',
                ],
                '04' => [
                    'Pengelolaan Peningkatan Kompetensi Tenaga Kesehatan',
                    'Pembinaan Teknis Peningkatan Kompetensi'
                ]
            ],
            'PK' => [
                '01' => [
                    'Strategi Komunikasi Risiko, Informasi dan Edukasi Kesehatan',
                    'Pengembangan Pesan',
                    'Desain Kreatif Pesan Kesehatan'
                ],
                '02' => [
                    'Penyebarluasan Informasi Kesehatan',
                    'Kampanye Kesehatan'
                ],
                '03' => [
                    'Advokasi Kesehatan',
                    'Kebijakan yang disusun oleh Sektoral, Pemerintah Provinsi/Kabupaten/Kota',
                    'Komitmen dalam Mendukung Kesehatan Masyarakat'
                ],
                '04' => [
                    'Kemitraan Kesehatan',
                    'MoU dalam mendukung Program Kesehatan Masyarakat',
                    'Perjanjian Kerja Sama dalam mendukung Program Kesehatan Masyarakat',
                    'Pembinaan Teknis Jabatan Fungsional Promosi Kesehatan',
                    'Gerakan Masyarakat Hidup Sehat (GERMAS)'
                ],
                '05' => [
                    'Pemberdayaan dan Penggerakan Promosi Kesehatan',
                    'Peningkatan Kapasitas Sumber Daya Manusia Kesehatan (SDMK) Masyarakat',
                    'Penggerakan Promosi Kesehatan di Berbagai Tatanan',
                    'Penggerakan 7 Materi Prioritas Promosi Kesehatan',
                    'Saka Bakti Husada (SBH)',
                    'Promosi Kesehatan di Rumah Sakit (PKRS)',
                    'Promosi Kesehatan Bencana/Tim Gerak Cepat'
                ],
                '06' => [
                    'Pengorganisasian Masyarakat',
                    'Pengembangan Upaya Kesehatan Bersumber Daya Masyarakat (UKBM)',
                    'Pembentukan Kelompok Kerja Operasional (Pokjanal)',
                    'International Non-Government Organization (INGO)'
                ],
                '07' => [
                    'Peran Serta Masyarakat',
                    'Organisasi Kemasyarakatan/LSM',
                    'Institusi Keagamaan yang Menyelenggarakan Peran Serta Masyarakat Bidang Kesehatan',
                    'Kelompok Potensial yang Melaksanakan Gerakan Masyarakat Bidang Kesehatan'
                ],
                '08' => [
                    'Data dan Analisis Perilaku',
                    'Data Perilaku dan Analisis semua siklus kehidupan',
                    'Komunikasi risiko dan strategi 7 materi prioritas Promosi Kesehatan',
                    'Standar Sarana dan Prasarana Promosi Kesehatan',
                    'Perilaku Hidup Bersih dan Sehat (PHBS)'
                ],
                '09' => [
                    'Perilaku Bumil, Anak dan Remaja',
                    'Demand Creation dan Edukasi sesuai dengan siklus bumil, anak dan remaja',
                    'Upaya Kesehatan Sekolah (UKS'
                ],
                '10' => [
                    'Perilaku Usia Produktif dan Lansia',
                    'Demand Creation dan Edukasi sesuai dengan siklus usia produktif dan lansia'
                ]
            ],
            'PM' => [
                '01' => [
                    'Pengendalian Penyakit TBC',
                    'Pengobatan TBC',
                    'Laboratorium TBC',
                    'Obat Anti TBC',
                    'TBC Operational Research (TORG)',
                    'Logistik TBC'
                ],
                '02' => [
                    'Survei Terpadu Biologis dan Perilaku (STBCP)',
                    'HIV',
                    'Infeksi Menular Seksual (IMS)',
                    'Obat Anti Retro Viral (ARV) dan Reagen Tes HIV',
                    'Kelompok Kerja Pengendalian AIDS dan Penyakit IMS'
                ],
                '03' => [
                    'Pengendalian Infeksi Saluran Pernafasan Akut (ISPA)',
                    'Penyakit Infeksi Saluran Pencernaan',
                    'Penyakit Tropis Menular',
                    'Kelompok Kerja Pengendalian Penyakit Menular'
                ]
            ],
            'PN' => [
                '01' => [
                    'Proyeksi Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan',
                    'Pemetaan Kebutuhan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan',
                    'Penetapan Kebutuhan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan Baru'
                ],
                '02' => [
                    'Perencanaan Kebutuhan Tenaga Kesehatan dan Tenaga Penunjang/Pendukung Kesehatan',
                    'Perencanaan Pemenuhan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan',
                ],
                '03' => [
                    'Strategi Nasional Pemenuhan Tenaga Kesehatan',
                    'Strategi Nasional Pengembangan Tenaga Kesehatan'
                ],
                '04' => [
                    'Perencanaan Pengembangan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan',
                    'Perencanaan Evaluasi Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan',
                    'Pembinaan Teknis Perencanaan Tenaga Kesehatan dan Tenaga Pendukung/Penunjang Kesehatan',
                ]
            ],
            'PT' => [
                '01' => [
                    'Pengelolaan Jabatan Fungsional Kesehatan',
                    'Permohonan Rekomendasi',
                    'Pemantauan dan Evaluasi Jabatan Fungsional Kesehatan',
                    'Sistem Informasi Jabatan Fungsional Kesehatan'
                ],
                '02' => [
                    'Pengelolaan Karier Tenaga Kesehatan Non ASN',
                    'Lembaga Sertifikasi Profesi (LSP)',
                    'Pemantauan dan Evaluasi Pengelolaan Karier Tenaga Kesehatan Non-ASN',
                    'Sistem Informasi Karier Tenaga Kesehatan Non-ASN'
                ],
                '03' => [
                    'Pengelolaan Pengaduan terhadap Pelaksanaan Pengawasan Tenaga Kesehatan',
                    'Pelaksanaan Penyidikan Tenaga Kesehatan',
                    'Pemantauan dan Evaluasi Pengawasan Tenaga Kesehatan'
                ],
                '04' => [
                    'Kesejahteraan dan Perlindungan Tenaga Kesehatan',
                    'Pemantauan dan Evaluasi Kesejahteraan dan Perlindungan Tenaga Kesehatan',
                ]
            ],
            'PV' => [
                '01' => [
                    'Kelambu Berinsektisida (Long-Lasting Insecticidal Nets (LLINs))',
                    'Eliminasi Malaria',
                    'Crosschecker Mikroskopis Malaria'
                ],
                '02' => [
                    'Demam Berdarah Dengue (DBD)',
                    'Chikungunya',
                    'Japanese Encephalitis',
                    'Virus Zika'
                ],
                '03' => [
                    'Penyakit Flu Burung',
                    'Penyakit Rabies',
                    'Penyakit Pes',
                    'Penyakit Flu Baru',
                    'Penyakit Akibat Gigitan Hewan Berbisa dan Tumbuhan Beracun',
                    'Penyakit Bersumber Binatang Lainnya'
                ],
                '04' => [
                    'Filariasis',
                    'Kecacingan',
                    'Schistosomiasis'
                ],
                '05' => [
                    'Pengendalian Vektor',
                    'Pengendalian Binatang Pembawa Penyakit',
                    'Uji Resistensi'
                ]
            ],
            'RS' => [
                '01' => [
                    'Pelayanan Medis',
                    'Pelayanan Penunjang',
                    'Pelayanan Non-Medis',
                    'Rekam Medis',
                    'Forensik',
                    'Visum et repertum',
                    'Transplantasi Organ'
                ],
                '02' => [
                    'Pelayanan Medis di Fasilitas Kesehatan Lainnya',
                    'Pelayanan Penunjang di Fasilitas Kesehatan Lainnya',
                    'Pelayanan Non-Medis di Fasilitas Kesehatan Lainnya',
                    'Rekam Medis di Fasilitas Kesehatan Lainnya'
                ]
            ],
            'SR' => [
                '01' => [
                    'Surveilans Penyakit',
                    'Surveilans KLB',
                    'Surveilans Kesehatan Lingkungan',
                    'Surveilans Epidemiologi',
                    'Kewaspadaan Dini',
                    'Respon KLB dan Wabah'
                ],
                '02' => [
                    'Hapus Serangga dan Hapus Tikus',
                    'Teknis Pengendalian Risiko Kesehatan Lingkungan',
                    'Vaksinasi Internasional',
                    'Kekarantinaan Kesehatan dan Upaya Kesehatan Pelabuhan',
                    'Pengangkutan Orang Sakit',
                    'Pengiriman Jenazah',
                    'Dokumen Perjalanan KLB dan Wabah'
                ],
                '03' => [
                    'Penyakit Infeksi Emerging',
                    'Deteksi Penyakit Infeksi Emerging',
                    'Intervensi Penyakit Infeksi Emerging'
                ],
                '04' => [
                    'Sertifikat Kesehatan Manusia',
                    'Sertifikat Kesehatan Moda Transportasi',
                    'Sertifikat Kesehatan Barang',
                    'Sertifikat Kesehatan Lingkungan',
                    'Surat Keterangan',
                    'Buku Kesehatan'
                ],
                '05' => [
                    'Standardisasi Laboratorium Surveilans',
                    'Pengembangan Laboratorium Surveilans Pencegahan dan Pengendalian Penyakit',
                    'Penyelenggaraan Laboratorium Surveilans Pencegahan dan Pengendalian Penyakit'
                ],
                '06' => [
                    'Diseminasi Informasi',
                    'Fasilitasi Pengelolaan Sumber Daya Manusia',
                    'Fasilitasi Kemitraan'
                ]
            ],
            'SS' => [
                '01' => [
                    'Upaya Kesehatan Masyarakat',
                    'Pelayanan dan Penunjang Kesehatan',
                    'Ketahanan dan Teknologi Kesehatan',
                    'Sumber Daya Kesehatan'
                ],
                '02' => [
                    'Upaya Kesehatan Masyarakat',
                    'Pelayanan dan Penunjang Kesehatan',
                    'Ketahanan dan Teknologi Kesehatan',
                    'Sumber Daya Kesehatan'
                ],
                '03' => [
                    'Upaya Kesehatan Masyarakat',
                    'Pelayanan dan Penunjang Kesehatan',
                    'Ketahanan dan Teknologi Kesehatan',
                    'Sumber Daya Kesehatan'
                ]
            ],
            'TK' => [
                '01' => [
                    'Sistem Rujukan Pelayanan Kesehatan',
                    'Pengembangan Pelayanan Telemedicine'
                ],
                '02' => [
                    'Jejaring RS Pendidikan',
                    'Program di RS Pendidikan',
                    'Teknologi Kesehatan',
                    'Program di RS Pendidikan Lainnya'
                ],
                '03' => [
                    'Fasilitasi Pelayanan Kesehatan',
                    'Kerja Sama Bidang Pelayanan Kesehatan',
                ],
                '04' => [
                    'Penilaian Kinerja Pelayanan',
                    'Rencana Strategis Bisnis'
                ]
            ],
            'TL' => [
                '01' => [
                    'Pengembangan Model dan Teknologi Tepat Guna',
                    'Pengembangan dan Penapisan Teknologi',
                    'Kemitraan dan Jejaring Kerja di Bidang Pengembangan Teknologi dan Laboratorium'
                ],
                '02' => [
                    'Pengembangan Teknologi Laboratorium',
                    'Laboratorium Rujukan',
                    'Uji Kendali Mutu dan Kalibrasi',
                    'Rekomendasi Hasil Uji Laboratorium'
                ]
            ],
            'TM' => [
               '01' => [
                    'Penyakit Jantung',
                    'Penyakit Pembuluh Darah',
                    'Penyakit Hipertensi',
                    'Penyakit Stroke'
               ],
               '02' => [
                    'Penyakit Diabetes Melitus',
                    'Penyakit Gangguan Metabolik',
                    'Penyakit Gangguan Tiroid',
                    'Gangguan Obesitas'
               ],
               '03' => [
                    'Penyakit Kanker',
                    'Penyakit Kelainan Darah'
               ],
               '04' => [
                    'Penyakit Akibat Produk Tembakau',
                    'Gangguan Imunologi'
               ],
               '05' => [
                    'Pengendalian Gangguan Panca Indera',
                    'Pengendalian Gangguan Fungsional'
               ]
            ],
            'YK' => [
                '01' => [
                    'Pemetaan Prasarana dan Sarana',
                    'Penilaian Teknologi Prasarana dan Sarana',
                    'Pengelolaan dan Penilaian Fungsi Prasarana dan Sarana',
                    'Analisis Data dan Informasi Prasarana dan Sarana',
                    'Pembinaan Teknis Fasilitas Pelayanan Kesehatan'
                ],
                '02' => [
                    'Pemetaan Prasarana dan Sarana',
                    'Penilaian Teknologi Prasarana dan Sarana',
                    'Pengelolaan dan Penilaian Fungsi Prasarana dan Sarana',
                    'Analisis Data dan Informasi Prasarana dan Sarana',
                    'Pembinaan Teknis Fasilitas Pelayanan Kesehatan'
                ],
                '03' => [
                    'Pemetaan Prasarana dan Sarana',
                    'Penilaian Teknologi Prasarana dan Sarana',
                    'Pengelolaan dan Penilaian Fungsi Prasarana dan Sarana',
                    'Pembinaan Teknis Fasilitas Pelayanan Kesehatan'
                ],
                '04' => [
                    'Pemetaan Standar Alat Kesehatan',
                    'Penilaian Teknologi Standar Alat Kesehatan',
                    'Pengelolaan  dan Penilaian Fungsi Standar Alat Kesehatan',
                    'Fasilitasi Pemenuhan Standar Alat Kesehatan',
                    'Analisis Data dan Informasi Standar Alat Kesehatan',
                    'Pembinaan Teknis Standar Alat Kesehatan Pelayanan Kesehatan'
                ],
                '05' => [
                    'Penilaian dan Monitoring Pengamanan Prasarana, Sarana, dan Alat Kesehatan',
                    'Pengujian dan Kalibrasi Prasarana, Sarana, dan Alat Kesehatan',
                    'Analisis Data dan Informasi  Pengujian  dan Kalibrasi',
                    'Pembinaan Teknis Pengujian dan Kalibrasi Prasarana, Sarana, dan Alat Kesehatan'
                ]
            ],
            'YM' => [
                '01' => [
                    'Mutu Pelayanan Kesehatan Primer',
                    'Mutu Pelayanan Kesehatan Rujukan',
                    'Mutu Pelayanan Kesehatan Fasilitas Pelayanan Kesehatan lainnya'
                ],
                '02' => [
                    'Akreditasi Pelayanan Kesehatan Primer',
                    'Akreditasi Pelayanan Kesehatan Rujukan',
                    'Akreditasi Pelayanan Kesehatan Fasilitas Pelayanan Kesehatan lainnya'
                ]
            ],
            'YP' => [
                '01' => [
                    'Puskesmas',
                    'Daerah Terpencil, Perbatasan dan Kepulauan (DTPK)',
                    'Keluarga Sehat',
                    'Integrasi Layanan Kesehatan Primer'
                ],
                '02' => [
                    'Pelayanan Klinik',
                    'Pelayanan Darah (Quickwins)',
                    'Fasilitas Kesehatan Tingkat Pertama (FKTP) Berprestasi'
                ],
                '03' => [
                    'Pelayanan Klinik',
                    'Praktik Perorangan',
                    'Panduan Praktik Klinis dan Panduan Keterampilan Klinis'
                ]
            ],
            'YR' => [
                '01' => [
                    'Standar Pelayanan Kedokteran',
                    'Pelayanan Kesehatan Rujukan',
                    'Panduan Praktik Klinis',
                    'Audit Klinis RS dan lainnya'
                ],
                '02' => [
                    'Perizinan dan Pengembangan Inovasi Pelayanan Kesehatan',
                    'Pengawasan RS'
                ],
                '03' => [
                    'Rujuk Balik',
                    'Pelayanan Unggulan',
                    'Jejaring Pelayanan Kesehatan'
                ]
            ],
            'YT' => [
                '01' => [
                    'Pelayanan Kesehatan Penyehat Tradisional (Hattra)',
                    'Pembinaan Hattra',
                    'Pelayanan Sehat Pakai Air (SPA)',
                    'Asuhan Mandiri Kesehatan Tradisional',
                    'Penilaian Pemanfaatan Taman Obat Keluarga (TOGA)'
                ],
                '02' => [
                    'Penilaian/Penapisan Kesehatan Tradisional',
                    'Pelayanan Kesehatan Komplementer Non Tradisional',
                    'Informasi dan Dokumentasi Pelayanan Kesehatan Tradisional Komplementer',
                    'Formularium Ramuan Obat (FROTI)',
                    'Tenaga Pengawas Kesehatan Tradisional',
                    'Pelayanan Kesehatan Tradisional Indonesia',
                    'Sentra Penerapan dan Pengembangan Pengobatan Tradisional (SP3T)',
                    'Kelompok Kerja Nasional'
                ],
                '03' => [
                    'Formularium Obat Herbal Asli Indonesia',
                    'Pelayanan Medik Obat Herbal Asli Indonesia',
                    'Pelayanan Medik Akupunktur',
                    'Pelayanan Akupresur di Puskesmas',
                    'Brainstorming Pelaksanaan Kegiatan terkait Pelayanan Kesehatan Integrasi',
                    'Pelayanan Kesehatan Tradisional Integrasi',
                    'Pelayanan Akupresur di Puskesmas'
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
                        'specific_name' => $specificCode,
                        'specific_description' => null,
                    ]);
                }
            }
        }
    }
}
