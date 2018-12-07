<?php

namespace App\Facades;

use App\Logger;
use App\Loggers\FileLogger;
use App\Loggers\DatabaseLogger;

class LoggerFacade
{
    public static function FileLogger()
    {
        return new Logger( new FileLogger );
    }


    public static function DBLogger()
    {
        return new Logger( new DatabaseLogger );
    }
}
