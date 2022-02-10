<?php

namespace App\Presentation\API\HelloWorld;

use App\Module\HelloWorld\HelloWorldService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class APIHelloWorldController extends AbstractController
{


    private HelloWorldService  $helloWorldService;

    public function __construct(HelloWorldService $useCase)
    {
        $this->helloWorldService = $useCase;
    }

    #[Route('/api/hello-worlds', name: 'api_hello_world')]
    public function index(Request $request): Response
    {
        $provider = $request->query->get('provider');
        $response = $this->helloWorldService->sayHelloWorld($provider);
        return $this->json($response);
    }
}
