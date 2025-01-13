<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use LibraryManagement\Classes\Book;
use LibraryManagement\Classes\Library;
use LibraryManagement\Classes\Member;
use LibraryManagement\Utils\Reflector;

$library = new Library();

$book1 = new Book('1984', 'George Orwell', '123456789');
$book2 = new Book('To Kill a Mockingbird', 'Harper Lee', '987654321');

$library->addBook($book1);
$library->addBook($book2);

$member = new Member('Jane Doe');
$library->registerMember($member);

$member->borrowBook($book1);

echo nl2br("Books in library:\n");
$library->listBooks();

echo nl2br("\nBooks borrowed by {$member->getName()}:\n");
foreach ($member->getBorrowedBooks() as $borrowedBook) {
    echo nl2br("- {$borrowedBook->getTitle()} by {$borrowedBook->getAuthor()}\n");
}

Reflector::getClassDetails($book1);
