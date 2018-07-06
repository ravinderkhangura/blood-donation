<?php

include_once("myconnection.php");



if($_POST["btn"]=="save")
    doCreate($dbcon);
else
    if($_POST["btn"]=="update")
        doUpdate($dbcon);






function doCreate($dbcon)
{
   
    $name=$_POST["name"];
    $idproof=$_POST["idproof"];
    $mobile=$_POST["mobile"];
    $address=$_POST["address"];
    $city=$_POST["city"];

   
    
    
    
    
    $orgname = $_FILES["proofpic"]["name"];
   $tmpname= $_FILES["proofpic"]["tmp_name"];
 move_uploaded_file($tmpname,"uploads/".$orgname);
    
    $query= "insert into needyprofile (name,idproof,proofpic,mobile,address,city) values('$name','$idproof','$orgname','$mobile','$address','$city')";
    
    mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
      {  
        //    fetching uid
        $lastid=mysqli_insert_id($dbcon);

        
     echo "PROFILE SAVED...YOUR NEEDY ID is--->".$lastid;
    }   
     
     else
        echo mysqli_error($dbcon);
    
  }

function doUpdate($dbcon)
{ 
    $needyid=$_POST["needyid"];
    $name=$_POST["name"];
    $idproof=$_POST["idproof"];
    $mobile=$_POST["mobile"];
    $address=$_POST["address"];
    $city=$_POST["city"];

   
    
    
    
    
    $orgname = $_FILES["proofpic"]["name"];
   $tmpname= $_FILES["proofpic"]["tmp_name"];
if($orgname=="")
    {
        $orgname=$_POST["hdn"];
        
    }
    else
 move_uploaded_file($tmpname,"uploads/".$orgname);    
    
    $query= "update needyprofile set name='$name',idproof='$idproof',mobile='$mobile',address='$address',city='$city' where needyid='$needyid'";
    
    mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
     echo "PROFILE UPDATED...";
     else
        echo mysqli_error($dbcon);
     
}













?>