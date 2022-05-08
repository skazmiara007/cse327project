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
           <h3>Manage Service</h3>
           <br>
           <a href="add_service.php" class="btn btn-primary">Add Service</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                <?php 

                 require_once("connection.php");
                 $query = " select * from service ";
                 $result = mysqli_query($con,$query);
                 if(mysqli_num_rows($result)> 0)
                 {

                 ?>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Service-Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col"> Image Name</th>
                            <th scope="col">Category_Title</th>
                            <th scope="col"> Active</th>
                            <th scope="col" class="text-center py-3"> Action</th>

                        </tr>
                        </thead>

                        <?php 
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['Id'];
                                    $service_title = $row['Title'];
                                    $discription = $row['Description'];
                                    $price = $row['Price'];
                                    $image_name = $row['Image_Name'];
                                    $category_title = $row['Category_Title'];
                                    $active = $row['Active'];
 
                        ?>
                                <tr>
                                    <td><?php echo $ID ?></td>
                                    <td><?php echo $service_title ?></td>
                                    <td><?php echo $discription ?></td>
                                    <td><?php echo $price ?></td>
                                    <td><?php echo '<img src ="../images/service/'.$row['Image_Name'].'" width="100px;" height="60px;" alt="Image">'?></td>
                                    <td><?php echo $category_title ?></td>
                                    <td><?php echo $active ?></td>
                                    <td class="text-center"> 
                                    <a href="service-edit.php?GetID=<?php echo $ID ?>" class="btn btn-success ">Edit</a>
                                    <a href="service-delete.php?Del=<?php echo $ID ?>" class="btn btn-danger ">Delete</a>
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