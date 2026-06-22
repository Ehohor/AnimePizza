<?php

$data = [
    'logo' => [
        'image' => 'images/logo.png',
        'link' => '/'
    ],
    'links' => [
        [
            'title' => 'Home',
            'href' => '/',
            'anchor' => false
        ],
        [
            'title' => 'About',
            'href' => '#about',
            'anchor' => true
        ],
        [
            'title' => 'Pizza',
            'href' => '#pizza',
            'anchor' => true
        ],
        [
            'title' => 'Review',
            'href' => '#review',
            'anchor' => true
        ],
        [
            'title' => 'Blog',
            'href' => '#blog',
            'anchor' => true
        ],
        [
            'title' => 'Contact us',
            'href' => '#contactus',
            'anchor' => true
        ]
    ]
];

echo '<pre>' .print_r(json_encode($data), return: true). '</pre>';
echo '<pre>' .print_r($data, return: true). '</pre>';