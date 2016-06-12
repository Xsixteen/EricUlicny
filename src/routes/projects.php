<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
        
    $app->get('/projects', function (Request $request, Response $response, $args) {
            $projectService = new ProjectService(new ProjectMapper($this->db));
            $projects       = $projectService->getAllProjects();

            return $this->view->render($response, 'projects.twig',
                    [
                            'title' => 'EricUlicny.com Projects'
                    ]);
    });

?>