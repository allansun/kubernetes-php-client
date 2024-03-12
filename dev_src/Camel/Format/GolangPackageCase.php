<?php


namespace CodeGenerator\Camel\Format;

use Camel\Format\FormatInterface;

class GolangPackageCase implements FormatInterface
{
    public function split($word)
    {
        return explode('.', $word);
    }

    public function join(array $words)
    {
        // Ensure words are lowercase
        $words = array_map('strtolower', $words);

        return implode('.', $words);
    }
}
