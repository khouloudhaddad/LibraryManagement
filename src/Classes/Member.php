<?php

declare(strict_types=1);
namespace LibraryManagement\Classes;
use LibraryManagement\Traits\TimestampTrait;


class Member
{
    use TimestampTrait;

    private array $borrowedBooks = [];

    /**
     * @param string $name
     */
    public function __construct(
        private string $name
    ) {
        $this->setTimestamps();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function borrowBook(Book $book): void
    {
        $this->borrowedBooks[] = $book;
        $this->updateTimestamp();
    }

    public function getBorrowedBooks(): array
    {
        return $this->borrowedBooks;
    }
}