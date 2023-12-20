<?php
namespace Adapter;
class Book implements BookInterface {

    public function open(): void
    {
        var_dump('opening the paper book.');
    }
    public function turnPage(): void
    {
        var_dump("turning the page of the paper book.");
    }
}