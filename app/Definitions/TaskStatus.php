<?php

namespace App\Definitions;
use ReflectionClass;

class TaskStatus
{
    const NEW = 'new';
    const IN_PROGRESS = 'in-progress';
    const COMPLETED = 'completed';

    // Prevent instantiation of this class
    private function __construct()
    {
    }

    /**
     * Get all defined status values.
     *
     * @return array
     */
    public static function getAllStatuses(): array
    {
        $reflectionClass = new ReflectionClass(self::class);
        $statuses = $reflectionClass->getConstants();
        return array_values($statuses);
    }
}
