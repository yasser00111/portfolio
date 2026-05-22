<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name'       => 'Budi Santoso',
                'position'   => 'Project Manager',
                'company'    => 'PT Teknologi Nusantara',
                'content'    => 'Yasser adalah developer yang sangat profesional dan berdedikasi. Dashboard monitoring yang dibuatnya sangat membantu tim kami dalam memantau performa sistem secara real-time. Kerjanya cepat, rapi, dan selalu komunikatif.',
                'rating'     => 5,
                'sort_order' => 0,
            ],
            [
                'name'       => 'Siti Rahma',
                'position'   => 'IT Manager',
                'company'    => 'PT Maju Bersama',
                'content'    => 'Sangat terkesan dengan kemampuan Yasser dalam mengembangkan sistem ERP kami. Beliau memahami kebutuhan bisnis dengan baik dan memberikan solusi teknis yang tepat. Sistem yang dibangun sangat stabil dan mudah digunakan.',
                'rating'     => 5,
                'sort_order' => 1,
            ],
            [
                'name'       => 'Ahmad Fauzi',
                'position'   => 'Network Engineer',
                'company'    => 'Telkom Regional',
                'content'    => 'Sebagai rekan kerja di Telkom, Yasser adalah sosok yang sangat handal dalam menangani troubleshooting jaringan. Respon cepat, analisis tepat, dan selalu memberikan solusi permanen bukan sekadar sementara.',
                'rating'     => 5,
                'sort_order' => 2,
            ],
            [
                'name'       => 'Dewi Lestari',
                'position'   => 'CEO',
                'company'    => 'CV Digital Kreatif',
                'content'    => 'Website company profile yang Yasser buat untuk bisnis kami sangat memuaskan! Desainnya modern, loading cepat, dan mudah dikelola. Tim kami bisa update konten sendiri tanpa perlu pengetahuan teknis.',
                'rating'     => 5,
                'sort_order' => 3,
            ],
            [
                'name'       => 'Rizky Pratama',
                'position'   => 'Head of Operations',
                'company'    => 'PT Infrastruktur Indonesia',
                'content'    => 'Sistem helpdesk ticketing yang dibangun Yasser sangat mengubah cara kerja tim support kami. SLA menjadi lebih terukur, eskalasi lebih terstruktur, dan pelanggan pun lebih puas dengan respons yang cepat.',
                'rating'     => 4,
                'sort_order' => 4,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(
                ['name' => $t['name'], 'company' => $t['company']],
                $t
            );
        }
    }
}
