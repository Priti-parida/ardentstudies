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

 
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                    <h2><p><b>Previous Years Papers & Analyses</b></p><h2>

                        
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                <select name='coursename' id="coursename" class="form-control white_bg" required="true">
     <option value="">Course</option>
      <?php $query=mysqli_query($conn,"SELECT * FROM testanalysis GROUP BY coursename");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['coursename'];?>"><?php echo $row['coursename'];?></option>
                  <?php } ?>  
   </select>
                                </div>
                                <div class="col-md-4">
                                <select name='courseyear' id="courseyear" class="form-control white_bg" required="true">
     <option value="">Year</option>
      <?php $query=mysqli_query($conn,"SELECT * FROM testanalysis GROUP BY courseyear");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['courseyear'];?>"><?php echo $row['courseyear'];?></option>
                  <?php } ?>  
   </select>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    

                                    if(isset($_GET['coursename'])&& ($_GET['courseyear']))
                                    {
                                        $coursename = $_GET['coursename'];
                                        $courseyear = $_GET['courseyear'];
                                        
                                       
                    

                                        $query = "SELECT * FROM testanalysis WHERE coursename='$coursename' && courseyear='$courseyear'";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div id="" style="overflow:scroll;">
                                                <div class="form-group mb-3">
                                                    <label for=""></label>
                                                    <?= $row['description']; ?>
                                                </div>
                                           
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>
</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
include('inc/footer.php');
?>