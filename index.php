<?php


$pages = [
    'home' => [
        'title' => 'Acceuil',
        'content' => 'Bienvenu sur mon site web.'
    ],
    'product' => [
        'title' => 'Produit',
        'content' => 'Bienvenu sur mon site web.'
    ],
    'contact' => [
        'title' => 'Contact',
        'content' => 'Contactez-nous.'
    ]
];


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (array_key_exists($page, $pages)) {
    $pageTitle = $pages[$page]['title'];
    $pageContent = $pages[$page]['content'];
} else {
    $pageTitle = 'Page Not Found';
    $pageContent = 'The requested page was not found.';
}


include 'template.php';