<?php
//error_reporting(0);
include('inc/db.php');


?>
  <?php
include('inc/header.php');


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


<div class="card-content">
                  <div class="card-body">
 

<div class="row">
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Course Applied                   </h5>
   <div class="form-group">
   <select  name="coursename" onchange="getData(this.value);" id="coursename" class="form-control white_bg" required="true">
     <option value="">Course Applied</option>
      <?php 
       // echo "SELECT * FROM testanalysis";
      $data=mysqli_query($conn,"SELECT * FROM testanalysis GROUP BY coursename");
              while($rowdata=mysqli_fetch_array($data))
              {
              ?>    
              <option value="<?php echo $rowdata['coursename'];?>"><?php echo $rowdata['coursename'];?></option>
                  <?php } ?>  
   </select>
    </div>
</fieldset>
                   
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>year                   </h5>
   <div class="form-group">
   <select name='courseyear' onchange="getDetail(this.value);" id="courseyear" class="form-control white_bg" required="true">
     <option value="">year</option>
      <?php 
      
      //echo "select * from testanalysis"; die;
      $query=mysqli_query($conn,"select * from testanalysis");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['courseyear'];?>"><?php echo $row['courseyear'];?></option>
                  <?php } ?>  
   </select>
    </div>
</fieldset>
                   
</div>
              </div>

 <!-- about -->
<section class="section">
    
       
  <div class="container" >
    <div class="row">
      <div class="col-12">
        
      <fieldset>
  <h5>Description                   </h5>
   <div class="form-group">
   <div name='description' id="description" class="form-control white_bg" required="true"  style="display:none">
     
      <?php 
      
      //echo "select * from testanalysis"; die;
      $query=mysqli_query($conn,"select * from testanalysis");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
             <?php echo $row['description'];?>
                  <?php } ?>  
              </div>
    </div>
</fieldset>
      </div>
    </div>
  </div>
  

</section>
<!-- /about -->           

<?php
include('inc/footer.php');
?>
<script>
  function getData(coursename){
    //alert(coursename);
    jQuery.ajax({
          type: 'get',
          url: 'getvalue.php',
          data: 'coursename='+coursename,
          dataType: 'html',
          success: function(data){
            //alert(data);
            jQuery('#courseyear').html(data);
          }



    });
  }
  


</script>
