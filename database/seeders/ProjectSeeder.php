<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title'            => 'Dashboard Monitoring Jaringan',
                'description'      => 'Platform monitoring jaringan real-time berbasis web untuk memantau performa, uptime, dan kesehatan perangkat jaringan di seluruh cabang.',
                'long_description' => 'Sistem monitoring jaringan terpusat yang dibangun dengan Laravel dan integrasi SNMP untuk memantau ribuan perangkat jaringan secara real-time. Dilengkapi dengan alert otomatis, grafik historis, dan laporan performa.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'SNMP', 'Chart.js', 'Alpine.js', 'Tailwind CSS'],
                'category'         => 'monitoring',
                'status'           => 'completed',
                'featured'         => true,
                'sort_order'       => 0,
            ],
            [
                'title'            => 'Sistem Pengajuan Online',
                'description'      => 'Aplikasi web untuk manajemen pengajuan dan approval workflow dengan notifikasi email dan dashboard tracking status.',
                'long_description' => 'Sistem pengajuan digital yang menggantikan proses manual dengan alur kerja terstruktur. Mendukung multi-level approval, notifikasi real-time, dan pelaporan komprehensif.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'Livewire', 'Tailwind CSS', 'Alpine.js'],
                'category'         => 'web-app',
                'status'           => 'completed',
                'featured'         => true,
                'sort_order'       => 1,
            ],
            [
                'title'            => 'Aplikasi Pendaftaran Siswa',
                'description'      => 'Sistem pendaftaran siswa baru berbasis web dengan fitur upload dokumen, pembayaran online, dan tracking status pendaftaran.',
                'long_description' => 'Platform pendaftaran siswa digital yang mempermudah proses penerimaan siswa baru. Tersedia fitur manajemen berkas, notifikasi, dan laporan penerimaan.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS', 'JavaScript'],
                'category'         => 'web-app',
                'status'           => 'completed',
                'featured'         => false,
                'sort_order'       => 2,
            ],
            [
                'title'            => 'Sistem KPR Rumah',
                'description'      => 'Platform simulasi dan pengajuan KPR dengan kalkulasi cicilan otomatis, scoring kredit, dan tracking proses pengajuan.',
                'long_description' => 'Sistem manajemen KPR lengkap yang mencakup simulasi cicilan, pengajuan online, verifikasi dokumen, dan monitoring proses persetujuan kredit.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'REST API', 'Bootstrap', 'jQuery'],
                'category'         => 'web-app',
                'status'           => 'completed',
                'featured'         => true,
                'sort_order'       => 3,
            ],
            [
                'title'            => 'Monitoring Device System',
                'description'      => 'Sistem monitoring perangkat IT terpusat dengan deteksi status real-time, alert notifikasi, dan manajemen inventaris perangkat.',
                'long_description' => 'Platform enterprise untuk monitoring kondisi perangkat IT secara terpusat. Terintegrasi dengan sistem ticketing untuk penanganan insiden yang lebih efisien.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'WebSocket', 'Chart.js', 'Tailwind CSS'],
                'category'         => 'monitoring',
                'status'           => 'in-progress',
                'featured'         => true,
                'sort_order'       => 4,
            ],
            [
                'title'            => 'Helpdesk Ticketing System',
                'description'      => 'Sistem manajemen tiket helpdesk dengan SLA tracking, eskalasi otomatis, knowledge base, dan dashboard analitik performa tim.',
                'long_description' => 'Platform helpdesk profesional dengan sistem tiket yang lengkap, kategori prioritas, SLA monitoring, dan laporan performa agen support.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'Livewire', 'Tailwind CSS', 'Alpine.js'],
                'category'         => 'dashboard',
                'status'           => 'completed',
                'featured'         => false,
                'sort_order'       => 5,
            ],
            [
                'title'            => 'Company Profile Website',
                'description'      => 'Website company profile modern dengan CMS terintegrasi, blog, galeri, dan formulir kontak yang responsif.',
                'long_description' => 'Website perusahaan yang dibangun dengan Laravel dan dilengkapi CMS untuk manajemen konten, galeri foto, artikel, dan profil tim.',
                'tech_stack'       => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS', 'Alpine.js', 'AOS'],
                'category'         => 'web-app',
                'status'           => 'completed',
                'featured'         => false,
                'sort_order'       => 6,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => Str::slug($project['title'])],
                array_merge($project, ['slug' => Str::slug($project['title'])])
            );
        }
    }
}
