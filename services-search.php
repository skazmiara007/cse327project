<?php include('partials-front/menu.php');?> 

     <!-- Service search section starts here-->
     <section class ="service-search text-center">
        <div class= "Container">
        <?php
            //get search key word
            $search=$_POST['search'];
        ?>
        <h2>Services on Your Search <a href="#" class="text-white">"<?php echo $search;?>"</a></h2>
        </div> 
       </section>
       <!-- Service search section ends here-->

         <!--Top service section stars here-->
    <section class="Top-Service">
        <div class=" Container">
          <h2 class="text-center">Services</h2>
           <?php
              //queary for search food
              $query = "SELECT * FROM service WHERE Title LIKE '%$search%' or Description like '%$search%'";
              $result = mysqli_query($con, $query);

            $rows = mysqli_num_rows($result);
            if($rows>0)
            {
             while($row = mysqli_fetch_assoc($result))
             {
              $ID = $row['Id'];
              $service_title = $row['Title'];
              $price = $row['Price'];
              $price_des = $row['Price_des'];
              $discription = $row['Description'];
              $image_name = $row['Image_Name'];
              //$category_title = $row['Category_Title'];
             // $active = $row['Active'];
             ?>
                <!--1-->
                 <div class="top-service-box">
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
                      <p class="service-price">Tk.<?php echo $price;?> (<?php echo $price_des;?>)</p>
                      <p class="service-detail"><?php echo $discription;?></p>
                      <br>
                      <a href="appoinment.php?service_id=<?php echo $ID;?>" class="btn btn-primary">Appoint Now</a>
                   </div>
                 </div>
               <?php
             }
            }
            else
            {
              echo"<div class ='error'>Service is not Added</div>";
            } 
            
       ?>
  
         <div class="clearfix"></div>
        </div>
      </section>
      <!--Top service section endss here--> 

      <?php include('partials-front/footer.php');?>

