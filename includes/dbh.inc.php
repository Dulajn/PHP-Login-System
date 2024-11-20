<?php

$serverName="localhost";
$dbUsername="dulaj123";
$dbPassword="eQlYyDSVBfJ./.eE";
$dbName="login";


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);


if (!$conn) {

die("Connection failed :".mysqli_connect_error());


}else {

echo 'its working';


}





