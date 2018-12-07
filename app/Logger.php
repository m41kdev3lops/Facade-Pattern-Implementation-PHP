<?php

namespace App;

use App\Interfaces\LoggerInterface;

class Logger
{
    protected $logger;

    public function __construct( LoggerInterface $logger )
    {
        $this->logger = $logger;
    }


    public function log( string $message )
    {
        $this->logger->log( $message );
    }
}
