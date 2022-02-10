<?php

namespace App\Presentation\Web\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Module\HelloWorld\HelloWorldService;
use Symfony\Component\HttpFoundation\Request;

class AdminHelloWorldController extends AbstractController
{


    private HelloWorldService  $helloWorldService;

    public function __construct(HelloWorldService $useCase)
    {
        $this->helloWorldService = $useCase;
    }

    #[Route('/admin/hello-world', name: 'web_hello_world')]
    public function index(Request $request): Response
    {
        $provider = $request->query->get('provider');
        $response = $this->helloWorldService->sayHelloWorld($provider);
        return $this->render('web_hello_world/index.html.twig', [
            'controller_name' => 'WebHelloWorldController',
            'message' => $response
        ]);
    }
}
