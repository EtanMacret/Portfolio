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
    'synthese' =>[
        'controller' => App\Controller\MainController::class,
        'method' => 'synthese'
    ],
    'contact' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'contact'
    ],
    'glpi' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'glpi'
    ]

];