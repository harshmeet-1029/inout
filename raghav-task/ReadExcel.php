<?php
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\IOFactory;

    $spreadsheet = IOFactory::load($<path>);

    $worksheet = $spreadsheet->getActiveSheet();

    $highestRow = $worksheet->getHighestRow();
    $highestColumn = $worksheet->getHighestColumn();

    $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);

    for ($row = 1; $row <= $highestRow; $row++) {
        for ($col = 1; $col <= $highestColumnIndex; $col++) {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            $value = $cell->getValue();
            echo "$value, ";
        }
        echo "\n"; 
    }
>
