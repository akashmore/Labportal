<?php
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
 $mysql_database = "lab";
 $prefix = "";
 $bd = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

 mysql_select_db($mysql_database, $bd) or die("Could not select database");
 $name=$_POST['name'];
 $pass=$_POST['pass'];
 $qry="SELECT uname,passwd FROM labadmin WHERE uname='$name' AND passwd='$pass'";
 $result=mysql_query($qry)or die(mysql_error());
 $num_row=mysql_num_rows($result);
 if( $num_row ==1) 
   {
    echo '<script language="javascript">';
    echo 'alert("login successfully")';
    echo '</script>';
    header("refresh:2;url=adminshow.php");
     } 
    else
    {
     echo '<script language="javascript">';
     echo 'alert("login failed")';
     echo '</script>';
     header("refresh:2;url=admin.php");
    }

?>
