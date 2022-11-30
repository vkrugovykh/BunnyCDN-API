<?php

namespace vkrugovykh\BunnyCdn;

use Exception;

class BunnyAPIException extends Exception
{
    public function errorMessage(): string
    {//Error message
        return "Error on line {$this->getLine()} in {$this->getFile()}. {$this->getMessage()}.";
    }
}