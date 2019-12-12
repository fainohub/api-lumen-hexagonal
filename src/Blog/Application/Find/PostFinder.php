<?php

declare(strict_types = 1);

namespace Blog\Application\Find;

use Blog\Domain\Post;
use Blog\Domain\PostId;
use Blog\Domain\PostNotExist;
use Blog\Domain\PostRepository;

final class PostFinder
{
    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }
    public function __invoke(PostId $id): Post
    {
        $post = $this->repository->find($id);

        if (null === $post) {
            throw new PostNotExist(sprintf('The post <%s> does not exists', $id->value()));
        }

        return $post;
    }
}
