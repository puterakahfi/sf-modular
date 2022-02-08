<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Module\HelloWorld\HelloWorldService;

class AdminHelloWorldController extends AbstractController
{


    private HelloWorldService  $helloWorldService;

    public function __construct(HelloWorldService $useCase)
    {
        $this->helloWorldService = $useCase;
    }

    #[Route('/admin/hello-world', name: 'web_hello_world')]
    public function index(): Response
    {
        $response = $this->helloWorldService->sayHelloWorld();
        return $this->render('web_hello_world/index.html.twig', [
            'controller_name' => 'WebHelloWorldController',
            'message' => $response
        ]);
    }
}
