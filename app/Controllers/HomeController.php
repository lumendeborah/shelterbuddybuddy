<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public static function index()
    {
        return self::view("index");
    }
}
