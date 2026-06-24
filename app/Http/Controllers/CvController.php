<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{
    private function data()
    {
        return [
            'name'     => 'Achmad Rendra Mustofa',
            'title'    => 'Fullstack Web Developer',
            'subtitle' => 'PHP / Laravel + Vue.js',
            'email'    => 'rendra.abe@gmail.com',
            'phone'    => '+62 813 2007 0863',
            'location' => 'Yogyakarta, Indonesia (GMT+7)',
            'github'   => 'github.com/rendraabe-cmd',
            'githubUrl'=> 'https://github.com/rendraabe-cmd',
            'website'  => 'portfolio-website-r9h4.onrender.com',
            'websiteUrl' => 'https://portfolio-website-r9h4.onrender.com',
            'summary'  => "Self-driven Fullstack Web Developer with hands-on experience building and deploying production-ready web applications using PHP/Laravel 11 and Vue.js 3. Proficient in REST API development, Docker containerization, cloud deployment, and database management. All projects are publicly accessible — live demos and source code on GitHub. Actively seeking remote opportunities to contribute to international teams.",

            'skills' => [
                'Backend'  => ['PHP 8.4', 'Laravel 11', 'CodeIgniter', 'REST API', 'Sanctum Auth', 'Eloquent ORM'],
                'Frontend' => ['Vue.js 3', 'React', 'JavaScript', 'Tailwind CSS', 'Alpine.js', 'Pinia', 'Vite'],
                'Database' => ['MySQL', 'PostgreSQL', 'SQLite', 'Migrations'],
                'DevOps'   => ['Docker', 'Nginx', 'PHP-FPM', 'Supervisord', 'Git/GitHub', 'Render.com', 'Aiven Cloud'],
                'Tools'    => ['VS Code', 'Bruno API', 'Resend API'],
            ],

            'projects' => [
                [
                    'title' => 'Mini POS — Fullstack Point of Sale System',
                    'date'  => '2024 — Present',
                    'stack' => 'Laravel 11 + Vue.js 3 + Pinia + Tailwind + Docker + SQLite',
                    'points' => [
                        'Built complete decoupled architecture: Laravel API backend + Vue.js 3 SPA frontend, deployed separately to production.',
                        'Implemented role-based access control (Admin/Kasir), real-time cart management, transaction history, and receipt generation.',
                        'Configured CORS, Bearer Token authentication via Sanctum, and SQLite with auto-migrate/seed on deployment.',
                    ],
                    'links' => [
                        ['label' => 'Live Demo', 'url' => 'https://mini-pos-frontend-808z.onrender.com'],
                        ['label' => 'Backend Repo', 'url' => 'https://github.com/rendraabe-cmd/mini-pos-backend'],
                        ['label' => 'Frontend Repo', 'url' => 'https://github.com/rendraabe-cmd/mini-pos-frontend'],
                    ],
                ],
                [
                    'title' => 'Task Management REST API',
                    'date'  => '2024',
                    'stack' => 'Laravel 11 + MySQL + Sanctum + Docker + Aiven Cloud',
                    'points' => [
                        'Developed production-ready RESTful API with 9+ endpoints, token-based authentication, and full CRUD operations.',
                        'Implemented advanced filtering, search, pagination, and SSL-secured cloud database connection.',
                        'Containerized with Docker and configured CI/CD pipeline via GitHub auto-deploy to Render.com.',
                    ],
                    'links' => [
                        ['label' => 'Live API', 'url' => 'https://task-management-api-6390.onrender.com'],
                        ['label' => 'Source Code', 'url' => 'https://github.com/rendraabe-cmd/task-management-api'],
                    ],
                ],
                [
                    'title' => 'Portfolio Website + Contact Form',
                    'date'  => '2024',
                    'stack' => 'Laravel 11 + Tailwind + Alpine.js + Resend API + Docker',
                    'points' => [
                        'Built professional portfolio with dark/light mode, smooth animations, and responsive design.',
                        'Integrated Resend API for fully functional contact form with email delivery and validation.',
                        'Dockerized and deployed to cloud with automated build pipeline.',
                    ],
                    'links' => [
                        ['label' => 'Live Site', 'url' => 'https://portfolio-website-r9h4.onrender.com'],
                        ['label' => 'Source Code', 'url' => 'https://github.com/rendraabe-cmd/portfolio-website'],
                    ],
                ],
            ],

            'experience' => [
                [
                    'role'    => 'Fullstack Web Developer',
                    'company' => 'Freelance / Self-Employed — Remote',
                    'date'    => '2022 — Present',
                    'points'  => [
                        'Designed and developed multiple production web applications using Laravel and Vue.js, all deployed to live cloud infrastructure.',
                        'Implemented end-to-end authentication systems (Laravel Sanctum, Bearer Tokens) with proper CORS and security configuration.',
                        'Managed full deployment workflow: Docker containerization, Nginx + PHP-FPM + Supervisord, GitHub auto-deploy, and cloud database integration.',
                        'Wrote clean, maintainable code following REST API best practices: validation, error handling, pagination, and proper HTTP status codes.',
                        'Self-taught modern frontend stack (Vue.js 3, Pinia, Vite, Tailwind) and successfully shipped fullstack SPAs to production.',
                    ],
                ],
            ],

            'education' => [
                [
                    'degree' => 'Diploma (D3) — Informatics Engineering',
                    'school' => 'Universitas Amikom Yogyakarta',
                    'date'   => '2015 — 2018',
                ],
            ],

            'languages' => [
                'English — Professional Working',
                'Bahasa Indonesia — Native',
            ],
        ];
    }

    public function index()
    {
        return view('cv', $this->data());
    }

    public function download()
    {
        $pdf = Pdf::loadView('cv-pdf', $this->data())->setPaper('a4', 'portrait');
        return $pdf->download('Rendra-Mustofa-CV.pdf');
    }
}
