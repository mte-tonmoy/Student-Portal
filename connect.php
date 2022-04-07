<?php

$con = mysqli_connect('localhost', 'root', '','Portal');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$stid = $_POST['stid'];
$bach_num = $_POST['bach_num'];
$sec = $_POST['sec'];
$coco = $_POST['coco'];
$cotit = $_POST['cotit'];
$password = $_POST['password'];
$conpass = $_POST['conpass'];
$Semester = $_POST['Semester'];


$sql = "INSERT INTO `Students` (`First_Name`, `Last_Name`, `Email`, `Student_ID`, `Batch_Number`,`Section`,`Course_Code`,`Course_Title`,`Password`,`Confirm_Password`,`Semester`) VALUES ('$firstname', '$lastname', '$email', '$stid','$bach_num', '$sec', '$coco', '$cotit', '$password', '$conpass', '$Semester')";



$rs = mysqli_query($con, $sql);


if($rs)
{
	echo "Registration Completed Successfully ";
}

?>
