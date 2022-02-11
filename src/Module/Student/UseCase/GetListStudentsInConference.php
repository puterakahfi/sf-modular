<?php

namespace App\Module\Student\UseCase;

use App\Module\Student\Repository\StudentRepositoryInterface;
use App\Module\Student\Repository\StudentRepositoryFactory;

final class GetListStudentsInConference
{

    private string $conferenceId;
    private StudentRepositoryInterface $studentRepo;
    private StudentRepositoryFactory $repoFactory;
    private ?string $provider = null;

    public function __construct(StudentRepositoryInterface $studentRepo, StudentRepositoryFactory $repoFactory)
    {
        $this->studentRepo = $studentRepo;
        $this->repoFactory = $repoFactory;
    }

    public function setConferenceId(string $conferenceId)
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }


    public function setProvider(?string $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    public function execute()
    {
        $this->studentRepo = $this->repoFactory->createRepository($this->provider);
        return $this->studentRepo->getStudentsInConference($this->conferenceId);
    }
}
