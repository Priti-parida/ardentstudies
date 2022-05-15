<?php
error_reporting(0);
include('admindash/includes/dbconnection.php');


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
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Exam Notification</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<div id="" style="overflow:scroll;margin-right: 5px; margin-left: 5px;" >
   

<div class="content-body">
        
<table id="examtable"class="table" >
<thead class="thead-dark">
 
                <tr>
                  <th>S.NO</th>
                  <th>Exam name</th>
                  <th>Exam reg date</th>
                  <th>Exam end date</th>
                  <th>Exam date</th>
                  <th>Fees</th>
                  <th>websites</th>




              
              
                </tr>
              </thead>
               <?php
$ret=mysqli_query($conn,"select * from examnotify");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['examname'];?></td>
                  <td><?php  echo date('d-m-Y',strtotime($row['examregdate']));?></td>
                  <td><?php  echo date('d-m-Y',strtotime($row['examendate']));?></td>

                  <td><?php  echo date('d-m-Y',strtotime($row['examdate']));?></td>

                  <td><?php  echo $row['fees'];?></td>
                  <td><a href="<?php  echo $row['websites'];?>"> <?php  echo $row['websites'];?></a></td>

                
                </tr>
             
                <?php 
$cnt=$cnt+1;
}?>
   


</table>






     

</div>
      </div>
      </div>
      
</div>
<?php
include('inc/footer.php');
?>
<style>
  .table{
    margin-right: 15px;
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 15px;
  }
  </style>
