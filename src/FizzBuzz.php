<?php
declare(strict_types=1);

namespace BlacksmithProject\PhpKataStarter;

final class FizzBuzz
{
    private Converter $converter;

    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    public function execute(int $length): string
    {
        $result = '';

        for ($i = 1; $i <= $length; $i++) {
            $result .= $this->converter->convert($i) . ' ';
        }

        return \trim($result);
    }
}
