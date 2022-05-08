<?php
    
    require_once("connection.php");

    if(isset($_POST['login']))
    {
        $password = $_GET['password'];
        //process for login
        //1.get dat from login form
         $username=$_POST['username'];
         $password=$_POST['password'];
         //2.data exist
         $query="SELECT * FROM admin WHERE username = '$username' AND passwoed = '$password'";

         //3.Execute Query
         $result = mysqli_query($con,$query);

         //4.check user exist
         $count = mysqli_num_rows($result);
         if($count==1)
         {
             //login success
             header("location:index.php");
         }
         else
         {
            //failed
            header("location:login.php");
         }
    }
?>