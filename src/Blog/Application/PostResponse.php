<?php

declare(strict_types = 1);

namespace Blog\Application;

use Blog\Domain\Post;

final class PostResponse
{
    public function __invoke(Post $post): array
    {
        return [
            'id'         => $post->id()->value(),
            'title'      => $post->title()->value(),
            'content'    => $post->content()->value(),
            'created_at' => $post->createdAt()->value(),
            'updated_at' => $post->updatedAt()->value(),
        ];
    }

}