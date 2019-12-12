<?php

declare(strict_types = 1);

namespace Blog\Application\Find;

final class FindPostQuery
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }
}