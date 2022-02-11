<?php

namespace App\Presentation\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Module\HelloWorld\HelloWorldService;
use App\Module\Student\UseCase\GetListStudentsInConference;
use Symfony\Component\HttpFoundation\Request;

class APIStudentsController extends AbstractController
{


    private HelloWorldService  $helloWorldService;

    public function __construct(HelloWorldService $useCase)
    {
        $this->helloWorldService = $useCase;
    }

    #[Route('/api/conferences/{conferenceId}/students', name: 'api_students')]
    public function index(Request $request, GetListStudentsInConference $useCase, $conferenceId): Response
    {
        //  $conferenceId = $request->query->get('conference_id');
        $provider = $request->query->get('provider');
        $response = $useCase->setProvider($provider)->setConferenceId($conferenceId)->execute();
        return $this->json($response);
    }
}
