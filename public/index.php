<?php

use App\Kernel;

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__) . '/vendor/autoload.php';

// Charge manuellement les variables d'environnement
(new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');

// PATCH CORS manuel
$origin = $_ENV['APP_DEBUG'] === '1'
    ? ($_SERVER['HTTP_ORIGIN'] ?? '*')
    : 'https://karabs-front.vercel.app';

header('Access-Control-Allow-Origin: ' . rtrim($origin, '/'));
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Authorization, withCredentials');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Credentials: true');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Démarre Symfony
$kernel = new Kernel($_ENV['APP_ENV'], (bool) $_ENV['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);


// require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// return function (array $context) {
//     return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
// };
