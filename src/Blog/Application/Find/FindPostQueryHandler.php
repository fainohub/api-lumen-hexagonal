<?php

declare(strict_types = 1);

namespace Blog\Application\Find;
use Blog\Domain\PostId;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\pipe;

final class FindPostQueryHandler
{
    private $finder;

    public function __construct(PostFinder $finder)
    {
        $this->finder = pipe($finder, new PostResponse());
    }

    public function handle(FindPostQuery $query): array
    {
        $id = new PostId($query->id());
        return apply($this->finder, [$id]);
    }
}