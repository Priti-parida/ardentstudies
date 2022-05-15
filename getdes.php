<?php

include('inc/db.php');
$courseyear = $_REQUEST['courseyear'];
//echo "SELECT * FROM testanalysis WHERE ID='$ID'";

$get = mysqli_query($conn,"SELECT * FROM testanalysis WHERE courseyear='$courseyear'");
$ret = mysqli_fetch_array($get);
echo $year = $ret['description'];


?>
<option value="">-select-</option>
<?php
   $sql = mysqli_query($conn,"SELECT * FROM testanalysis WHERE courseyear='$courseyear'");
      while($row = mysqli_fetch_assoc($sql))
      {
       
   ?>
<option value="<?php echo $row['courseyear']; ?>"><?php echo $row['description'];  ?></option>
<?php
   }
   ?>