<?php

include_once("myconnection.php");

$regno=$_GET["regno"];
$ngoname=$_GET["ngoname"];
$address=$_GET["address"];
$city=$_GET["city"];
$contact=$_GET["contact"];
$email=$_GET["email"];
$president=$_GET["president"];
$pmobile=$_GET["pmobile"];
$yoe=$_GET["yoe"];
$members=$_GET["members"];
$info=$_GET["info"];
    
if($regno!=""&&$ngoname!=""&&$address!=""&&$city!=""&&$contact!=""&&$email!=""&&$president!=""&&$pmobile!=""&&$yoe!=""&&$members!=""&&$info!="")

{
    $query= "update ngoregisteration set ngoname='$ngoname',address='$address',city='$city',contact='$contact',email='$email',president='$president',pmobile='$pmobile',yoe='$yoe',members='$members',info='$info' where regno='$regno'";
    
    mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
    { if(mysqli_affected_rows($dbcon)==0)
            echo "Invalid";
        else
            echo "RECORD UPDATED";
    }
    else
        echo mysqli_error($dbcon);

}

else
    echo "fill information correctly";
    

?>