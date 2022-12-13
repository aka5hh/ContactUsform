<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO 'contactform' ('name','email','phone','message') VALUES ('".$name."','".$email."','".$phone."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Something went wrong" . $mysqli->error;
}
echo "Thank you for submitting your query";
$mysqli->close();






?>