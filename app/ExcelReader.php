<?php

namespace App;

class ExcelReader
{
    public function read(string $filename)
    {
        if (!file_exists(storage_path("demo-data/$filename"))) {
            return false;
        }


        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load(storage_path("demo-data/$filename"));

        $cellValue = $spreadsheet->getActiveSheet()->getCell('A1')->getValue();
        dd($cellValue);
    }
}
