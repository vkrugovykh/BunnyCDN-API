<?php

namespace vkrugovykh\bunnycdn;

use Exception;

class BunnyAPIException extends Exception
{
    public function errorMessage(): string
    {//Error message
        return "Error on line {$this->getLine()} in {$this->getFile()}. {$this->getMessage()}.";
    }
}