<?php

declare(strict_types=1);
namespace LibraryManagement\Traits;
use DateTime;
trait TimestampTrait
{
    private DateTime $createdAt;
    private DateTime $updatedAt;

    public function setTimestamps(): void
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function updateTimestamp(): void
    {
        $this->updatedAt = new DateTime();
    }

    public function getTimestamps(): array
    {
        return [
            'createdAt' => $this->createdAt->format('Y-m-d H:i:s'),
            'updatedAt' => $this->updatedAt->format('Y-m-d H:i:s'),
        ];
    }
}