<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $Full_Name = $_POST['full_name'];
        $User_Name = $_POST['username'];
        $Password = $_POST['password'];


        $query = " update admin set Full_Name = '".$Full_Name."', User_Name='".$User_Name."',Password='".$Password."' where Id='".$ID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:manage-admin.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:manage-admin.php");
    }


?>