<?php

namespace App\Controllers;

use Exception;
use Mustache_Engine;

class Controller
{
    protected static function view(string $viewFile, array $data = [])
    {
        $templateFile = __DIR__."/../../views/".$viewFile.".tpl";
        if (!file_exists($templateFile)) {
            return "Template file not found. Please make sure that ".$templateFile." exists";
        }

        $m = new Mustache_Engine();
        // this will render the individual view file
        $viewData = $m->render(file_get_contents($templateFile), $data);
        return $m->render(file_get_contents(__DIR__."/../../views/layout.tpl"), ["content" => $viewData]);
    }
}
