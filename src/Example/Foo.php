<?php

declare(strict_types=1);

namespace App\Example;

final readonly class Foo
{
    public function __construct(
        public string $id,
        public string $name
    ) {
    }

    public function toArray(): array
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
        ];
    }

    public function equals(self $other): bool
    {
        return $this->id === $other->id && $this->name === $other->name;
    }
}