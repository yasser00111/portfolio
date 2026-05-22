<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name',          'value' => 'Muhammad Yasser - Portfolio',         'type' => 'text'],
            ['key' => 'site_tagline',        'value' => 'Full Stack Web Developer & EOS Telkom','type' => 'text'],
            ['key' => 'owner_name',          'value' => 'Muhammad Yasser',                     'type' => 'text'],
            ['key' => 'owner_email',         'value' => 'yasser@yasser.dev',                   'type' => 'text'],
            ['key' => 'owner_phone',         'value' => '+62 812-XXXX-XXXX',                   'type' => 'text'],
            ['key' => 'owner_location',      'value' => 'Indonesia',                           'type' => 'text'],
            ['key' => 'github_url',          'value' => 'https://github.com/yasser00111',      'type' => 'text'],
            ['key' => 'linkedin_url',        'value' => 'https://linkedin.com/in/muhammad-yasser','type' => 'text'],
            ['key' => 'whatsapp_number',     'value' => '6281200000000',                       'type' => 'text'],
            ['key' => 'stat_projects',       'value' => '25+',                                 'type' => 'text'],
            ['key' => 'stat_years',          'value' => '5+',                                  'type' => 'text'],
            ['key' => 'stat_infrastructure', 'value' => '50+',                                 'type' => 'text'],
            ['key' => 'stat_clients',        'value' => '30+',                                 'type' => 'text'],
            ['key' => 'meta_description',    'value' => 'Muhammad Yasser - Full Stack Web Developer & Engineering On Site Telkom. Berpengalaman dalam pengembangan aplikasi web modern dan operational engineering.',  'type' => 'text'],
            ['key' => 'meta_keywords',       'value' => 'Muhammad Yasser, Full Stack Developer, Laravel, EOS Telkom, Web Developer, Network Engineer, PHP Developer',  'type' => 'text'],
        ];

        foreach ($settings as $s) {
            SiteSetting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
