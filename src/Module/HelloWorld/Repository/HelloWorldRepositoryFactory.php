<?php

namespace App\Module\HelloWorld\Repository;

final class HelloWorldRepositoryFactory
{


    private HelloWorldRepositoryInterface $repository;
    private InMemoryHelloWorldRepository $inMemoryRepo;
    private DatabaseHelloWorldRepository $databaseHelloWorldRepository;
    private APIHelloWorldRepository $APIHelloWorldRepository;

    public function __construct(
        InMemoryHelloWorldRepository $inMemoryRepo,
        DatabaseHelloWorldRepository $databaseHelloWorldRepository,
        APIHelloWorldRepository $APIHelloWorldRepository
    ) {
        $this->inMemoryRepo = $inMemoryRepo;
        $this->databaseHelloWorldRepository = $databaseHelloWorldRepository;
        $this->APIHelloWorldRepository = $APIHelloWorldRepository;
    }

    public function createRepository($provider = 'database'): HelloWorldRepositoryInterface
    {

        switch ($provider) {
            case 'database':
                # code.
                $this->repository = $this->databaseHelloWorldRepository;
                break;


            case 'api':
                # code.
                $this->repository = $this->APIHelloWorldRepository;
                break;

            default:
                # code...
                $this->repository = $this->inMemoryRepo;

                break;
        }

        return $this->repository;
    }
}
