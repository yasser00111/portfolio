<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        $certs = [
            [
                'name'         => 'Mikrotik Certified Network Associate (MTCNA)',
                'issuer'       => 'MikroTik',
                'issued_date'  => '2022-06-15',
                'expiry_date'  => '2025-06-15',
                'sort_order'   => 0,
            ],
            [
                'name'         => 'Network Infrastructure Support',
                'issuer'       => 'PT Telkom Indonesia',
                'issued_date'  => '2022-03-01',
                'expiry_date'  => null,
                'sort_order'   => 1,
            ],
            [
                'name'         => 'Laravel Web Development',
                'issuer'       => 'Udemy / Online Course',
                'issued_date'  => '2021-09-20',
                'expiry_date'  => null,
                'sort_order'   => 2,
            ],
            [
                'name'         => 'Linux System Administration',
                'issuer'       => 'Linux Foundation',
                'issued_date'  => '2021-05-10',
                'expiry_date'  => null,
                'sort_order'   => 3,
            ],
        ];

        foreach ($certs as $cert) {
            Certification::updateOrCreate(
                ['name' => $cert['name'], 'issuer' => $cert['issuer']],
                $cert
            );
        }
    }
}
