<?php
   include('connection.php');
   error_reporting(0); 
   session_start();
   $db = mysqli_select_db($conn,'gita');
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select userid from user where userid= '$user_check'");
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['userid'];
   
   if(!isset($_SESSION['login_user'])){
      
      header("Location:index.php");
   }
