<?php

const ROUTES = [
    '/' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'home'
	],
    'parcours' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'parcours'
    ],
    'competences' =>[
        'controller' => App\Controller\MainController::class,
        'method' => 'competences'
    ],
    'contact' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'contact'
    ]

];