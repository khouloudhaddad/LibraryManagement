<?php

declare(strict_types=1);

namespace LibraryManagement\Classes;

use LibraryManagement\Traits\TimestampTrait;

class Book
{
    use TimestampTrait;

    private string $title;
    private string $author;
    private string $isbn;

    public function __construct(string $title, string $author, string $isbn)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->setTimestamps(); // Set timestamps during instantiation
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }
}