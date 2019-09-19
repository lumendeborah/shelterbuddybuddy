<?php

namespace App\Controllers;

use Exception;
use Mustache_Engine;

class Controller
{
    protected function view(string $viewFile, array $data = [])
    {
        $templateFile = __DIR__."/../../views/".$viewFile.".tpl";
        if (!file_exists($templateFile)) {
            return "Template file not found. Please make sure that ".$templateFile." exists";
        }

        $m = new Mustache_Engine();
        return $m->render(file_get_contents($templateFile), $data);
    }
}
