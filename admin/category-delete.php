<?php

        require_once("connection.php");
        
        if(isset($_GET['Del']))
        {
             $ID = $_GET['Del'];
             $query = " delete from category where Id = '".$ID."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:manage-category.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:manage-category.php");
         }
?>
         