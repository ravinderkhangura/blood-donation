<?php

include_once("myconnection.php");



$regnofetch=$_GET["regnofetch"];

$query="select * from ngoregisteration where regno='$regnofetch'";
$table=mysqli_query($dbcon,$query);
$ary=array();

while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}

echo json_encode($ary);


?>