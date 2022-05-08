<?php include('partials-front/menu.php');?> 

    <!-- Service Catagory section starts here-->
   <section class ="Service-Catagory">
    <div class= "Container">
       <h2 class="text-center">Service Category</h2>
       <?php 

         $query = " select * from category ";
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

<?php include('partials-front/footer.php');?>