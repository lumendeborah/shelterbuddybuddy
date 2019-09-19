<?php

namespace App;

use App\Controllers\HomeController;

class App
{
    public function __construct()
    {
        $this->bootstrap();
    }

    /**
     * run
     * This function catches the requested route, and does the rest of the stuff
     *
     * @param string $route
     * @return string
     */
    public function run(string $route)
    {
        $routes = [
            "/" => HomeController::index()
        ];

        if (!array_key_exists($route, $routes)) {
            return "404";
        }

        return $routes[$route];
    }

    /**
     * bootstrap
     * stuff that needs to be bootstrapped should go here
     *
     * @return void
     */
    private function bootstrap()
    {
        // put stuff that needs bootstrapping here
    }
}
