<?php

namespace App\Http\Controllers;

use App\ExcelProcessor;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download()
    {
        $processor = new ExcelProcessor;
        $xlsx = $processor->create();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="file.xlsx"');
        $xlsx->save("php://output");
        die();
    }
}
