<html>




<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<title>Donar_Profile</title>
    
    
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    

    <style>
        
        #head
        {
            margin-top: 100px;
            text-shadow: 3px 3px 3px gray;
            font-size: 40px;
           font-family: Calibri;
            font-weight: bold;
            text-decoration: underline;
        }
    
        .mrg
        {
            margin-top: 50px;
            font-family: calibri;
            font-weight: bold;
        }
        
        .base
        {
            border: 1px solid  #801a00;
        }
    
        
   input[type="text"]
        {
          box-shadow: 3px 3px 3px black;
        }
        
         button
        {
          box-shadow: 3px 3px 3px black;
        }
    
        select
        {
                      box-shadow: 3px 3px 3px black;

        }
        
          .bg
        {
             
               left: 0;
               top: 0;
          width: 100%;
             height: 100%;
            background-size: cover;
        background-repeat: no-repeat;
            background-image: url(pics/bg2.jpg);
        
           
        }
         
        .trans
        {
             background: rgba(120,110,100,.5);
        }
        
       
    </style>
    
    <script type="text/javascript">
    
    
      
        $(document).ready(function(){
            
            $("#search").click(function(){
                
               $needyid = $("#needyid").val();
                
                $.getJSON("fetch-needy-profile.php?needyid="+$needyid,function(jasonArray){
                    
                    
                    $("#name").val(jasonArray[0].name);
                    $("#idproof").val(jasonArray[0].idproof);
                    $("#mobile").val(jasonArray[0].mobile);
                    
                    $("#address").val(jasonArray[0].address);
                    $("#city").val(jasonArray[0].city);
                                        
                    $("#hdn").val(jasonArray[0].proofpic);
                    
                    
                });
            
            });  
        
        }); 
         
        
    
    
    </script>
    </head>
    
    
    
    <body class="bg">
        
        <container >
           
           
           
           <form name="frm" action="needy-profile-process.php" method="post" enctype="multipart/form-data">
              
                <input type="hidden" id="hdn" name="hdn">

              
               
              <div class="row">
       <div class="col-md-12">
           
           <nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color:#801a00;">
 <a class="navbar-brand " href="#">
    <img src="pics/donateblood.png" width="50" height="50" class="d-inline-block align-items-center" alt="">
    Blood Donation
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white " href="#">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link text-white" href="donor-profile.php">Donar<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link text-white" href="ngo-registeration.html">N.G.O<span class="sr-only">(current)</span></a>
      </li>
      
       <li class="nav-item active">
        <a class="nav-link text-white" href="needy-profile.php">Needy<span class="sr-only">(current)</span></a>
      </li>
       </ul>
    
    
      <input class="form-control col-2 mr-sm-2" type="search" name="needyid" id="needyid" placeholder="Needy ID" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0 " type="button" name="btn" id="search" value="search" >Search</button>
    
  </div>
</nav>
                 
       </div>
        
    </div>  
               
               
              
               
       <center class="col-10 offset-1 trans">       
                 
                   
                     <!--      heading   -->
        
         <div id="head">Needy Profile</div>
                 
                 
                 <!--        name-->
   <div class="form-group row mrg">
    <label for="name" class="col-1 offset-4 col-form-label">Name </label>
    <div class="col-3">
      <input type="text" class="form-control" id="name" name="name" placeholder="needy name">
    </div>
  </div>
  
  
<!--  proof-->
   <div class="col-auto my-1">
      <label class="mr-sm-2 mrg" for="idproof">ID Proof  </label>
      <select class="custom-select mr-sm-2 col-2" id="idproof" name="idproof" >
        <option selected>select</option>
        <option value="Adhaar Card">Adhaar Card</option>
        <option value="Driving License">Driving License</option>
        <option value="PAN Card">PAN Card</option>
        <option value="Voter Card">Voter Card</option>
      </select>
      
      <!--    browse pic --> 
        <div class="custom-file" style="width:100px;">
  <input type="file" class="custom-file-input" id="proofpic" name="proofpic">
  <label class="custom-file-label" for="customFile"></label>
</div>
        
    </div>
    
    
    
                 <!--        mobile-->
   <div class="form-group row mrg">
    <label for="mobile" class="col-2 offset-3 col-form-label">Mobile </label>
    <div class="col-3">
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile">
    </div>
  </div>
                 
                    <!--      address-->
    <div class="form-group row mrg">
    <label for="address" class="col-2 offset-3 col-form-label">Address </label>
    <div class="col-2">
       <textarea rows="3" cols="40" id="address" name="address" placeholder=".....address...."></textarea>
       
        </div>
  </div>  
                
                 
                                
                 <!--        city-->
   <div class="form-group row mrg">
    <label for="city" class="col-1 offset-4 col-form-label">City </label>
    <div class="col-3">
      <input type="text" class="form-control" id="city" name="city" placeholder="city">
    </div>
  </div>  
            
              <br><hr class="col-6" style="height:1px; background-color:#801a00;"><br>
           
                        <button type="submit" class="btn btn-primary" name="btn" id="save" value="save">Save</button>
                        <button type="submit" class="btn btn-dark" name="btn" id="update" value="update">Update</button>
                       

  

            <br><br><hr class="col-6" style="height:1px; background-color:#801a00;"><br>
             
                    
                   
               </center>
                   
                
               
           </form>
            
        </container>
        
    
    </body>
   
  
</html>