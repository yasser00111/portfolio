<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $devSkills = [
            ['name' => 'Laravel',       'proficiency' => 92, 'color' => '#FF2D20', 'icon' => 'laravel'],
            ['name' => 'PHP',           'proficiency' => 90, 'color' => '#777BB4', 'icon' => 'php'],
            ['name' => 'JavaScript',    'proficiency' => 85, 'color' => '#F7DF1E', 'icon' => 'javascript'],
            ['name' => 'MySQL',         'proficiency' => 88, 'color' => '#4479A1', 'icon' => 'mysql'],
            ['name' => 'PostgreSQL',    'proficiency' => 78, 'color' => '#336791', 'icon' => 'postgresql'],
            ['name' => 'REST API',      'proficiency' => 90, 'color' => '#00D4AA', 'icon' => 'api'],
            ['name' => 'Tailwind CSS',  'proficiency' => 88, 'color' => '#06B6D4', 'icon' => 'tailwind'],
            ['name' => 'Vue.js',        'proficiency' => 72, 'color' => '#4FC08D', 'icon' => 'vue'],
            ['name' => 'Git & GitHub',  'proficiency' => 85, 'color' => '#F05032', 'icon' => 'git'],
            ['name' => 'Blade / HTML',  'proficiency' => 92, 'color' => '#E44D26', 'icon' => 'html'],
            ['name' => 'Alpine.js',     'proficiency' => 80, 'color' => '#8BC0D0', 'icon' => 'alpinejs'],
            ['name' => 'Linux (Bash)',  'proficiency' => 78, 'color' => '#FCC624', 'icon' => 'linux'],
        ];

        $engSkills = [
            ['name' => 'Network Monitoring',        'proficiency' => 90, 'color' => '#3B82F6', 'icon' => 'network'],
            ['name' => 'Mikrotik',                  'proficiency' => 85, 'color' => '#CC0000', 'icon' => 'mikrotik'],
            ['name' => 'Linux Server',              'proficiency' => 82, 'color' => '#FCC624', 'icon' => 'linux'],
            ['name' => 'System Maintenance',        'proficiency' => 88, 'color' => '#10B981', 'icon' => 'maintenance'],
            ['name' => 'Infrastructure Monitoring', 'proficiency' => 87, 'color' => '#6366F1', 'icon' => 'infrastructure'],
            ['name' => 'CCTV & Network Devices',    'proficiency' => 80, 'color' => '#F59E0B', 'icon' => 'cctv'],
            ['name' => 'Operational Support',       'proficiency' => 92, 'color' => '#EC4899', 'icon' => 'support'],
            ['name' => 'Helpdesk Support',          'proficiency' => 88, 'color' => '#14B8A6', 'icon' => 'helpdesk'],
            ['name' => 'Fiber Optic',               'proficiency' => 75, 'color' => '#8B5CF6', 'icon' => 'fiber'],
            ['name' => 'Troubleshooting',           'proficiency' => 93, 'color' => '#F97316', 'icon' => 'troubleshoot'],
        ];

        $order = 0;
        foreach ($devSkills as $skill) {
            Skill::updateOrCreate(
                ['name' => $skill['name'], 'category' => 'development'],
                array_merge($skill, ['category' => 'development', 'sort_order' => $order++])
            );
        }

        $order = 0;
        foreach ($engSkills as $skill) {
            Skill::updateOrCreate(
                ['name' => $skill['name'], 'category' => 'engineering'],
                array_merge($skill, ['category' => 'engineering', 'sort_order' => $order++])
            );
        }
    }
}
