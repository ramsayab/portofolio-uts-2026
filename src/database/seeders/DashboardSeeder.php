<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dashboard::firstOrCreate(
            ['key' => 'home'],
            [
                'meta_title' => 'Ramsay Abelson - Engineer & Developer',
                'meta_description' => 'Engineer focused on building practical, scalable software and data solutions.',
                'sapaan' => "Hello, I'm Ramsay Abelson",
                'skill_singkat' => "I design and build practical\nsoftware solutions that\ndeliver real impact.",
                'hero_scroll_text' => 'Scroll for more',
                'about_label' => 'About Me',
                'about_me' => 'Engineer berfokus pada solusi perangkat lunak yang efektif.',
                'deskripsi_about_me' => 'Saya membangun solusi yang menyelesaikan masalah nyata — dari desain sistem sampai implementasi dan deployment. Pendekatan saya pragmatis: solusi harus dapat dioperasikan, mudah dipelihara, dan memberikan nilai.',
                'about_paragraph_two' => 'Saya suka bekerja lintas domain untuk menerjemahkan kebutuhan menjadi produk yang dapat dipakai oleh pengguna.',
                'nama_tech_stack' => 'Tech stack yang saya kuasai.',
                'tech_stack_intro' => 'Tech Stack',
                'tech_stack_groups' => [
                    [
                        'title' => 'Core Tech',
                        'skills' => [
                            [
                                'name' => 'Python',
                                'icon' => 'https://cdn.simpleicons.org/python/3776AB',
                                'alt' => 'Python',
                            ],
                            [
                                'name' => 'C++',
                                'icon' => 'https://cdn.simpleicons.org/cplusplus/00599C',
                                'alt' => 'C++',
                            ],
                            [
                                'name' => 'Java',
                                'icon' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/openjdk.svg',
                                'alt' => 'Java',
                            ],
                            [
                                'name' => 'PHP',
                                'icon' => 'https://cdn.simpleicons.org/php/777BB4',
                                'alt' => 'PHP',
                            ],
                            [
                                'name' => 'Laravel',
                                'icon' => 'https://cdn.simpleicons.org/laravel/FF2D20',
                                'alt' => 'Laravel',
                            ],
                            [
                                'name' => 'Jupyter',
                                'icon' => 'https://cdn.simpleicons.org/jupyter/F37626',
                                'alt' => 'Jupyter',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Machine Learning & Deep Learning',
                        'skills' => [
                            [
                                'name' => 'PyTorch',
                                'icon' => 'https://cdn.simpleicons.org/pytorch/EE4C2C',
                                'alt' => 'PyTorch',
                            ],
                            [
                                'name' => 'TensorFlow',
                                'icon' => 'https://cdn.simpleicons.org/tensorflow/FF6F00',
                                'alt' => 'TensorFlow',
                            ],
                            [
                                'name' => 'scikit-learn',
                                'icon' => 'https://cdn.simpleicons.org/scikitlearn/F7931E',
                                'alt' => 'scikit-learn',
                            ],
                            [
                                'name' => 'pandas',
                                'icon' => 'https://cdn.simpleicons.org/pandas/150458',
                                'alt' => 'pandas',
                            ],
                            [
                                'name' => 'NumPy',
                                'icon' => 'https://cdn.simpleicons.org/numpy/013243',
                                'alt' => 'NumPy',
                            ],
                            [
                                'name' => 'OpenCV',
                                'icon' => 'https://cdn.simpleicons.org/opencv/5C3EE8',
                                'alt' => 'OpenCV',
                            ],
                            [
                                'name' => 'Keras',
                                'icon' => 'https://cdn.simpleicons.org/keras/D00000',
                                'alt' => 'Keras',
                            ],
                            [
                                'name' => 'XGBoost',
                                'icon' => 'https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/xgboost.svg',
                                'alt' => 'XGBoost',
                                'icon_class' => 'filter: invert(1);',
                            ],
                            [
                                'name' => 'Matplotlib',
                                'icon' => 'https://upload.wikimedia.org/wikipedia/commons/0/01/Created_with_Matplotlib-logo.svg',
                                'alt' => 'Matplotlib',
                            ],
                            [
                                'name' => 'Seaborn',
                                'icon' => 'https://raw.githubusercontent.com/mwaskom/seaborn/master/doc/_static/logo-wide-lightbg.svg',
                                'alt' => 'Seaborn',
                            ],
                        ],
                    ],
                ],
                'tech_stack_cta_text' => 'Ingin melihat project dan pengalaman saya dalam action?',
                'tech_stack_cta_button_label' => '→ Lihat Project Saya ←',
                'tech_stack_cta_button_url' => '/portofolio',
                'img_src_link' => 'images/profile.jpg',
                'profile_image_alt' => 'Ramsay Abelson',
                'contact_title' => 'Hubungi saya untuk diskusi proyek.',
                'contact_description' => 'Kalau kamu butuh bantuan data science, machine learning, atau analisis data, saya siap bantu.',
                'contact_direct_label' => 'Atau hubungi saya langsung:',
                'contact_whatsapp_url' => 'https://wa.me/6283897376682',
                'contact_email_url' => 'mailto:ramsayabelson150@gmail.com',
                'contact_whatsapp_label' => 'WhatsApp',
                'contact_email_label' => 'Email',
            ]
        );
    }
}
