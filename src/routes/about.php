<?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;
        
        $app->get('/about', function (Request $request, Response $response, $args) {
                return $this->view->render($response, 'about.twig',
                        [
                                'title' => 'EricUlicny.com About'
                        ]);
        });
        
?>