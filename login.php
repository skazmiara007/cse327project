<?php 
    
    require_once("connection.php");

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
                            <h3 class="bg-info text-white text-center py-3"> Admin Login</h3>
                        </div>
                        <div class="card-body">

                            <form action="execute-login.php" method="post">
                                   
                                    <input type="text" class="form-control mb-2 " placeholder=" User Name " name="username">
                                    
                                    <input type="text" class="form-control mb-2 " placeholder=" Password " name="password">
                                    <button class="btn btn-info w-100 mt-3" name="login">Login</button>
                            </form>
                            <div class ="card-footer text-right mt-3">
                                 <?php include('partials/footer.php');?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>


