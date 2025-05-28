<?php

use App\Kernel;

// use Symfony\Component\Dotenv\Dotenv;
// use Symfony\Component\HttpFoundation\Request;

// require dirname(__DIR__) . '/vendor/autoload.php';

// // Charge manuellement les variables d'environnement
// (new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');

// // PATCH CORS manuel
// $allowedOrigins = [
//     'https://karabs-front.vercel.app',
//     'http://localhost:8100',
//     'http://127.0.0.1:8100',
// ];
// $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
// if (in_array($origin, $allowedOrigins)) {
//     header("Access-Control-Allow-Origin: $origin");
//     header("Access-Control-Allow-Credentials: true");
// }
// header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Authorization');
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

// if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
//     http_response_code(200);
//     exit();
// }


// // Démarre Symfony
// $kernel = new Kernel($_ENV['APP_ENV'], (bool) $_ENV['APP_DEBUG']);
// $request = Request::createFromGlobals();
// $response = $kernel->handle($request);
// $response->send();
// $kernel->terminate($request, $response);


require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
