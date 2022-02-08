<?php

namespace App\Module\HelloWorld\Repository;


/**
 * Design by Contract Repository for Hello World
 */
interface HelloWorldRepositoryInterface
{


    public function sayHello(): string;
}
