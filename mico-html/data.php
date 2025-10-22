<?php

// data for top header

$contactInfo = [
    [
        'type' => 'phone',
        'icon' => 'fa-phone',
        'text' => '+01 123455678990',
        'link' => 'tel:+01123455678990'
    ],
    [
        'type' => 'email',
        'icon' => 'fa-envelope',
        'text' => 'demo@gmail.com',
        'link' => 'mailto:demo@gmail.com'
    ],
    [
        'type' => 'location',
        'icon' => 'fa-map-marker',
        'text' => 'Location',
        'link' => '#'
    ],
];

//navigation menu left

$navItems = [ 
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'About', 'link' => 'about.php'],
    ['title' => 'Treatment', 'link' => 'treatment.php'],
    ['title' => 'Doctors', 'link' => 'doctor.php'],
    ['title' => 'Testimonial', 'link' => 'testimonial.php'],
    ['title' => 'Contact', 'link' => 'contact.php']
];

//authorisation links in header

$authLinks = [
    [
        'icon' => 'fa-user',
        'text' => 'Login',
        'link' => 'login.php'
    ],
    [
        'icon' => 'fa-user',
        'text' => 'Sign Up',
        'link' => 'signup.php'
    ]
];

//carousel slider section data

$slides = [
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'text' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'button_text' => 'Contact Us',
        'button_link' => 'contact.php'
    ],
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        'image' => 'images/slider-img.jpg',
        'button_text' => 'Contact Us',
        'button_link' => 'contact.php'
    ],
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'text' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
        'image' => 'images/slider-img.jpg',
        'button_text' => 'Contact Us',
        'button_link' => 'contact.php'
    ]
];

//book appointments with doctors

$doctors = [
    'Dr. John Smith',
    'Dr. Emily Johnson',
    'Dr. Michael Brown'
];

// Department options
$departments = [
    'Cardiology',
    'Neurology',
    'Orthopedics'
];

//patients data input fields


  $formFields = [
    [
        'id' => 'inputPatientName',
        'label' => 'Patient Name',
        'type' => 'text',
        'placeholder' => 'Enter your name',
    ],
    [
        'id' => 'inputPhone',
        'label' => 'Phone Number',
        'type' => 'number',
        'placeholder' => 'XXXXXXXXXX',
    ],
    [
        'id' => 'inputSymptoms',
        'label' => 'Symptoms',
        'type' => 'text',
        'placeholder' => 'Describe your symptoms',
    ],
    [
        'id' => 'inputDate',
        'label' => 'Choose Date',
        'type' => 'text',
        'is_date' => true,
    ],
];



$submitButton = [
    'text' => 'Submit Now',
    'class' => 'btn',
];


//treatment section

$treatments = [
    [
        'image' => 'images/t1.png',
        'title' => 'Nephrologist Care',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
        'link' => 'treatment.php'
    ],
    [
        'image' => 'images/t2.png',
        'title' => 'Eye Care',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
        'link' => 'treatment.php'
    ],
    [
        'image' => 'images/t3.png',
        'title' => 'Pediatrician Clinic',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
        'link' => 'treatment.php'
    ],
    [
        'image' => 'images/t4.png',
        'title' => 'Parental Care',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
        'link' => 'treatment.php'
    ]
];


// data for info section
//1. data for address

$address = [
    'contacts' => [
        ['icon' => 'map-marker', 'text' => '123 Medical Street, Tbilisi, Georgia', 'link' => '#'],
        ['icon' => 'phone', 'text' => 'Call +01 1234567890', 'link' => 'tel:+011234567890'],
        ['icon' => 'envelope', 'text' => 'demo@gmail.com', 'link' => 'mailto:demo@gmail.com'],
    ],
    'social' => [
        ['icon' => 'facebook', 'link' => '#'],
        ['icon' => 'twitter', 'link' => '#'],
        ['icon' => 'linkedin', 'link' => '#'],
        ['icon' => 'instagram', 'link' => '#']
    ]
];

// 2. Useful links array
$useful_links = [
    ['name' => 'Home', 'href' => 'index.php', 'active' => true],
    ['name' => 'About', 'href' => 'about.php'],
    ['name' => 'Treatment', 'href' => 'treatment.php'],
    ['name' => 'Doctors', 'href' => 'doctor.php'],
    ['name' => 'Testimonial', 'href' => 'testimonial.php'],
    ['name' => 'Contact Us', 'href' => 'contact.php']
];

// 3. Posts and News array
$posts = [
    [
        'title' => 'Latest Posts',
        'items' => [
            ['image' => 'images/post1.jpg', 'title' => 'Normal distribution'],
            ['image' => 'images/post2.jpg', 'title' => 'New healthcare trends']
        ]
    ],
    [
        'title' => 'News',
        'items' => [
            ['image' => 'images/post3.jpg', 'title' => 'Upcoming event'],
            ['image' => 'images/post4.png', 'title' => 'Medical research update']
        ]
    ]
];
  
