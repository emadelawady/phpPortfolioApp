<?php 

declare(strict_types=1);

namespace Core;

use Closure;
use Exception;

class Container {

    protected $bindings = [];

    public function bind(string $key, Closure $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        // dd($key);
        if(!array_key_exists($key,$this->bindings)){
            throw new Exception('no match data found');
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }

}