<?php
session_start();

$con =mysqli_connect('localhost' ,'jitesh kumar' , '03022001');
mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' &&password='$pass' ";
$result = myqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('login.html.html');
    
}
else{
    header('registration.php');
    
}
?>