<?php
/*
This is an example of Adapter pattern usage written in php.
It allows us to translate one interface for use with an incompatible
*/

require 'vendor/autoload.php';
use Adapter\Book;
use Adapter\BookInterface;
use Adapter\eReaderAdapter;
use Adapter\Kindle;
use Adapter\Nook;

class Person{
    public function read(BookInterface $book): void
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new Book);
(new Person)->read(new eReaderAdapter(new Kindle));
(new Person)->read(new eReaderAdapter(new Nook));
