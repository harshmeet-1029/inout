<?php
	require_once "./functions/dbconn.php";
	require_once "./functions/dbfunc.php";
    require_once "./template/header.php";

// Get the data from the AJAX request

$pass = $_GET["myVariable"];

//echo "<script>$(document).ready  function(){document.getElementById('cl').addEventListener('click',cl_div);function cl_div(){window.prompt('Enter password to ');}});(</script>";

$pass = sha1($pass);

	// get from db
	$query = "SELECT * from users where pass = '".$pass."'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
	$user = mysqli_fetch_assoc($result);
    if ($user['pass'] == $pass){
        header("Location: functions/signout.php");
    }
    else{
        header("Location: dash.php");
    }
?>