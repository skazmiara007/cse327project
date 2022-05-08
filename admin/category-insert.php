<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['title']) || empty($_POST['active']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $title = $_POST['title'];
            $active = $_POST['active'];

            if(isset($_FILES['image']['name']))
            {
                //uplode image
                //to uplode image we need image name, source path and destination path
                $image_name = $_FILES['image']['name'];
                //auto rename image
                //Get Extension (jpg, png, gif, etc) e.g."Home1.jpg"
                $ext = end(explode('.', $image_name));

                //Rename the image
                $image_name="Service_Category_".rand(000, 999).'.'.$ext; // e.g."Service_Category_876.jpg"
                

                $source_path = $_FILES['image']['tmp_name'];
                $destination_path = "../images/category/". $image_name;
                $uplode= move_uploaded_file($source_path, $destination_path );    
            
            }
            else
            {
                //don't uplode
                $image_name = "";
            }

            $query = " insert into category (Title,Image_Name,Active) values('$title', '$image_name','$active')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:manage-category.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:add_category.php");
    }



?>       