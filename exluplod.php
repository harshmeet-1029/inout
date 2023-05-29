<?php
require "./functions/dbconn.php";
require 'vendor/autoload.php';
ini_set('max_input_vars', 10000);
ini_set('memory_limit', '1G');

use PhpOffice\PhpSpreadsheet\IOFactory;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["submit"])){

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
                        $reader = IOFactory::createReaderForFile($file);
                        $spreadsheet = $reader->load($file);
                        $worksheet = $spreadsheet->getActiveSheet();
                        
                        // Iterate through the rows of the worksheet
                        foreach ($worksheet->getRowIterator() as $row) {
                            $data = [];
                            $cellIterator = $row->getCellIterator();
                            $cellIterator->setIterateOnlyExistingCells(false);
                        
                            // Iterate through the cells of the row
                            foreach ($cellIterator as $cell) {
                                $data[] = $cell->getValue();
                            }
                            $dateformat=\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data[6]);
                            $admdate = $dateformat->format('Y-m-d');
                            $exda=\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data[7]);
                            $exdate = $exda->format('Y-m-d');
                            $bcode="GNE";
                       // echo $data[0]." ".$data[1]." ".$data[2]." ".$data[3]." ".$data[4]." ".$data[5]." ".$admdate." ".$exdate." ".$data[8]." ".$data[9]." ".$data[10]."<br>";
                        $sql="INSERT INTO `gnestu`(`MEM_NO`,`MEM_NAME`,`Fname`,`Mname`,`MEM_EMAIL`,`MEM_TELEPHONE`,`MEM_ADM_DATE`,`MEM_CLOSE_DATE`,`GRP_NAME`,`DESIG_NAME`,`branchcode`) VALUES ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$admdate."','".$exdate."','".$data[8]."','".$data[9]."','".$bcode."')";
                        // echo $sql;
                        $result = mysqli_query($koha, $sql);
                            

                }
                if(!$result){
                    echo mysqli_error($koha)."<br>";
                   // header('Location:supload.php');
        
                    }
                else{
                    echo "Data Entered";
                   // header('Location:supload.php');
            }

                    }

          }
    }
}
?>