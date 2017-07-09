<?php
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
 $mysql_database = "lab";
 $prefix = "";
 $bd = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

  mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Lab portal</title>
  <link rel="stylesheet" href="css/style.css">
  
</head>
 <script src="js/index.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.js"></script>
	 
	 <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" >
  
  <div class="container-fluid" style="color:#42a5f5">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="about.html"><span><i class="glyphicon glyphicon-eye-open"></i> LabPortal</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="#"><span ><i class="glyphicon glyphicon-home"></i>  Home</span></a></li>
		 <li><a href="#"><span ><i class="glyphicon glyphicon-paste"></i>  Export</span></a></li>
         <li><a href="#" ><span><i class="glyphicon glyphicon-search"></i>  search</span></a></li>
         <li><a href="#"><span><i class="glyphicon glyphicon-pencil"></i> Notices</span></a></li> 
        <li><a href="#"><span><i class="glyphicon glyphicon-comment"></i>  Query</span></a></li> 
      
   

      </ul>
    </div>
  </div>

</nav>
    
 <div class="container-fluid">
 
  <div class="row">
    <div class="col-sm-3" style="background-color:#222;height:600px;color:#e0e0e0">
        <br><br>
        <div class="column">
            <div class="row-sm-8" style="height:250px">
        <h3>Query's</h3>
        <hr>
                <h3>1.My 4 GB pendrive of sony lost at afternoon</h3>
                 <h3>2.My 4 GB pendrive of sony lost at afternoon</h3>
                
                </div>
            <div class="row-sm-4" style="height:250px">
                <h3>Notice's</h3>
                <hr>
            </div>
        </div>
        
     
    </div>
	<div class="col-sm-6">
     <br><br><br><br><br><br>
        <center><h2>Today's Register</h2></center>
        <br>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>PRN</th>
        <th>Name</th>
        <th>Class</th>
        <th>Time</th>
        <th>Date</th>  
      </tr>
    </thead>
    <tbody>
    <tr>      
    <?php
     $qry="SELECT * FROM `login`";
     $result=mysql_query($qry)or die(mysql_error());
     if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        ?>
        <td><?php echo $row["prn"]?></td>
        <td>&nbsp&nbsp&nbsp<?php echo  $row["fname"]?></td>
        <td>&nbsp&nbsp&nbsp<?php echo  $row["year"]?></td>
        <td>&nbsp&nbsp&nbsp<?php echo  $row["time"]?></td>
        <td>&nbsp&nbsp&nbsp<?php echo  $row["date"]?></td>
      </tr>
         <?php
         }}?>
    </tbody>
  </table>
</div>
 <div class="col-sm-3">
 </div>
 </div>
    </div>     
     <!--modal-->
    <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button></center>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
    </div>
    <!--modal end-->
     
</body>
</html>