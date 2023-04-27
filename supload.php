
    
<?php

	session_start();
	// ob_start(ob_gzhandler);
	$title = "Student Record Entry";
	$acc_code = "UP";
 
	require "./functions/access.php";
	require_once "./template/header.php";
  require "./functions/dbconn.php";
	require_once "./template/sidebar.php";
 
?>

    <div class="container">
      <br><br><br>
      <h4>Student Record Entry</h4>
      <br>
      <form method="POST" action="" id="Myform" name="Myform" >
        <div class="form-group">
          <label for="mnum">Memebrship Number:</label>
          <input type="number" class="form-control" id="mnum" name="mnum" required>
        </div>
        
        <div class="form-group">
          <label for="stuname">Name:</label>
          <input type="text" class="form-control" id="stuname" name="stuname" required>
        </div>
        
        <div class="form-group">
          <label for="fname">Farther Name:</label>
          <input type="text" class="form-control" id="fname" name="fname" required>
        </div>
        
       <div class="form-group">
          <label for="mname">Mother Name:</label>
          <input type="text" class="form-control" id="mname" name="mname" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        
        <div class="form-group">
            <label for="admdate">Admission Date:</label>
          <input type="date" class="form-control" id="admdate" name="admdate" required>
        </div>
        
        <div class="form-group">
            <label for="exdate">Expire Date:</label>
          <td><input type="date" class="form-control" id="exdate" name="exdate" required></td>
        </div>
        <div class="form-check">
        <input class="form-check-inpu" type="checkbox" name="check6" value="on" id="check6" >
        <label class="form-check-labe" for="flexCheckDefault" style="color:black;">
          Add 6 years to Expire date
        </label>
          </div>
        <div class="form-group">
          Branch<br>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios1"  value="CSE" >
          <label class="form-check-label" name="exampleRadios1" for="exampleRadios1">
            Computer Science and Engineering 
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios2" value="AS">
          <label class="form-check-label" name="exampleRadios2" for="exampleRadios2">
            Applied Science
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios3" value="CE">
          <label class="form-check-label" name="exampleRadios3" for="exampleRadios3">
            Civil Engineering
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios4" value="EE">
          <label class="form-check-label" name="exampleRadios4" for="exampleRadios4">
            Electrical Engineering
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios5" value="ME">
          <label class="form-check-label" name="exampleRadios5" for="exampleRadios5">
            Mechanical Engineering
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios6" value="ECE">
          <label class="form-check-label" name="exampleRadios6" for="exampleRadios6">
            Electronics & Communication Engineering
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios7" value="IT">
          <label class="form-check-label" name="exampleRadios7" for="exampleRadios7">
            Information Technology
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios8" value="BA">
          <label class="form-check-label" name="exampleRadios8" for="exampleRadios8">
            Business Administration
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadios" id="exampleRadios9" value="CA">
          <label class="form-check-label" name="exampleRadios9" for="exampleRadios9">
            Computer Applications
          </label>
        </div>
        <div name="error" class="error" id="error"></div>
      </div>

      <div class="form-group">
        Courses
        <br>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadioss" id="exampleRadios10" value="UG" >
          <label class="form-check-label" name="exampleRadios10" for="exampleRadios10">
          Undergraduate
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-inpu" type="radio" name="exampleRadioss" id="exampleRadios11" value="PG" >
          <label class="form-check-label" name="exampleRadios11" for="exampleRadios11">
          Postgraduate
          </label>
        </div>
        <div name="error1" class="error1" id="error1"></div>
        <div name="error2" class="error2" id="error2"></div>
        <button type="submit" id="submit_btn" class="btn btn-primary">Submit</button>
      </form>
  
    </div>

    <h4>Upload Excel File</h4>
      <form method="POST" action="exluplod.php" class="form-horizontal well" name="upload_excel" enctype="multipart/form-data">

        <label for="exampleInputFile" class="file-upload btn btn-primary" >Choose File

        <input type="file" class="uploadFile" name="uploadFile" id="uploadFile" accept=".xls,.xlsx" max="2097152"required/></label>

        <button type="submit" name="submit" id="submit" class="btn btn-success" value="submit" >Upload</button>
      </form>

    <?php
      
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $mnum = $_POST["mnum"];
      $stuname = $_POST["stuname"];
      $fname = $_POST["fname"];
      $mname = $_POST["mname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      
      $admdate = $_POST["admdate"];
      $exdate = $_POST["exdate"];
      $check6=$_POST["check6"];
      $exampleRadios = $_POST["exampleRadios"];
      $exampleRadioss = $_POST["exampleRadioss"];
      $bcode="GNE";

   //   echo nl2br("$mnum \n $stuname \n $fname \n $mname \n $email \n $phone \n $admdate \n $exdate \n $check6 \n $exampleRadios \n $exampleRadioss \n $bcode");
      
      if ($check6 == "on"){
        $exdate = date('Y-m-d', strtotime($exdate. ' + 6 years'));
        echo $exdate;
      }

      if ($exampleRadios != "" && $exampleRadioss != "" ){
        $sql="INSERT INTO `gnestu`(`MEM_NO`,`MEM_NAME`,`Fname`,`Mname`,`MEM_EMAIL`,`MEM_TELEPHONE`,`MEM_ADM_DATE`,`MEM_CLOSE_DATE`,`GRP_NAME`,`DESIG_NAME`,`branchcode`) VALUES ('".$mnum."','".$stuname."','".$fname."','".$mname."','".$email."','".$phone."','".$admdate."','".$exdate."','".$exampleRadios."','".$exampleRadioss."','".$bcode."')";
//         echo $sql;
         $result = mysqli_query($koha, $sql);

          if(!$result){
            echo '<script>alert("'.mysqli_error($koha).'")</script>';

          }
          console.log("data enterd");
      }
      else if($exampleRadios ==  ""){
        echo "<script>error.innerHTML = 'Required Feild';error.style.color = 'red';</script>";
      }
      else if($exampleRadioss ==  ""){
        echo "<script>error1.innerHTML = 'Required Feild';error1.style.color = 'red';</script>";
      }

    }
    require_once "./template/footer.php"; 
?>