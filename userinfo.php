<?php

$con=mysqli_connect('localhost','root');
if($con){
	echo "CONNECTON SUCCESSFULL";

}
else{
	echo "No connection";
}

mysqli_select_db($con,'user_data');

$eid1=$_POST['id'];
$fname1=$_POST['fname'];
$lname1=$_POST['lname'];
$city1=$_POST['city'];
$dob1=$_POST['dob'];

$query=" insert into employee_record (eid,efname,elname,ecity,edate) values ('$eid1','$fname1','$lname1','$city1','$dob1')";

echo "DATA ENTERED SUCCESFULLY";
mysqli_query($con,$query);


?>
