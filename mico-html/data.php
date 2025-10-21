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
    ['title' => 'Home', 'link' => 'index.php', 'active' => true],
    ['title' => 'About', 'link' => 'about.php', 'active' => false],
    ['title' => 'Treatment', 'link' => 'treatment.php', 'active' => false],
    ['title' => 'Doctors', 'link' => 'doctor.php', 'active' => false],
    ['title' => 'Testimonial', 'link' => 'testimonial.php', 'active' => false],
    ['title' => 'Contact Us', 'link' => 'contact.php', 'active' => false],
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
        'button_link' => '#'
    ],
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        'image' => 'images/slider-img.jpg',
        'button_text' => 'Contact Us',
        'button_link' => '#'
    ],
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'text' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
        'image' => 'images/slider-img.jpg',
        'button_text' => 'Contact Us',
        'button_link' => '#'
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