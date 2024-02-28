<?php


namespace CodeGenerator\Code;

final class KubernetesOperations
{

    const GET = 'get';
    const PUT = 'put';
    const POST = 'post';
    const DELETE = 'delete';
    const OPTIONS = 'options';
    const HEAD = 'head';
    const PATCH = 'patch';

    const OPERATIONS = [self::GET, self::PUT, self::POST, self::DELETE, self::OPTIONS, self::HEAD, self::PATCH];
}
