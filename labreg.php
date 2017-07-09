<?php
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
 $mysql_database = "lab";
 $prefix = "";
 $bd = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

mysql_select_db($mysql_database, $bd) or die("Could not select database");
$prn=$_POST['prn'];
$fname=$_POST['fname'];
$class=$_POST['class'];
$date=date("Y-m-d");
date_default_timezone_set('Asia/kolkata');
$time=date("h:i:sa");   
if($prn=="admin@123")
{
  header("refresh:2;url=admin.php");
    die();
}
$qry="INSERT INTO login(prn,fname,year,time,date) VALUES('$prn','$fname','$class','$time','$date')";
if(mysql_query($qry))
{
    echo '<script language="javascript">';
    echo 'alert("Entry registered successfully")';
    echo '</script>';
    header("refresh:2;url=http://192.168.1.8:8090");
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Attempt failed try again")';
    echo '</script>';
    header("refresh:2;url:index.html");
}


?>