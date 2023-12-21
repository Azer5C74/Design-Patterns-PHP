<?php
namespace Strategy;
class LogToWebService implements Logger
{
    public function log(?string $data): void
    {
        if ($data == null) {
            echo ('Log the data to a Web Service. -');
        }
        echo $data;
    }
}