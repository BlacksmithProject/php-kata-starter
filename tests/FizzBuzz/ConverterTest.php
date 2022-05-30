<?php
declare(strict_types=1);

namespace BlacksmithProject\PhpKataStarter\Tests\FizzBuzz;

use BlacksmithProject\PhpKataStarter\Converter;
use PHPUnit\Framework\TestCase;

final class ConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider providedNumbersThatAreNotMultipleOfThreeOrFive
     */
    public function should return provided number as a string if not multiple of 3 or 5(int $providedNumber): void
    {
        // GIVEN
        $number = $providedNumber;

        // WHEN
        $converter = new Converter();
        $result = $converter->convert($number);

        // THEN
        self::assertSame((string) $number, $result);
    }

    /**
     * @test
     * @dataProvider providedNumbersThatAreMultipleOfThreeButNotFive
     */
    public function should return Fizz if number is multiple of 3 but not 5(int $providedNumber): void
    {
        // GIVEN
        $number = $providedNumber;

        // WHEN
        $converter = new Converter();
        $result = $converter->convert($number);

        // THEN
        self::assertSame('Fizz', $result);
    }

    /**
     * @test
     * @dataProvider providedNumbersThatAreMultipleOfFiveButNotThree
     */
    public function should return Buzz if number is multiple of 5 but not 3(int $providedNumber): void
    {
        // GIVEN
        $number = $providedNumber;

        // WHEN
        $converter = new Converter();
        $result = $converter->convert($number);

        // THEN
        self::assertSame('Buzz', $result);
    }

    /**
     * @test
     * @dataProvider providedNumbersThatAreMultipleOfThreeAndFive
     */
    public function should return FizzBuzz if number is multiple of 3 and 5(int $providedNumber): void
    {
        // GIVEN
        $number = $providedNumber;

        // WHEN
        $converter = new Converter();
        $result = $converter->convert($number);

        // THEN
        self::assertSame('FizzBuzz', $result);
    }

    private function providedNumbersThatAreNotMultipleOfThreeOrFive(): array
    {
        return [
            [1], [2], [4], [7], [8], [11], [13], [14], [16],
        ];
    }

    private function providedNumbersThatAreMultipleOfThreeButNotFive(): array
    {
        return [
            [3], [6], [9], [12], [18], [21], [24], [27], [33],
        ];
    }

    private function providedNumbersThatAreMultipleOfFiveButNotThree(): array
    {
        return [
            [5], [10], [20], [25], [35], [40], [50], [55], [65],
        ];
    }

    private function providedNumbersThatAreMultipleOfThreeAndFive(): array
    {
        return [
            [15], [30], [45], [60], [75], [90],
        ];
    }
}
