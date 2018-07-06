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
    $query= "insert into ngoregisteration values('$regno','$ngoname','$address','$city','$contact','$email','$president','$pmobile','$yoe','$members','$info')";
    
    mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
        echo "Registeration Completed....";
    else
        echo mysqli_error($dbcon);

}

else
    echo "fill information correctly";
    

?>