<?php

namespace App\Loggers;

use App\Interfaces\LoggerInterface;

class FileLogger implements LoggerInterface
{
    public function log( string $message )
    {
        echo "Log {$message} to file \n";
    }
}
