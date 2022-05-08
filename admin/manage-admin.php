<?php include('partials/menu.php');?>

<!--Main Contain section starts-->
<?php 

require_once("connection.php");
$query = " select * from admin ";
$result = mysqli_query($con,$query);

?>

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
           <h3>Manage Admin</h3>
           <br>
           <a href="add_admin.php" class="btn btn-primary">Add Admin</a>
        </div>
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td>S.no. </td>
                            <td> Full Name </td>
                            <td> User Name </td>
                            <td class="text-center py-3"> Action </td>
                        </tr>

                        <?php 
                                
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['Id'];
                                    $FullName = $row['Full_Name'];
                                    $UserName = $row['User_Name'];
                                   // $Password = $row['Password'];
                        ?>
                                <tr>
                                    <td><?php echo $ID ?></td>
                                    <td><?php echo $FullName ?></td>
                                    <td><?php echo $UserName ?></td>
                                    <td class="text-center"> 
                                    <a href="edit.php?GetID=<?php echo $ID ?>" class="btn btn-success ">Edit</a>
                                    <a href="delete.php?Del=<?php echo $ID ?>" class="btn btn-danger ">Delete</a>
                                </td>
                                </tr>        
                        <?php 
                                }  
                        ?>                                                                    
                               

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
       <!--Main Contain section ends-->
       
<?php include('partials/footer.php');?>