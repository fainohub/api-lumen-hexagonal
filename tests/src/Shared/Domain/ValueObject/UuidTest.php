<?php

use Shared\Domain\ValueObject\Uuid;

class UuidTest extends TestCase
{

    public function testCreate()
    {
        $uuid = Uuid::random();

        $this->assertInstanceOf(Uuid::class, $uuid);
    }
}
