<?php
    session_start();
    require_once("connection.php");

    if(isset($_POST['login']))
    {
        //process for login
        //1.get dat from login form
         $username=$_POST['username'];
         $password=$_POST['password'];
         //2.data exist
         $query="select * from admin where User_Name = '$username' AND Password = '$password'";

         //3.Execute Query
         $result = mysqli_query($con,$query);

         //4.check user exist
         $rows = mysqli_num_rows($result);
         if($rows == 1)
         {
             //login success
             echo "login successful";
             $_SESSION['user'] = $username;
             header("location:index.php");
         }
         else
         {
            //failed
            echo "Check your Username & Password";
            header("location:login.php");
         }
    }
?>