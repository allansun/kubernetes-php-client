<?php


namespace CodeGenerator\Code;

final class KubernetesOperations
{

    public const GET = 'get';
    public const PUT = 'put';
    public const POST = 'post';
    public const DELETE = 'delete';
    public const OPTIONS = 'options';
    public const HEAD = 'head';
    public const PATCH = 'patch';

    public const OPERATIONS = [self::GET, self::PUT, self::POST, self::DELETE, self::OPTIONS, self::HEAD, self::PATCH];
}
