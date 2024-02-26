<?php
$username="root";
$password="";
$host="127.0.0.1";
$database="bo_qt";

$conn=new mysqli($host,$username,$password,$database);

if(!$conn->connect_errno){
  //echo 'Connected Successfully !';
}else{
    echo 'Error : '.$conn->connect_error;
}
