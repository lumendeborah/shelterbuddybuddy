<?php

namespace App\Http\Controllers;

use App\ExcelProcessor;
use App\ExcelReader;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download()
    {
        $excelReader = new ExcelReader();
        $data = $excelReader->read("Report656.csv");

        // $processor = new ExcelProcessor();
        // $processor->create();
        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename="file.xlsx"');

        // $xlsx = $processor->write();

        // $xlsx->save("php://output");
        // exit(0);
    }
}
