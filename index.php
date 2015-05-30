<pre>
<?php

require "vendor/autoload.php";

$file = 'example.xlsx';

// load file
$excel = PHPExcel_IOFactory::load($file);

// sheets
$examSheet = $excel->getSheet(0);
    
// vars
$examCode = trim($examSheet->getCell('B1')->getValue());
$examName = trim($examSheet->getCell('B2')->getValue());
$examDescription = trim($examSheet->getCell('B3')->getValue());
$industryName = trim($examSheet->getCell('B4')->getValue());
$stateAbbr = trim($examSheet->getCell('B5')->getValue());
$examTime = trim($examSheet->getCell('B6')->getValue());
$accessTime = trim($examSheet->getCell('B7')->getValue());


// details
echo $examCode, PHP_EOL;
echo $examName, PHP_EOL;
echo $examDescription, PHP_EOL;
    
// sheet 1
$sheet1 = $excel->getSheet(1);
var_dump($sheet1->toArray());

// sheeet 2
$sheet2 = $excel->getSheet(2);
var_dump($sheet2->toArray());
