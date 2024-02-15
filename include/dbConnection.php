<?php
$username="root";
$password="";
$host="127.0.0.1";
$database="blueocan_quiktrack";

$conn=new mysqli($host,$username,$password,$database);

if(!$conn->connect_errno){
  //echo 'Connected Successfully !';
}else{
    echo 'Error : '.$conn->connect_error;
}
