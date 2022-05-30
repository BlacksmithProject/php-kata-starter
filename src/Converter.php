<?php
declare(strict_types=1);

namespace BlacksmithProject\PhpKataStarter;

final class Converter
{
    private const FIZZ = 'Fizz';
    private const FIZZ_MULTIPLIER = 3;
    private const BUZZ = 'Buzz';
    private const BUZZ_MULTIPLIER = 5;
    private const FIZZ_BUZZ = 'FizzBuzz';

    public function convert(int $number): string
    {
        if (
            $this->isMultipleOf($number, self::FIZZ_MULTIPLIER)
            && $this->isMultipleOf($number, self::BUZZ_MULTIPLIER)
        ) {
            return self::FIZZ_BUZZ;
        }

        if ($this->isMultipleOf($number, self::FIZZ_MULTIPLIER)) {
            return self::FIZZ;
        }

        if ($this->isMultipleOf($number, self::BUZZ_MULTIPLIER)) {
            return self::BUZZ;
        }

        return (string) $number;
    }

    protected function isMultipleOf(int $number, int $multiplier): bool
    {
        return $number % $multiplier === 0;
    }
}
