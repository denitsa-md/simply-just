<?php

namespace App\DTOs;

class Book
{
    public string $title;
    public string $goodreadsLink;
    public string $imageUrl;

    public function __construct(array $book)
    {
        $this->title = $book['title'];
        $this->goodreadsLink = $book['link'];
        $this->imageUrl = $book['image_url'];
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'goodreads_link' => $this->goodreadsLink,
            'image_url' => $this->imageUrl,
        ];
    }
}
