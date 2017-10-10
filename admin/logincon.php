<?php
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$con = mysql_connect("localhost", "root", "" );
mysql_select_db( "nmj" );

$result = mysql_query("select * from users where username = '$username' and password = '$password'")
           or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);

 

   if ($row['username'] == $username && $row['password'] == $password )
     {
         echo"<script>alert('You Login Was Successful. Welcome !!')</script>";
         echo"<script>window.open('admin.php','_self')</script>";
     $_SESSION['username']=$username;
       $_SESSION['id']=mysqli_insert_id($con);
     }

   else
     {
         echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('login.php','_self')</script>";  
     }   

   
?>