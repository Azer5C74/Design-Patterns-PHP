<?php

namespace Strategy;
class LogToFile implements Logger
{
    public function log(?string $data): void
    {
        echo $data;
        if ($data == null) {
          echo  ('Log the data to a file. -');
        }
        echo $data;
    }
}