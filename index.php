<?php

require_once 'vendor/autoload.php';

use App\Facades\LoggerFacade;

$dbLogger = LoggerFacade::DBLogger();
$dbLogger->log("DB Log");

$fileLogger = LoggerFacade::FileLogger();
$fileLogger->log("File Log");
