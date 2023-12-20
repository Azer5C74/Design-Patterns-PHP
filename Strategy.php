/*
This is an example of strategy pattern usage written in php.
It helps to encapsulate a family of algorithms that perform similar functions.
Here we tried encapsulating various logging methods to an interface and making them interchangeable.
*/

<?php

// Defining a family of algorithms

class LogToFile implements Logger
{

    public function log($data)
    {
        var_dump('Log the data to a file.');
    }
}

class LogToDatabase implements Logger
{

    public function log($data)
    {
        var_dump('Log the data to a database.');
    }
}

class LogToWebService implements Logger
{

    public function log($data)
    {
        var_dump('Log the data to a web service.');
    }
}

// encapsulating the algorithms and making them interchangeable

interface Logger
{
    public function log($data);
}


class App
{
    public function log($data, Logger $logger = null)
    {
        // setting log to file as a default logging method
        $logger = $logger ?: new LogToFile();
        $logger = $data;
    }
}

$app = new App;

$app->log('Some logging info here.', new LogToDatabase);
