<?php
// database connection mode
// $con = mysqli_connect('localhost', 'database_user', 'database_password', 'database')

$con = mysqli_connect('localhost', 'bagas7', 'BaL4_CL@vA', 'randmu');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtSubject = $_POST['txtSubject'];
$txtMessage = $_POST['txtMessage'];

// database insert sql code
$sql = "INSERT INTO `contact_us` (`ID`, `fldName`, `fldEmail`, `fldSubject`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Contact Records Inserted";
}

?>