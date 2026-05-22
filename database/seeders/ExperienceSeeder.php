<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            [
                'title'            => 'Engineering On Site (EOS)',
                'company'          => 'PT Telkom Indonesia',
                'location'         => 'Indonesia',
                'type'             => 'full-time',
                'description'      => 'Bertanggung jawab atas monitoring, maintenance, troubleshooting infrastruktur jaringan dan sistem enterprise di wilayah operasional Telkom. Mengelola perangkat jaringan, melakukan operational support, dan memastikan uptime layanan tetap optimal.',
                'responsibilities' => [
                    'Monitoring infrastruktur jaringan secara real-time',
                    'Troubleshooting gangguan jaringan dan sistem',
                    'Maintenance perangkat network (router, switch, ODP)',
                    'Operational support untuk layanan enterprise',
                    'Monitoring CCTV dan keamanan sistem',
                    'Pembuatan laporan gangguan dan penyelesaian tiket',
                    'Koordinasi dengan tim NOC dan helpdesk',
                    'Support instalasi dan konfigurasi perangkat jaringan',
                ],
                'tech_used'        => ['Mikrotik', 'Linux', 'SNMP', 'Zabbix', 'OTDR', 'Fiber Optic', 'CCTV'],
                'start_date'       => '2022-01-01',
                'end_date'         => null,
                'is_current'       => true,
                'sort_order'       => 0,
            ],
            [
                'title'            => 'Full Stack Web Developer',
                'company'          => 'Freelance / Self-Employed',
                'location'         => 'Remote',
                'type'             => 'freelance',
                'description'      => 'Mengembangkan berbagai aplikasi web modern berbasis Laravel untuk klien dari berbagai industri. Mulai dari sistem manajemen, dashboard monitoring, company profile, hingga sistem enterprise.',
                'responsibilities' => [
                    'Desain dan pengembangan aplikasi web Laravel full stack',
                    'Pembuatan RESTful API untuk aplikasi mobile dan web',
                    'Pengembangan dashboard monitoring dan analitik',
                    'Optimasi performa database dan query',
                    'Deployment dan konfigurasi server VPS Linux',
                    'Konsultasi teknologi dan arsitektur sistem',
                ],
                'tech_used'        => ['Laravel', 'PHP', 'MySQL', 'PostgreSQL', 'Tailwind CSS', 'Alpine.js', 'Vue.js', 'REST API'],
                'start_date'       => '2021-01-01',
                'end_date'         => null,
                'is_current'       => true,
                'sort_order'       => 1,
            ],
            [
                'title'            => 'Backend Developer',
                'company'          => 'Project Based',
                'location'         => 'Indonesia',
                'type'             => 'contract',
                'description'      => 'Pengembangan sistem backend untuk berbagai project enterprise, termasuk sistem KPR, pengajuan online, dan platform monitoring. Fokus pada arsitektur API, keamanan, dan skalabilitas sistem.',
                'responsibilities' => [
                    'Pengembangan RESTful API dengan Laravel',
                    'Desain skema database yang optimal',
                    'Implementasi autentikasi dan otorisasi',
                    'Integrasi layanan pihak ketiga',
                    'Code review dan dokumentasi API',
                ],
                'tech_used'        => ['Laravel', 'PHP', 'MySQL', 'REST API', 'JWT', 'Redis'],
                'start_date'       => '2020-06-01',
                'end_date'         => '2021-12-31',
                'is_current'       => false,
                'sort_order'       => 2,
            ],
            [
                'title'            => 'Network Support Technician',
                'company'          => 'IT Support Company',
                'location'         => 'Indonesia',
                'type'             => 'full-time',
                'description'      => 'Memberikan dukungan teknis untuk infrastruktur jaringan, instalasi perangkat, dan troubleshooting sistem IT untuk klien korporat.',
                'responsibilities' => [
                    'Instalasi dan konfigurasi jaringan LAN/WAN',
                    'Setup dan konfigurasi Mikrotik router',
                    'Troubleshooting konektivitas jaringan',
                    'Helpdesk support untuk pengguna akhir',
                    'Dokumentasi jaringan dan inventaris perangkat',
                ],
                'tech_used'        => ['Mikrotik', 'Cisco', 'Linux', 'Windows Server', 'Fiber Optic'],
                'start_date'       => '2019-01-01',
                'end_date'         => '2020-05-31',
                'is_current'       => false,
                'sort_order'       => 3,
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::updateOrCreate(
                ['title' => $exp['title'], 'company' => $exp['company']],
                $exp
            );
        }
    }
}
