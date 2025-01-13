<?php

declare(strict_types=1);

namespace LibraryManagement\Classes;

class Library
{
    private array $books = [];
    private array $members = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function registerMember(Member $member): void
    {
        $this->members[] = $member;
    }

    public function listBooks(): void
    {
        if (empty($this->books)) {
            echo "No books available in the library.\n";
            return;
        }

        foreach ($this->books as $book) {
            echo "Title: {$book->getTitle()}, Author: {$book->getAuthor()}, ISBN: {$book->getIsbn()}\n";
        }
    }
}
