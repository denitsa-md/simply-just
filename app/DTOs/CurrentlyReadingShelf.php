<?php

namespace App\DTOs;

class CurrentlyReadingShelf
{
    private array $books;

    public function __construct(string $string)
    {
        $object = simplexml_load_string($string);
        $object = json_encode($object);
        $array = json_decode($object, true);
        $this->setBooks($array['books']['book']);
    }

    private function setBooks(array $books)
    {
        foreach ($books as $book) {
            $this->books[] = new Book($book);
        }
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function getBooksAsArrays(): array
    {
        return array_map(function ($book) {
            return $book->toArray();
        }, $this->getBooks());
    }
}
