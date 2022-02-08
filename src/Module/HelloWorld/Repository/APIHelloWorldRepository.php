<?php

namespace App\Module\HelloWorld\Repository;

class APIHelloWorldRepository implements HelloWorldRepositoryInterface
{


    public function sayHello(): string
    {
        return "Hello World From Third Party API";
    }
}
