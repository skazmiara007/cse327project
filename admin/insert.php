<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['full_name']) || empty($_POST['username']) || empty($_POST['password']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Full_Name = $_POST['full_name'];
            $User_Name = $_POST['username'];
            $Password = $_POST['password'];

            $query = " insert into admin (Full_Name,User_Name,Password) values('$Full_Name','$User_Name','$Password')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:manage-admin.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:add_admin.php");
    }



?>