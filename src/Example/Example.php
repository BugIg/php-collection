<?php

namespace App\Example;

use App\Example\Collection\FooCollection;

class Example
{
    public function main(): FooCollection
    {
        $collection = FooCollection::createEmpty();
        $collection->add(new Foo('4dae0971-ac81-43f1-b7e1-952df598af5a', 'name'));
        $collection->add(new Foo('42deac29-9661-47e8-8746-062fc784ae1b', 'other'));

        $filteredCollection = $collection->filter(function(Foo $foo) {
            return $foo->name === 'other';
        });

        return $collection->filter(fn (Foo $foo) => $foo->name === 'other');
    }
}