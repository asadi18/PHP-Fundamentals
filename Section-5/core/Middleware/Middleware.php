<?php

namespace core\Middleware;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class
    ];

    public static function resolve($key)
    {
        if (!$key) {
            return;
        }
        $middleware = static::MAP[$key] ?? false;
        if (!$middleware) {
            throw new \Exception("No Mathing middleware found for key '{$key}'.");
        }
        (new $middleware)->handle();
    }
}
