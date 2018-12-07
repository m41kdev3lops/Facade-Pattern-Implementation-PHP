<?php

namespace App\Loggers;

use App\Interfaces\LoggerInterface;

class DatabaseLogger implements LoggerInterface
{
    public function log( string $message )
    {
        echo "Log {$message} To Database \n";
    }
}
