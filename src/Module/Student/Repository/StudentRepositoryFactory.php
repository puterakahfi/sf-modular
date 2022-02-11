<?php

namespace App\Module\Student\Repository;

use App\Module\Student\Repository\APIStudentRepository;
use App\Module\Student\Repository\DBStudentRepository;

final class StudentRepositoryFactory
{


    private DBStudentRepository $databaseRepo;
    private APIStudentRepository $APIRepo;
    private StudentRepositoryInterface $defaultRepo;


    public function __construct(
        DBStudentRepository $databaseRepo,
        APIStudentRepository $APIRepo,
        StudentRepositoryInterface $defaultRepo
    ) {
        $this->databaseRepo = $databaseRepo;
        $this->APIRepo = $APIRepo;
        $this->defaultRepo = $defaultRepo;
    }

    public function createRepository($provider = 'database'): StudentRepositoryInterface
    {

        switch ($provider) {
            case 'database':
                # code.
                $this->repository = $this->databaseRepo;
                break;


            case 'api':
                # code.
                $this->repository = $this->APIRepo;
                break;

            default:
                # code...
                #throw new \Exception("Provider not supported : $provider", 1);
                $this->repository = $this->defaultRepo;

                break;
        }

        return $this->repository;
    }
}
