<?php

include_once("myconnection.php");


$query="select * from donorprofile";

$table=mysqli_query($dbcon,$query);

$ary=array( );

while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}

echo json_encode($ary);



?>