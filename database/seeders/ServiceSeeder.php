<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // Web Development
            [
                'title'       => 'Company Profile Website',
                'description' => 'Website profesional modern untuk representasi bisnis Anda di dunia digital dengan desain premium dan CMS terintegrasi.',
                'icon'        => 'globe',
                'category'    => 'web-development',
                'features'    => ['Responsive Design', 'CMS Terintegrasi', 'SEO Optimized', 'Fast Loading', 'SSL Ready'],
                'sort_order'  => 0,
            ],
            [
                'title'       => 'Dashboard Admin System',
                'description' => 'Dashboard manajemen data yang powerful dengan visualisasi data real-time, laporan, dan kontrol penuh atas sistem Anda.',
                'icon'        => 'layout-dashboard',
                'category'    => 'web-development',
                'features'    => ['Real-time Data', 'Custom Reports', 'Role Management', 'Data Export', 'Chart Analytics'],
                'sort_order'  => 1,
            ],
            [
                'title'       => 'ERP / CRM System',
                'description' => 'Sistem manajemen bisnis terintegrasi untuk mengelola operasional, pelanggan, inventaris, dan keuangan dalam satu platform.',
                'icon'        => 'database',
                'category'    => 'web-development',
                'features'    => ['Multi Module', 'User Management', 'Audit Trail', 'API Integration', 'Custom Workflow'],
                'sort_order'  => 2,
            ],
            [
                'title'       => 'REST API Development',
                'description' => 'Pengembangan API yang robust, aman, dan terdokumentasi dengan baik untuk integrasi aplikasi mobile maupun web.',
                'icon'        => 'code-2',
                'category'    => 'web-development',
                'features'    => ['RESTful API', 'JWT Authentication', 'API Documentation', 'Rate Limiting', 'Version Control'],
                'sort_order'  => 3,
            ],
            [
                'title'       => 'Monitoring Dashboard',
                'description' => 'Platform monitoring real-time untuk memantau performa sistem, jaringan, dan perangkat dengan visualisasi data yang intuitif.',
                'icon'        => 'activity',
                'category'    => 'web-development',
                'features'    => ['Real-time Monitor', 'Alert System', 'Historical Data', 'SNMP Integration', 'Multi-device'],
                'sort_order'  => 4,
            ],
            // Engineering Services
            [
                'title'       => 'Network Troubleshooting',
                'description' => 'Diagnosa dan penyelesaian masalah jaringan secara cepat dan tepat untuk meminimalkan downtime pada operasional bisnis Anda.',
                'icon'        => 'wifi',
                'category'    => 'engineering',
                'features'    => ['Fast Response', 'Root Cause Analysis', 'Network Audit', 'Performance Tuning', 'Documentation'],
                'sort_order'  => 5,
            ],
            [
                'title'       => 'Infrastructure Monitoring',
                'description' => 'Monitoring proaktif infrastruktur IT Anda untuk memastikan semua sistem berjalan optimal dan mencegah gangguan sebelum terjadi.',
                'icon'        => 'server',
                'category'    => 'engineering',
                'features'    => ['24/7 Monitoring', 'Proactive Alert', 'SLA Tracking', 'Incident Report', 'Dashboard View'],
                'sort_order'  => 6,
            ],
            [
                'title'       => 'Server Maintenance',
                'description' => 'Perawatan dan optimasi server Linux/Windows untuk memastikan performa, keamanan, dan ketersediaan sistem yang optimal.',
                'icon'        => 'hard-drive',
                'category'    => 'engineering',
                'features'    => ['Regular Backup', 'Security Patch', 'Performance Tuning', 'Log Analysis', 'Capacity Planning'],
                'sort_order'  => 7,
            ],
            [
                'title'       => 'Fiber Optic Support',
                'description' => 'Instalasi, perbaikan, dan maintenance kabel fiber optik untuk memastikan konektivitas jaringan yang andal dan berkecepatan tinggi.',
                'icon'        => 'zap',
                'category'    => 'engineering',
                'features'    => ['OTDR Testing', 'Splicing Service', 'Installation', 'Fault Locating', 'Documentation'],
                'sort_order'  => 8,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                $service
            );
        }
    }
}
