<?php

include_once("myconnection.php");



if($_POST["btn"]=="save")
    doCreate($dbcon);
else
    if($_POST["btn"]=="update")
        doUpdate($dbcon);






function doCreate($dbcon)
{
   
   $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $bloodgroup=$_POST["bloodgroup"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $mobileno=$_POST["mobileno"];
    $blooddonated=$_POST["blooddonated"];
    $medicalhistory=$_POST["medicalhistory"];
    
    
    
    
    $orgname = $_FILES["profilepic"]["name"];
   $tmpname= $_FILES["profilepic"]["tmp_name"];
 move_uploaded_file($tmpname,"uploads/".$orgname);
    
    $query= "insert into donorprofile (profilepic,fname,lname,age,bloodgroup,gender,address,city,mobileno,blooddonated,medicalhistory) values('$orgname','$fname','$lname','$age','$bloodgroup','$gender','$address','$city','$mobileno','$blooddonated','$medicalhistory')";
      
    mysqli_query($dbcon,$query);

    
    

    
    
    if(mysqli_error($dbcon)=="")
    {  
        //    fetching uid
        $lastid=mysqli_insert_id($dbcon);

        
     echo "PROFILE SAVED...YOUR DONOR ID is--->".$lastid;
    }
     else
        echo mysqli_error($dbcon);
    
  }

function doUpdate($dbcon)
{ 
    $uid=$_POST["uid"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $bloodgroup=$_POST["bloodgroup"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $mobileno=$_POST["mobileno"];
    $blooddonated=$_POST["blooddonated"];
    $medicalhistory=$_POST["medicalhistory"];
    
    
    
    
    $orgname = $_FILES["profilepic"]["name"];
   $tmpname= $_FILES["profilepic"]["tmp_name"];
    
    
    if($orgname=="")
    {
        $orgname=$_POST["hdn"];
        
    }
    else
 move_uploaded_file($tmpname,"uploads/".$orgname);
    
    $query= "update donorprofile set profilepic='$orgname',fname='$fname',lname='$lname',age='$age',bloodgroup='$bloodgroup',gender='$gender',address='$address',city='$city',mobileno='$mobileno',blooddonated='$blooddonated',medicalhistory='$medicalhistory' where uid='$uid'";
    
    mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
        echo "PROFILE UPDATED...";
    else
        echo mysqli_error($dbcon);

}













?>