<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $service_title = $_POST['stitle'];
        $discription = $_POST['discription'];
        $price = $_POST['price'];
        $image_name = $_FILES['image']['name'];
        $category_title = $_POST['ctitle'];
        $active = $_POST['active'];
         
        $query = " select * from service where Id='".$ID."'";
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

        $query = " update service set Title = '".$service_title."', Description = '".$discription."', Price = '".$price."', Image_Name='".$image_data."', Category_Title = '".$category_title."', Active='".$active."' where Id='".$ID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            if($image_name==NULL)
            {
                header("location:manage-service.php");
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
        header("location:manage-service.php");
    }


?>