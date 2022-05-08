<?php include('partials/menu.php');?>
<?php 

    require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " select * from admin where Id='".$ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['Id'];
        $FullName = $row['Full_Name'];
        $UserName = $row['User_Name'];
        $Password = $row['Password'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
<body>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-light mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-white text-center py-3"> Update Admin</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $ID?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Full Name " name="full_name" value="<?php echo $FullName ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="username" value="<?php echo $UserName ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Password " name="password" value="<?php echo $Password ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<?php include('partials/footer.php');?>

