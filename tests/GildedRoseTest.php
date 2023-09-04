<?php

namespace BlacksmithProject\PhpKataStarter\Tests;

use BlacksmithProject\PhpKataStarter\GildedRose;
use BlacksmithProject\PhpKataStarter\Item;
use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase
{
    /** @test */
    public function foo(): void
    {
        $items = [new Item('foo', 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        self::assertSame('fixme', $items[0]->name);
    }
}
