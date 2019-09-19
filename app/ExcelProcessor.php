<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class ExcelProcessor
{
    public function create()
    {
        $spreadsheet = new Spreadsheet();
        // background color
        $spreadsheet->
            getActiveSheet()->
            getStyle('A1:S1')->
            getFill()->
            setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->
            getStartColor()->
            setARGB('FFB9F0FD');

        // set the text to wrap
        $spreadsheet->
            getActiveSheet()->
            getStyle('A1:S1')->
            getAlignment()->
            setWrapText(true);

        // height of header row
        $spreadsheet->
            getActiveSheet()->
            getRowDimension('1')->
            setRowHeight(60);

        // set some of the column widths
        $spreadsheet->
            getActiveSheet()->
            getColumnDimension('L')->
            setWidth(12);
        $spreadsheet->
            getActiveSheet()->
            getColumnDimension('P')->
            setWidth(12);
        $spreadsheet->
            getActiveSheet()->
            getColumnDimension('S')->
            setWidth(12);

        $spreadsheet->getActiveSheet()->fromArray([
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
            "Microchip #",
            "Birthdate",
            "Altered",
            "Illness",
            "Relocation",
            "Date of Death",
            "Age @ Death",
            "Comments",
        ], null, "A1");
        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        return $writer;
    }
}
