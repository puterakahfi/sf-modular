<?php

namespace App\Module\HelloWorld;

use App\Module\HelloWorld\Repository\HelloWorldRepositoryFactory;
use App\Module\HelloWorld\Repository\HelloWorldRepositoryInterface;
use ProxyManager\ProxyGenerator\ValueHolder\MethodGenerator\Constructor;

/**
 * Appplication logic service
 * High Module Class
 */
final class HelloWorldService
{

    private string $message;

    private HelloWorldRepositoryInterface $repository;

    private HelloWorldRepositoryFactory $repositoryFactory;


    public function __construct(HelloWorldRepositoryInterface $repository, HelloWorldRepositoryFactory $repositoryFactory)
    {
        $this->repository = $repository;
        $this->repositoryFactory = $repositoryFactory;
    }

    public function sayHelloWorld($provider = null)
    {
        $this->repository = $this->repositoryFactory->createRepository($provider);
        return $this->repository->sayHello();
    }
}
