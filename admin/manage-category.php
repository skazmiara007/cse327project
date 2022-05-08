<?php include('partials/menu.php');?>

<!--Main Contain section starts-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" a href="../css/bootstrap.css"/>
</head>
<body>
  <div class= "main-contain">
     <div class="container">
        <div class ="wrapper">
           <h3>Manage Category</h3>
           <br>
           <a href="add_category.php" class="btn btn-primary">Add Category</a>
        </div>
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                <?php 

                 require_once("connection.php");
                 $query = " select * from category ";
                 $result = mysqli_query($con,$query);
                 if(mysqli_num_rows($result)> 0)
                 {

                 ?>
                    <table class="table table-bordered">
                        <tr>
                            <td>ID</td>
                            <td> Title</td>
                            <td> Image Name</td>
                            <td> Active</td>
                            <td class="text-center py-3"> Action</td>
                        </tr>

                        <?php 
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['Id'];
                                    $title = $row['Title'];
                                    $image_name = $row['Image_Name'];
                                    $active = $row['Active'];
                        ?>
                                <tr>
                                    <td><?php echo $ID ?></td>
                                    <td><?php echo $title ?></td>
                                    <td><?php echo '<img src ="../images/category/'.$row['Image_Name'].'" width="100px;" height="60px;" alt="Image">'?></td>
                                    <td><?php echo $active ?></td>
                                    <td class="text-center"> 
                                    <a href="category-edit.php?GetID=<?php echo $ID ?>" class="btn btn-success ">Edit Catagory</a>
                                    <a href="category-delete.php?Del=<?php echo $ID ?>" class="btn btn-danger ">Delete Category</a>
                                    </td>
                                </tr>        
                        <?php 
                            }  
                        ?>                                                                    
                    </table>
                    <?php 
                            }  
                        ?> 
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
       <!--Main Contain section ends-->
       
<?php include('partials/footer.php');?>