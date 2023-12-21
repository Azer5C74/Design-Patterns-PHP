<?php

require 'vendor/autoload.php';

use Strategy\Logger;
use Strategy\LogToDatabase;
use Strategy\LogToFile;
use Strategy\LogToWebService;
class App
{
    public function log(?Logger $logger = null, ? string $data = null): void
    {
        // setting log to file as a default logging method
        $logger = $logger ?? new LogToFile();

        // Single Line Log
        $logger->log($data);
    }
}

$app = new App;

$app->log(new LogToWebService);
$app->log(new LogToDatabase, 'Some logging info here to Database. -',);
$app->log(new LogToWebService, 'Logging to Web Service. -');