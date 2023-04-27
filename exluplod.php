<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo isset($_POST["submit"]);

if(isset($_POST["submit"])){

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $file_name =$_FILES['uploadFile']['name'];

        if(isset($_FILES['uploadFile']['name']) && $_FILES['uploadFile']['name'] != "") {
            $allowedExtensions = array("xls","xlsx");
            $ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
            if(in_array($ext, $allowedExtensions)) {
                    // Uploaded file
                   $file = "uploads/".$_FILES['uploadFile']['name'];
                   $isUploaded = copy($_FILES['uploadFile']['tmp_name'], $file);
                   // check uploaded file
                   if($isUploaded) {
                        // Include PHPExcel files and database configuration file
                        require 'vendor/autoload.php';
                        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
                        try {
                            // load uploaded file
                            $objPHPExcel = PHPExcel_IOFactory::load($file);
                        } catch (Exception $e) {
                             die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME). '": ' . $e->getMessage());
                        }
                        
                        // Specify the excel sheet index
                        $sheet = $objPHPExcel->getSheet(0);
                        // Get the highest row and column
                        $total_rows = $sheet->getHighestRow();
                        $highestColumn      = $sheet->getHighestColumn();	
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);		
                        
                        //	loop over the rows
                        for ($row = 1; $row <= $total_rows; ++ $row) {
                            for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                                $cell = $sheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getValue();
                                $records[$row][$col] = $val;
                            }
                        }
                        foreach($records as $row){
                                echo $row;

                        }
                    }
                }
                 }
    }
?>