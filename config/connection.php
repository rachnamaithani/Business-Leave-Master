<?php

// mysqli_connect('localhost', 'root', '', 'infonix')

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'elms';

$conn = mysqli_connect($server, $user, $password, $db);


if($conn->connect_error){
    die("Connection failed ".$conn->connect_error);
}
else{
    //echo "connection success";
}
/*
if($conn == true){
echo "connection success";
}
*/

?>