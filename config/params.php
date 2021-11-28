<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [//db = database/tableau multidimensionnelle 
    'db' => [
        'DB_HOST' => 'localhost',//sera changé en creatio
        'DB_PORT' => '3306',//sera changé en creation 
        'DB_NAME' => 'projetpoo',
        'DB_USER' => 'root',//sera changé en creation 
        'DB_PSWD' => '',
    ],
    'app' => [//tableau dans un tableau , tableau multidimensionnelle 
        'name' => 'Mon Projet',
        'projectBaseUrl' => 'http://localhost/MVC'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '\\..\\';// ressort cela fait change directory '\\..\\'
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public\\';//va dans le dossier public
const VIEWS = BASE_DIR . 'views/';//charger nos vues et va dans le dossier views
const MODELS = BASE_DIR . 'src/models/';//va dans Src et rentre dans modeles 
const CONTROLLERS = BASE_DIR . 'src/controllers/';//src et rentre dans controllers
const PHOTO = '../../public/upload/';//pour le dossier photos

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                  => ['AppController', 'index'],
 


];
