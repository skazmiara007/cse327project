<?php 

include("admin/connection.php");
$query = " select * from appointment order by id desc limit 1";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-light mt-5">
                        <div class="card-title">
                            <h3 class="bg-info text-white text-center py-3"> Appoinment Confirm </h3>
                        </div>
                        <div class="card-body">
                        <?php 
                               
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $id = $row['id'];
                                    $service_title=$row['service'];
                                    $dat=$row['appointment_on'];
                                    $customer_name = $row['customer_name'];
                                    $customer_contact= $row['customer_contact'];
                                    $customer_email = $row['customer_email'];
                                    $customer_address= $row['customer_address'];
                                   // $Password = $row['Password'];
                        ?>
                                
                                    <p>
                                    <?php echo $service_title ?><br>
                                    <?php echo $customer_name ?><br>
                                    <?php echo $customer_contact ?><br>
                                    <?php echo $customer_email ?><br>
                                    <?php echo $customer_address ?><br>
                                    <b class="text-center">We will be there on <?php echo $dat ?></b></p>
                                    <div class="text-center"> 
                                    <a href="index.php" class="btn btn-success ">OK</a>
                                    </div>
                                   
                                 
                        <?php 
                                }  
                                mysqli_free_result($result);
                                mysqli_close($con);
                        ?> 
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>