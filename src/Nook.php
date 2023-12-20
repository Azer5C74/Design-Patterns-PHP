<?php
namespace Adapter;
class Nook implements eReaderInterface
{

    public function turnOn(): void
    {
        var_dump('turn the Nook on');
    }

    public function pressNextButton(): void
    {
        var_dump('press the next button on the Nook');
    }

}