<?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;

        require '../vendor/autoload.php';

        $app = new \Slim\App;

        //Routes
        require '../src/routes/main.php';
        $app->get('/hello/{name}', function (Request $request, Response $response, $args) {
                return $response->write("Hello " . $args['name']);
        });

       

        $app->run();
?>