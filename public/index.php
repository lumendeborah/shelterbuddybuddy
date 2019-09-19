<?php

require "../vendor/autoload.php";

use App\App;

$app = new App();

echo $app->run($_SERVER["REQUEST_URI"]);
