<?php


namespace CodeGenerator;

use Camel\CaseTransformer;
use CodeGenerator\Camel\Format\GolangPackageCase;
use CodeGenerator\Camel\Format\PhpPackageCase;

final class Utility
{
    /**
     * @var CaseTransformer
     */
    private static $GolangToPhpTransformer;

    private static function convertDefinitionToClass(string $definition): string
    {
        if (!self::$GolangToPhpTransformer) {
            self::$GolangToPhpTransformer = new CaseTransformer(new GolangPackageCase(), new PhpPackageCase());
        }

        return self::$GolangToPhpTransformer->transform($definition);
    }

    public static function convertRefToClass(string $ref): string
    {
        $ref = str_replace('#/definitions/', '', $ref);

        return self::convertDefinitionToClass($ref);
    }

    public static function parseClassInfo(string $fullClass): array
    {
        $classInfo = explode('\\', $fullClass);
        $className = array_pop($classInfo);

        return [implode('\\', $classInfo), $className];
    }

    public static function filterSpecialWord(string $word): string
    {
        // Convert '-' to '_' to follow PHP language naming convention
        $word = str_replace('-', '_', $word);

        // Change 'Namespace' package to 'ANamespace', because 'namespace' is a PHP reservced keyword
        $word = $word === 'Namespace' ? 'Kubernetes' . $word : $word;

        return $word;
    }
}
