<?php

namespace App\Module\HelloWorld;


/**
 * Appplication logic service
 * High Module Class
 */
final class HelloWorldService
{

    private string $message;

    public function sayHello()
    {

        return 'Hello World from service';
    }
}
