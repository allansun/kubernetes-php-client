<?php


namespace CodeGenerator\Camel\Format;

use Camel\Format\FormatInterface;
use CodeGenerator\Utility;

class PhpPackageCase implements FormatInterface
{
    public function split($word): array
    {
        return explode('\\', $word);
    }

    public function join(array $words): string
    {

        $words = array_map('ucfirst', $words);

        $words = array_map(function ($word) {
            // Ensure words are lowercase
            $word = ucfirst($word);

            $word = Utility::filterSpecialWord($word);

            return $word;
        }, $words);

        return implode('\\', $words);
    }
}
