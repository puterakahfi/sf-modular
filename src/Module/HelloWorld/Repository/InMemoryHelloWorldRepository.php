<?php

namespace App\Module\HelloWorld\Repository;


class InMemoryHelloWorldRepository implements HelloWorldRepositoryInterface
{


    public function sayHello(): string
    {
        return "Hello World From Memory";
    }
}
