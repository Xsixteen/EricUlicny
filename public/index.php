<?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;

        require '../vendor/autoload.php';

        $app = new \Slim\App;

        //Routes
        $app->get('/hello/{name}', function (Request $request, Response $response, $args) {
                return $response->write("Hello " . $args['name']);
        });

        $app->get('/', function (Request $request, Response $response, $args) {
                return $response->write("Main Page!  Hello World");
        });

        $app->run();
?>