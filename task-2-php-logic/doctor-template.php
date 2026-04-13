<?php

// ============================================
// Helper function (simulates WordPress esc_html)
// DO NOT MODIFY THIS FUNCTION
// ============================================
if (!function_exists('esc_html')) {
    function esc_html($text) {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('esc_url')) {
    function esc_url($url) {
        return filter_var($url, FILTER_SANITIZE_URL);
    }
}

if (!function_exists('esc_attr')) {
    function esc_attr($text) {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}

// ============================================
// DOCTOR DATA (DO NOT MODIFY THIS ARRAY)
// This simulates ACF repeater field data
// ============================================
$doctors = [
    [
        'name'        => 'Dr. Sarah Mitchell',
        'photo_url'   => 'https://placehold.co/640x565',
        'specialty'   => 'Orthodontics & Invisalign',
        'experience'  => '15+ Years',
        'bio'         => 'Dr. Mitchell brings over 15 years of experience in orthodontic care, specializing in Invisalign and modern bracket systems. She is passionate about creating beautiful, healthy smiles for patients of all ages.',
        'credentials' => [
            'DDS — University of Michigan School of Dentistry',
            'Board Certified Orthodontist',
            'Invisalign Diamond Provider',
            'Member, American Association of Orthodontists',
        ],
    ],
    [
        'name'        => 'Dr. James Park',
        'photo_url'   => 'https://placehold.co/640x565',
        'specialty'   => 'Cosmetic Dentistry',
        'experience'  => '12 Years',
        'bio'         => 'Dr. Park specializes in cosmetic dentistry, offering services from veneers to full smile makeovers. His artistic approach ensures every patient leaves with a natural, confident smile.',
        'credentials' => [
            'DMD — Harvard School of Dental Medicine',
            'Fellow, American Academy of Cosmetic Dentistry',
            'Certified in Advanced Veneer Techniques',
        ],
    ],
    [
        'name'        => "Dr. Maria O'Brien",
        'photo_url'   => 'https://placehold.co/640x565',
        'specialty'   => 'Pediatric Dentistry',
        'experience'  => '8 Years',
        'bio'         => "Dr. O'Brien loves working with children and teens. She creates a fun, anxiety-free environment and focuses on preventive care and early orthodontic assessment.",
        'credentials' => [
            'DDS — Columbia University College of Dental Medicine',
            'Board Certified Pediatric Dentist',
            'Member, American Academy of Pediatric Dentistry',
            'Certified in Sedation Dentistry',
        ],
    ],
    [
        'name'        => 'Dr. Ahmed Hassan',
        'photo_url'   => 'https://placehold.co/640x565',
        'specialty'   => 'Oral Surgery & Implants',
        'experience'  => '20 Years',
        'bio'         => 'Dr. Hassan is a seasoned oral surgeon with expertise in dental implants, wisdom teeth extraction, and corrective jaw surgery. He uses the latest 3D imaging technology for precise treatment planning.',
        'credentials' => [
            'BDS, MDS — University of Dhaka',
            'Fellowship in Oral & Maxillofacial Surgery',
            'Nobel Biocare Certified Implantologist',
            'Member, International Association of Oral Surgeons',
            'Published researcher — 12 peer-reviewed papers',
        ],
    ],
];

// ============================================
// YOUR CODE GOES BELOW
// Loop through $doctors and output HTML
// ============================================
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors</title>
    <style>
        /* Add basic styling if you want — this is optional */
        body { font-family: 'Lato', sans-serif; max-width: 1200px; margin: 0 auto; padding: 20px; }
    </style>
</head>
<body>

<section class="doctors-section">

    <h2>Meet Our Doctors</h2>

    <div class="doctors-grid">
        <?php foreach ($doctors as $doctor) : ?>
            <div class="doctor-card">
                <img src="<?= esc_url($doctor['photo_url']) ?>" alt="<?= esc_attr($doctor['name']) ?>">
                <div class="doctor-card__body">
                    <h3><?= esc_html($doctor['name']) ?></h3>
                    <p class="specialty"><?= esc_html($doctor['specialty']) ?></p>
                    <p class="experience"><?= esc_html($doctor['experience']) ?></p>
                    <p class="bio"><?= esc_html($doctor['bio']) ?></p>
                    <ul class="credentials">
                        <?php foreach ($doctor['credentials'] as $credential) : ?>
                            <li><?= esc_html($credential) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>

</body>
</html>
