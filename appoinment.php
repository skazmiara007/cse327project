<?php include('partials-front/menu.php');?> 
    
    <?php
    //check id
    if(isset($_GET['service_id']))
    {
        //get id
        $service_id = $_GET['service_id'];
        //get category title based on category id
        $query = "select * from service where Id='$service_id'";
        //executation
        $result = mysqli_query($con,$query);
        //count row
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {            
            //get data from database
            $row = mysqli_fetch_assoc($result);
            $service_title = $row['Title'];
            $price = $row['Price'];
            $price_des = $row['Price_des'];
            $discription = $row['Description'];
            $image_name = $row['Image_Name'];
        
        }
        else
        {
            //go to homepage
            header("location:index.php");
        }

    }
    else
    {
        //go to homepage
        header("location:index.php");
    }
?>


    <!--service-search section starts here-->
    <section class="service-search">
        <div class="Container">
            <h2 class="text-center text-white">Fill this form to confirm your Appoinment.</h2>
            <form action="Confirm_appoinment.php" method="post" class="order">
                <fieldset>
                    <legend><b> Selected Service</b></legend>
                     <div class="top-service-img">
                     <?php
                         
                         if($image_name==" ")
                         {
                          echo "<div class='error'>Image unavailable</div>";
                         }
                         else
                         {
                           ?>
                              <img src="images/service/<?php echo $image_name?>"  alt=" home clean and pest control" class="img-responsive img-curve">
                           
                           <?php
                         }
                      ?>
                     </div>
                     <div class="top-service-desc">
                        <h4><?php echo $service_title;?></h4>
                        <input type="hidden" name="stitle" value="<?php echo $service_title; ?>">
                        <p class="service-price">Tk.<?php echo $price;?> (<?php echo $price_des;?>)</p>
                        <input type="hidden" name="price" value="<?php echo $price;?>">
                        <input type="hidden" name="price_des" value="<?php echo $price_des;?>">
                        <div class="order-lebel"><b>Date And Time</b></div>
                         <input type="datetime-local" name="dat"class="input-responsive" required>
                         <div class="order-lebel"><b>Measures</b></div>
                         <input type="number" name="mea" placeholder="Your(sq.ft.)/laundry/Car Numbers"class="input-responsive" required>
                     </div>
                </fieldset>
                
                <fieldset>
                    <legend> <b>Appoinment Details</b></legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. MS Kabir" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 018xxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. vi@mskabir.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Appoinment" class="btn btn-primary">
                    
                </fieldset>
            </form>
            
        </div>
    </section>
    <!--service-search section starts here-->

<?php include('partials-front/footer.php');?>