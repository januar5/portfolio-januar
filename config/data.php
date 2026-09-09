<?php
// config/data.php

$skills = [
    'TECHNICAL SKILLS' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel', 'Git', 'GitHub'],
    'UI/UX DESIGN' => ['Figma', 'Wireframing', 'Prototyping', 'User Flow', 'UI Design', 'UX Design', 'Design System'],
    'AI / COMPUTER VISION' => ['Python', 'PyTorch', 'CNN', 'EfficientNet', 'Grad-CAM++', 'OpenCV'],
    'DEPLOYMENT' => ['cPanel', 'Shared Hosting', 'VPS', 'Git', 'GitHub', 'Domain & Hosting', 'Basic Server Configuration']
];

$experiences = [
    [
        'position' => 'UI/UX Designer Intern',
        'company' => 'PT Velio Mobili',
        'date' => '[SEPTEMBER 2025] - [FEBRUARY 2026]',
        'description' => 'Melaksanakan kegiatan magang di bidang UI/UX dengan membantu merancang dan mengembangkan tampilan antarmuka aplikasi/website yang berorientasi pada kebutuhan pengguna. Terlibat dalam proses pembuatan wireframe, desain antarmuka, penyusunan user flow, serta evaluasi dan perbaikan desain untuk meningkatkan pengalaman pengguna.',
        'tools' => ['Figma', 'UI Design', 'UX Design', 'Wireframing', 'Prototyping', 'User Flow'],
        'images' => [
            'assets/images/mobile.png',
            'assets/images/mobile2.png',
            'assets/images/mobile3.png',
            'assets/images/mobile4.png'
        ]
    ]
];

$uiux_projects = [
    [
        'title' => 'Mobile App Design',
        'category' => 'Mobile App',
        'description' => 'Designing an intuitive mobile application interface focusing on user experience.',
        'tools' => ['Figma'],
        'year' => '2024',
        'image' => 'assets/images/uiux/project-1.png'
    ],
    [
        'title' => 'Website UI Design',
        'category' => 'Website',
        'description' => 'Modern and clean website interface design for corporate clients.',
        'tools' => ['Figma'],
        'year' => '2024',
        'image' => 'assets/images/uiux/project-2.png'
    ],
    [
        'title' => 'Dashboard Design',
        'category' => 'Dashboard',
        'description' => 'Comprehensive analytical dashboard with clear data visualization.',
        'tools' => ['Figma'],
        'year' => '2025',
        'image' => 'assets/images/uiux/project-3.png'
    ]
];

$web_projects = [
    [
        'title' => 'Sistem Informasi Inventory Gudang ATK',
        'description' => 'Sistem informasi berbasis web untuk membantu pengelolaan data barang, kategori, stok, dan dashboard inventory.',
        'role' => 'Full Stack Developer',
        'tech_stack' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
        'deployment' => '[Hostinger]',
        'image' => 'assets/images/atk komplit.jpeg',
        'live_url' => '[URL LIVE WEBSITE]',
        'github_url' => '[URL GITHUB]',
        'features' => ['Authentication', 'Dashboard', 'Master Data Category', 'CRUD Barang', 'Stock Management', 'Low Stock Notification', 'Database Management']
    ],
    [
        'title' => 'AI Tea Leaf Classification Web Application',
        'description' => 'Aplikasi web untuk melakukan klasifikasi kelayakan daun teh menggunakan model deep learning dan visualisasi Grad-CAM++.',
        'role' => 'AI & Web Developer',
        'tech_stack' => ['Python', 'PyTorch', 'EfficientNet-B0', 'Grad-CAM++', 'OpenCV', 'FastAPI', 'Next.js'],
        'deployment' => '[Hostinger]',
        'image' => 'assets/images/ai.png',
        'live_url' => '[URL LIVE WEBSITE]',
        'github_url' => '[URL GITHUB]',
        'features' => ['Upload Image', 'Image Preprocessing', 'Image Classification', 'Confidence Score', 'Grad-CAM++ Visualization', 'Result Visualization']
    ],
    [
        'title' => 'Sistem Jumantik Pondok Kopi',
        'description' => 'Website Sistem Jumantik Pondok Kopi untuk membantu pengelolaan informasi dan kegiatan pemantauan jentik nyamuk di lingkungan masyarakat.',
        'role' => 'Project Manager & Programmer',
        'tech_stack' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
        'deployment' => '[Hostinger]',
        'image' => 'assets/images/jumantik komplit.jpeg',
        'live_url' => '[URL LIVE WEBSITE]',
        'github_url' => '[URL GITHUB]',
        'features' => ['Dashboard', 'Data Management', 'Information Management', 'Responsive Web Design']
    ]
];

$ai_projects = [
    [
        'title' => 'Klasifikasi Kelayakan Daun Teh',
        'description' => 'Sistem klasifikasi citra untuk menentukan kelayakan daun teh menggunakan EfficientNet-B0 dengan Grad-CAM++ sebagai metode visualisasi untuk membantu memahami area citra yang memengaruhi hasil prediksi.',
        'tech_stack' => ['Python', 'PyTorch', 'CNN', 'EfficientNet-B0', 'Grad-CAM++', 'OpenCV', 'FastAPI'],
        'metrics' => [
            'Accuracy' => '98,40%',
            'Precision' => '99,46%',
            'Recall' => '98,13%',
            'F1-Score' => '98,79%'
        ],
        'image' => 'assets/images/web/project-3.png'
    ]
];

$education = [
    [
        'program' => 'Sistem Informasi',
        'institution' => 'UNIVERSITAS GUNADARMA',
        'date' => '[2022] - [2026]',
        'description' => 'Memiliki fokus pembelajaran pada analisis dan pengembangan sistem informasi, pemrograman, basis data, UI/UX Design, pengembangan aplikasi berbasis web, serta teknologi kecerdasan buatan.',
        'achievements' => [
            'Academic Project: Klasifikasi Kelayakan Daun Teh menggunakan EfficientNet-B0 dan Grad-CAM++.',
            'Academic Project: Sistem Informasi Inventory Gudang ATK berbasis web menggunakan Laravel dan MySQL.'
        ],
        'images' => [
            'assets/images/daun.png',
            'assets/images/atk.png'

        ]
    ]
];

$activities = [
    [
        'role' => 'Project Manager & Programmer',
        'organization' => 'Perancangan Pemrograman Sistem Informasi',
        'date' => '[OKTOBER 2025] - [DESEMBER 2025]',
        'description' => 'Memimpin tim sekaligus berperan sebagai Programmer dalam pengembangan website Jumantik melalui proyek PPSI. Bertanggung jawab atas perencanaan, koordinasi tim, pembagian tugas, pemantauan progres, serta implementasi dan pengembangan fitur website.',
        'skills' => ['Leadership', 'Communication', 'Teamwork', 'Discipline', 'Responsibility'],
        'images' => [
            'assets/images/jumantik.jpeg',
            'assets/images/jumantik2.jpeg',
            'assets/images/jumantik3.png',
            'assets/images/jumantik4.png',
        ]
    ]
];

$services = [
    [
        'title' => 'UI/UX Design',
        'description' => 'Designing clean, intuitive, and user-centered digital interfaces.',
        'icon' => 'lucide-pen-tool',
        'image' => 'assets/images/what-i-do-uiux.jpg'
    ],
    [
        'title' => 'Web Development',
        'description' => 'Building responsive and functional websites and web applications.',
        'icon' => 'lucide-code',
        'image' => 'assets/images/what-i-do-web-development.jpg'
    ],
    [
        'title' => 'Web Deployment',
        'description' => 'Deploying websites and applications to hosting and production environments.',
        'icon' => 'lucide-server',
        'image' => 'assets/images/what-i-do-deployment.jpg'
    ],
    [
        'title' => 'AI & Computer Vision',
        'description' => 'Exploring image classification and computer vision solutions.',
        'icon' => 'lucide-cpu',
        'image' => 'assets/images/what-i-do-ai.jpg'
    ]
];
?>
