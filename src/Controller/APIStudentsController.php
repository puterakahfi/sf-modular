<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Module\HelloWorld\HelloWorldService;
use Symfony\Component\HttpFoundation\Request;

class APIStudentsController extends AbstractController
{


    private HelloWorldService  $helloWorldService;

    public function __construct(HelloWorldService $useCase)
    {
        $this->helloWorldService = $useCase;
    }

    #[Route('/api/students', name: 'api_students')]
    public function index(Request $request): Response
    {
        $provider = $request->query->get('provider');
        $response = $this->helloWorldService->sayHelloWorld($provider);
        return $this->json($response);
    }
}
