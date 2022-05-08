<?php include('partials-front/menu.php');?> 

<!DOCTYPE html>
<html>
   <head>
       <title>Profile Card</title>
       
       <link rel="stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
    <section class="Top">
    <?php
            $query2= " select * from admin";

            $result2 = mysqli_query($con,$query2);

            $rows2 = mysqli_num_rows($result2);
            if($rows2>0)
            {
             while($row = mysqli_fetch_assoc($result2))
             {
              $ID = $row['Id'];
              $FullName = $row['Full_Name'];
              $UserName = $row['User_Name'];
              $Email = $row['Email'];
              $Password = $row['Password'];
              $image_name = $row['Image_Name'];
            ?>
      <div class="single-box">
       <div class="card-container">
         <div class ="upper-container">
            <div class = "image-container">
            <?php
                         
                         if($image_name==" ")
                         {
                          echo "<div class='error'>Image unavailable</div>";
                         }
                         else
                         {
                           ?>
                              <img src="images/profile/<?php echo $image_name?>">
                           
                           <?php
                         }
                         ?>

             </div>
          </div>
         <div class ="lower-container">
            <h3><?php echo $FullName ?></h3><br>
            <h4> Admin Of Cleaning Service <br><br><img src="https://img.icons8.com/bubbles/50/000000/owner-female.png"/></h4><br>
            <p><?php echo $Email?></p>
            
         </div>
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

</body>
</html>
<?php include('partials-front/footer.php');?>


