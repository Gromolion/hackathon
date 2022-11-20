<?php

namespace App\Services;

interface LocationServiceInterface
{
    public function load(string $queryParams): void;

    public function getLocation(): string;
}
