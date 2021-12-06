<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

class DataProcessor
{
    static function getRawDataFromXLSX($inputFileName)
    {
        $inputFileType = IOFactory::identify($inputFileName);
        $reader = IOFactory::createReader($inputFileType);
        $spreadsheet = $reader->load($inputFileName);
        return $spreadsheet->getActiveSheet()->toArray();
    }    
}

class Storage
{
    function saveProductToDB()
    {
        return (new DataProcessor())::getRawDataFromXLSX('files/produk.xlsx');
    }
}

print_r((new Storage())->saveProductToDB());