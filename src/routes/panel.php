<?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;
        
        $app->get('/panel', function (Request $request, Response $response, $args) {
                return $this->view->render($response, 'admin/panel.twig',
                        [
                                'title' => 'EricUlicny.com Dashboard'
                        ]);
        });
        
?>