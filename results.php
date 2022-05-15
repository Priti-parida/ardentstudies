<?php
include('inc/header.php');
include('inc/db.php');




?>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->


    <section class="ftco-section">
  
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-12 heading-section  text-center ftco-animate">
        <span class="subheading"></span>
        <h2>Achievements</h2>
  
        
      </div>
    </div>
    <div class="gallery">
   <?php
   
   $sql = "SELECT * FROM images";
   $result = mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
     while($fetch = mysqli_fetch_assoc($result)){
       $img_name = $fetch['img_name'];
       ?>
     <?php 
    foreach (explode(',',  $img_name) as $image) {
    ?>
    <img src="admindash/uploads/<?php echo $image; ?>"  >
    <?php }} }?>
  
    
</div>

</div>
        
</section>


<?php
include('inc/footer.php');?>



<style>
  .error {
    color: #a00;
  }
  
         
  body {
    display: flex;
    
    flex-direction: column;
    font-family: 'Roboto',sans-serif;
  }
  .gallery img{
          width: 350px;
          height: 250px
  }
</style>