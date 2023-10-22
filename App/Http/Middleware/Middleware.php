<?php 

namespace App\Http\Middleware;

use App\Http\Middleware\Auth;
use App\Http\Middleware\Guest;

class Middleware {
    public const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    public static function resolve($key){

        if(!$key){
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if(!$middleware){
            throw new \Exception("no middleware found for key : $key");
        }

        (new $middleware)->handle();

    }
}