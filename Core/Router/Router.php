<?php

namespace Core\Router;


class Router
{
    protected Request $request;
    protected Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;

    }

    protected static array $routes = [];

    public static function get($route, callable|array|string $action)
    {
        self::$routes['GET'][$route] = $action;
    }

    public static function post($route, callable|array|string $action)
    {
        self::$routes['POST'][$route] = $action;
    }



}