<?php
if(isset($_POST["Import"])){
        echo $filename=$_FILES['uploadFile']["name"];
        if(isset($_FILES['uploadFile']['name']) && $_FILES['uploadFile']['name'] != "") {
            $allowedExtensions = array("xls","xlsx");
            $ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);

            if(in_array($ext, $allowedExtensions)) {
                    // Uploaded file
                   $file = "uploads/".$_FILES['uploadFile']['name'];
                 
                   echo copy($_FILES['uploadFile']['name'], $file);
                    
                   // check uploaded file
                   if($isUploaded) {
                        // Include PHPExcel files and database configuration file
                        require_once __DIR__ . '/vendor/autoload.php';
                        include(__DIR__ .'/vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php');
                        try {
                            // load uploaded file
                            $objPHPExcel = PHPExcel_IOFactory::load($file);
                        } catch (Exception $e) {
                             die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME). '": ' . $e->getMessage());
                        }
                        
                        // Specify the excel sheet index
                        $sheet = $objPHPExcel->getSheet(0);
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