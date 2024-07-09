<?php

declare(strict_types=1);

namespace App\Example\Collection;

use App\Example\Foo;
use App\TypedCollection;

final class FooCollection extends TypedCollection
{
    protected function type(): string
    {
        return Foo::class;
    }
}