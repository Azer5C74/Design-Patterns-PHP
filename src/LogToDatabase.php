<?php

namespace Strategy;
class LogToDatabase implements Logger
{
    public function log(?string $data): void
    {
        if ($data == null) {
            echo ('Log the data to a database. -');
        }
        echo $data;
    }
}