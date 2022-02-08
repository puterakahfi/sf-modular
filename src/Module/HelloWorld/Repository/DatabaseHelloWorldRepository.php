<?php

namespace App\Module\HelloWorld\Repository;


class DatabaseHelloWorldRepository implements HelloWorldRepositoryInterface
{


    public function sayHello(): string
    {
        return "Hello World From Database";
    }
}
