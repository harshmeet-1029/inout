<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-off">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title; ?></title>
		<link rel="icon" type="image/jpg" href="assets/img/faces/logo.jpg"/>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
		<link href="assets/css/material-icons.css" rel="stylesheet" >
		<link href="assets/css/custom.css" rel="stylesheet" >
		<link href="assets/css/material-dashboard.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/clock.css">
		<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    	<script src="assets/js/custom.js" type="text/javascript" ></script>
		<script src="assets/js/plugins/bootstrap-notify.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<?php
			if($table){
		?>
				<link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
				<script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
		<?php
			}
		?>
	<style>
.form-check-label:hover{
color: #000 !important;
}
.form-check .form-check-label{
	padding-left:5px !important;
}
.error .error1{
	color:"red";
}
</style>
<script>
	/*
	const exampleRadios1= document.querySelector('#exampleRadios1');
	const exampleRadios2= document.querySelector('#exampleRadios2');
	const exampleRadios3= document.querySelector('#exampleRadios3');
	const exampleRadios4= document.querySelector('#exampleRadios4');
	const exampleRadios5= document.querySelector('#exampleRadios5');
	const exampleRadios6= document.querySelector('#exampleRadios6');
	const exampleRadios7= document.querySelector('#exampleRadios7');
	const exampleRadios8= document.querySelector('#exampleRadios8');
	const exampleRadios9= document.querySelector('#exampleRadios9');
	const exampleRadios10= document.querySelector('#exampleRadios10');
	const exampleRadios11= document.querySelector('#exampleRadios11');
	
	exampleRadios1.addEventListener('click', () => {
    if (exampleRadios1.checked) {
      document.querySelector('label[for=exampleRadios1]').style.color = 'black';
	  console.log('Option 1 is selected');
    }
	else{
		document.querySelector('label[for=exampleRadios1]').style.color = 'gray';
	}

  });

  exampleRadios2.addEventListener('click', () => {
    if (exampleRadios2.checked) {
      document.querySelector('label[for=exampleRadios2]').style.color = 'black';
    }
  });
  
var myCheckbox = document.getElementsByName("exampleRadios")[0];
var myCheckbox1 = document.getElementsByName("exampleRadioss")[0];
var error = document.getElementById("error");
var error1 = document.getElementById("error1");
var submit_btn = document.getElementById("submit_btn");

myCheckbox.addEventListener("change",function(){

if (!myCheckbox.checked){
// set the value of the div
error.innerHTML = "Required Feild";
// change the color of the text
error.style.color = "red";
submit_btn.disabled=true;
}
else{
	submit_btn.disabled=false;
}
});

myCheckbox1.addEventListener("change",function(){
if(!myCheckbox1.checked) {
submit_btn.disabled=true;
// set the value of the div
error1.innerHTML = "Required Feild";

// change the color of the text
error1.style.color = "red";
}
else{
	submit_btn.disabled=false;
}
});
----------------------------------
const myForm = document.querySelector('#Myform');
const myCheckbox = document.querySelector('input[name=exampleRadios]');
const submitButton = myForm.querySelector('button[type=submit]');
var error = document.getElementById("error");
var error1 = document.getElementById("error1");
  submitButton.addEventListener('click', (event) => {
    if (!myCheckbox.checked) {
      event.preventDefault();
      error.innerHTML = "Required Feild";

	error.style.color = "red";
    }
  });
*/


</script>
	</head>