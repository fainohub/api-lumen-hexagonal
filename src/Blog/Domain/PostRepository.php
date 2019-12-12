<?php

declare(strict_types = 1);

namespace Blog\Domain;

interface PostRepository
{
    public function all(): ?Posts;

    public function find(PostId $id): ?Post;

    public function save(Post $post): void;
}
