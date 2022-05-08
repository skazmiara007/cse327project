<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $title = $_POST['title'];
        $image_name = $_FILES['image']['name'];
        $active = $_POST['active'];
         
        $query = " select * from category where Id='".$ID."'";
        $result = mysqli_query($con,$query);
        foreach( $result as $fa_row)
        {
            //echo $fa_row['Image_Name'];
            if($image_name==NULL)
            {
                $image_data = $fa_row['Image_Name'];
            }
            else
            {
                //
            }
        }

        $query = " update category set Title = '".$title."', Image_Name='".$image_data."', Active='".$active."' where Id='".$ID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            if($image_name==NULL)
            {
                header("location:manage-category.php");
            }
            else
            {
                //update and replace
        
            }
            //header("location:manage-category.php");
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