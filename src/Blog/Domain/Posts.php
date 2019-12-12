<?php

declare(strict_types = 1);

namespace Blog\Domain;

use Shared\Domain\Collection;

final class Posts extends Collection
{
    protected function type(): string
    {
        return Post::class;
    }
}
