<html>
    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Donar-table</title>
           
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="java-script/angular.min.js"></script>
       
       
       
       <style>
        
            #head
        {   border-top: 2px solid #801a00;
            text-shadow: 3px 3px 3px white;
            font-size: 60px;
           font-family: Calibri;
            font-weight: bold;
            text-decoration: underline;
            background-color: #801a00;
             background: rgba(120,110,100,.5);
          

        }
           
            #head:hover
           {
            background-color: black;
               transform: scale(1.2);
               color: #801a00;
           }
           
        .hero1
           {  padding-top: 20px;
               margin-top: 1px;
               background-color:#801a00;
               height:70px;
           }
           
            .hero2
           {  padding-top: 15px;
               margin-top:10px; 
               background-color:#801a00;
               height:60px;
           }
        </style>
        
        <script type="text/javascript">
        
        
        var myapp= angular.module("app",[]);
         
            myapp.controller("mycontroller",function($scope,$http)
            {
                $scope.jasonArray=[];
                
                $scope.fetchall=function()
                {
                    
                    $http.get("needy-table-angular-process.php").then(ok,notok)
                    
                    function ok($jasonArray)
                    {
                        $scope.jasonArray=$jasonArray.data;
                    }
                    
                    function notok(error)
                    {
                        alert(error.data);
                    }
                    
                }
                
                
                
                
                
            });
        
        
        
        
        </script>
    </head>
    
    
    <body ng-app="app" ng-controller="mycontroller">
       
       <center>
          
            <div id="head">Needy Records</div>
            
           <div class="hero1">
               <input type="button" class="btn btn-outline-light  " value="Fetch Needy Records" ng-click="fetchall();" >
           </div>
           <div class="hero2" >
              <input type="text" class="form-control" ng-model="search" placeholder="search..." style="width:200px;">
               
           </div>
           
       </center>
        
        
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Needy ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">ID-Proof</th>
      <th scope="col">ID-Proof-Pic</th>
    
    </tr>
  </thead>
  <tbody>
    <tr ng-repeat="record in jasonArray | filter:search">
      <th scope="row">{{record.needyid}}</th>
      <td>{{record.name}}</td>
      <td>{{record.mobile}}</td>
      <td>{{record.address}}</td>
      <td>{{record.city}}</td>
      <td>{{record.idproof}}</td>
      <td><img ng-src="uploads/{{record.proofpic}}" height="100px" width="100px"></td>
      
     
    </tr>
   
     
  </tbody>
</table>

        </div>
    </body>
    
</html>