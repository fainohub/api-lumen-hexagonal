<?php

declare(strict_types = 1);

namespace Blog\Domain;

use JsonSerializable;

final class Post implements JsonSerializable
{
    private $id;
    private $title;
    private $content;

    public function __construct(PostId $id, Title $title, Content $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public function id(): PostId
    {
        return $this->id;
    }

    public function title(): Title
    {
        return $this->title;
    }

    public function content(): Content
    {
        return $this->content;
    }

    public function jsonSerialize()
    {
        return [
            'id'      => (string) $this->id,
            'title'   => (string) $this->title,
            'content' => (string) $this->content
        ];
    }
}
