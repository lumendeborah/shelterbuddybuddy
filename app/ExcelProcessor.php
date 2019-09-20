<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class ExcelProcessor
{
    private $spreadsheet;

    public function __construct()
    {
        $this->spreadsheet = new Spreadsheet();
    }

    public function create()
    {
        // background color
        $this->spreadsheet->
            getActiveSheet()->
            getStyle('A1:T1')->
            getFill()->
            setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->
            getStartColor()->
            setARGB('FFB9F0FD');

        // set the text to wrap
        $this->spreadsheet->
            getActiveSheet()->
            getStyle('A1:T1')->
            getAlignment()->
            setWrapText(true);

        // height of header row
        $this->spreadsheet->
            getActiveSheet()->
            getRowDimension('1')->
            setRowHeight(60);

        // set some of the column widths
        $this->spreadsheet->
            getActiveSheet()->
            getColumnDimension('M')->
            setWidth(12);
        $this->spreadsheet->
            getActiveSheet()->
            getColumnDimension('Q')->
            setWidth(12);
        $this->spreadsheet->
            getActiveSheet()->
            getColumnDimension('T')->
            setWidth(12);

        $this->spreadsheet->getActiveSheet()->fromArray([
            "Grp #",
            "Foster",
            "Parent",
            "Last Name",
            "First Name",
            "Date Out to Foster",
            "Date back from foster care",
            "Days in Foster",
            "Intake Source",
            "Mother Cat's Name",
            "Kitten's Name",
            "Animal ID",
            "Microchip #",
            "Birthdate",
            "Altered",
            "Illness",
            "Relocation",
            "Date of Death",
            "Age @ Death",
            "Comments",
        ], null, "A1");

        $this->addKittenData();
    }

    private function addKittenData()
    {
    }

    public function write()
    {
        $writer = IOFactory::createWriter($this->spreadsheet, "Xlsx");
        return $writer;
    }
}
