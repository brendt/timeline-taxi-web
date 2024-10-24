<?php

namespace App\StoredEvents;

interface ShouldBeStored
{
    public function getUuid(): string;

    public function serialize(): string;

    public static function unserialize(string $payload): self;
}