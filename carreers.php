<?php
include_once('inc/db.php');

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
<div id="" style="overflow:scroll;margin-right: 5px; margin-left: 5px;">

<div class="content-body">
        
<table id="examtable"class="table">
<thead class="thead-dark">
 
                <tr>
                  <th>S.NO</th>
                  <th>Requirement</th>
                  <th>Sub form</th>
                  <th>Description</th>
                




              
              
                </tr>
              </thead>
               <?php
$ret=mysqli_query($conn,"select * from career");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['title'];?></td>
                  <td><?php  echo $row['subtitle'];?></td>
                  <td><?php  echo $row['description'];?></td>



                
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
