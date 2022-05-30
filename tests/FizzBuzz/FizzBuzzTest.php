<?php
declare(strict_types=1);

namespace BlacksmithProject\PhpKataStarter\Tests\FizzBuzz;

use BlacksmithProject\PhpKataStarter\Converter;
use BlacksmithProject\PhpKataStarter\FizzBuzz;
use function PHPUnit\Framework\assertSame;

final class FizzBuzzTest
{
    /** @test */
    public function FizzBuzz should return the right list(): void
    {
        // GIVEN
        $fizzBuzz = new FizzBuzz(new Converter());

        // WHEN
        $result = $fizzBuzz->execute(15);

        // THEN
        assertSame('1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz', $result);
    }
}
