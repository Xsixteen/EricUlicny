<?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;

        require '../vendor/autoload.php';

        $app = new \Slim\App;
        //Setup Extensions
        $container = $app->getContainer();
        $container['view'] = function($c) {
                $view = new \Slim\Views\Twig('../templates', ['debug' => true]);
                $view->addExtension(
                new \Slim\Views\TwigExtension(
                        $c['router']
                ,$c['request']->getUri()
                )
                );
                $view->addExtension( new \Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()) );
                $view->addExtension( new \Twig_Extension_Debug() );
                return $view;
        };
        
        //Routes
        require '../src/routes/main.php';
        
        //testing
        $app->get('/hello/{name}', function (Request $request, Response $response, $args) {
                return $response->write("Hello " . $args['name']);
        });

       
        //run!
        $app->run();
?>