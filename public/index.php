<?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;

        require '../src/vendor/autoload.php';
        require '../src/config.php';
        
        $app = new \Slim\App;
        //Setup Extensions
        $c = new \Slim\Container($configuration);
        $container = $app->getContainer();
        $container['view'] = function($c) {
                $view = new \Slim\Views\Twig('../templates', ['debug' => true]);
                $view->addExtension(
                        new \Slim\Views\TwigExtension(
                                        $c['router'],
                                        $c['request']->getUri())
                );
                
                $view->addExtension( new \Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()) );
                $view->addExtension( new \Twig_Extension_Debug() );
                return $view;
        };

        //Database setup
        $container['db'] = function($c) {
                $db = $c['settings']['db'];
                $dbconn = sprintf('mysql:dbname=%s;host=%s', $db['dbname'], $db['host']);
                $pdo = new PDO($dbconn, $db['username'], $db['password']);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
        };
        
        //Routes
        require '../src/routes/main.php';
        require '../src/routes/panel.php';
        require '../src/routes/projects.php';

        //testing
        $app->get('/hello/{name}', function (Request $request, Response $response, $args) {
                return $response->write("Hello " . $args['name']);
        });
   
        //run!
        $app->run();
?>