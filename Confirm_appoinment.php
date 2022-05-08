<?php 
    
    require_once("admin/connection.php");
    if(isset($_POST['submit']))
    {
        //get details
        $service_title = $_POST['stitle'];
        $price = $_POST['price'];
        $price_des = $_POST['price_des'];
        $dat = $_POST['dat'];
        $mea = $_POST['mea'];
        $total=$price * $mea; //total=price X measure
        $appoint_dat=date("y-m-d h:i:sa");//appoinment made time
        $status="Appoint";// Appoint, Working, Done, Cancelled
        //customar details
        $c_name=$_POST['full-name'];
        $c_contact=$_POST['contact'];
        $c_email=$_POST['email'];
        $c_address=$_POST['address'];

        $query = " insert into appointment (service,price,price_des,appointment_on,measure,total,appointment_made,status, customer_name,customer_contact,customer_email,customer_address)
                values('$service_title','$price','$price_des','$dat','$mea','$total','$appoint_dat','$status','$c_name','$c_contact','$c_email','$c_address')";
       
        //execution query
        $result = mysqli_query($con,$query);

        if($result)
            {
                header("location:confirm.php");
            }
            else
            {
                echo '  Please Check Your Data ';
            }

    }
    
?>