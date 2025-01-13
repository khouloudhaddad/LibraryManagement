<?php

declare(strict_types=1);

namespace LibraryManagement\Utils;

use ReflectionClass;

class Reflector
{
    public static function getClassDetails(object $object): void
    {
        $reflection = new ReflectionClass($object);

        echo nl2br("\nClass: " . $reflection->getName() . "\n");

        echo nl2br("Properties:\n");
        foreach ($reflection->getProperties() as $property) {
            echo nl2br("  - {$property->getName()} (Visibility: " . self::getVisibility($property) . ")\n");
        }

        echo nl2br("Methods:\n");
        foreach ($reflection->getMethods() as $method) {
            echo nl2br("  - {$method->getName()} (Visibility: " . self::getVisibility($method) . ")\n");
        }
    }

    private static function getVisibility($reflector): string
    {
        if ($reflector->isPublic()) {
            return 'public';
        }

        if ($reflector->isProtected()) {
            return 'protected';
        }

        if ($reflector->isPrivate()) {
            return 'private';
        }

        return 'unknown';
    }
}
