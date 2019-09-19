<?php

namespace App;

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
        return "wat up my homies! Requested route: ".$route;
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
