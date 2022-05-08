<?php include('partials-front/menu.php');?> 

    <!-- Service search section starts here-->
    <section class ="service-search text-center">
     <div class= "Container">
        <form action="services-search.php" method="POST">
          <input type="search" name="search" placeholder="Search you service...">
          <button class="btn btn-primary" name="submit">Submit</button>
        </form>
     </div> 
    </section>
    <!-- Service search section ends here--> 

     <!-- Service Catagory section starts here-->
   <section class ="Service-Catagory">
    <div class= "Container">
       <h2 class="text-center">Service Category</h2>

       <?php 

         $query = " select * from category where Active='Yes' limit 4";
         $result = mysqli_query($con,$query);

         $rows = mysqli_num_rows($result);
         if($rows>0)
         {
          while($row=mysqli_fetch_assoc($result))
          {
              $ID = $row['Id'];
              $title = $row['Title'];
              $image_name = $row['Image_Name'];
              //$active = $row['Active'];

              ?>
                  <!--Home-->
                <a href="category-services.php?category_title=<?php echo $title; ?>">
                <div class="box-4 float-container">
                   <?php
                   //check image name
                      if($image_name=="")
                      {
                        echo "<div class='error'>Image unavailable</div>";
                      }
                      else
                      {
                        ?>
                        <img src="images/category/<?php echo $image_name?>" alt="Home" class="img-responsive img-curve">
                        <?php
                      }
                   ?>

                  <h3 class="float-text text-white"><?php echo $title;?></h3>
               </div>
               </a>

              <?php

          }
         }
         else
         {
           echo"<div class ='error'>Category is not Added</div>";
         }

       ?>

      <div class="clearfix"></div>
    </div> 
    </section>
    <!--Service Catagory section ends here--> 
    
    <!--Top service section stars here-->
    <section class="Top-Service">
      <div class=" Container">
        <h2 class="text-center"> Top Services</h2>

       <?php
            $query2= " select * from service where Active='Yes' limit 6";

            $result2 = mysqli_query($con,$query2);

            $rows2 = mysqli_num_rows($result2);
            if($rows2>0)
            {
             while($row = mysqli_fetch_assoc($result2))
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
                      <p class="service-price">TK.<?php echo $price;?> (<?php echo $price_des;?>)</p>
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
    
 