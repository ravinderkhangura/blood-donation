<?php

include_once("myconnection.php");



$needyid=$_GET["needyid"];

$query="select * from needyprofile where needyid='$needyid'";
$table=mysqli_query($dbcon,$query);
$ary=array();

while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}

echo json_encode($ary);


?>