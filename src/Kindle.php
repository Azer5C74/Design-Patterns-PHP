<?php

namespace Adapter;
class Kindle implements eReaderInterface
{

    public function turnOn(): void
    {
        var_dump('turn the Kindle on');
    }

    public function pressNextButton(): void
    {
        var_dump('press the next button on the Kindle');
    }

}