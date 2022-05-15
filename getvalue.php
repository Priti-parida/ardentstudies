<?php

include('inc/db.php');
$coursename = $_REQUEST['coursename'];
//echo "SELECT * FROM testanalysis WHERE ID='$ID'";

$get = mysqli_query($conn,"SELECT * FROM testanalysis WHERE coursename='$coursename'");
$ret = mysqli_fetch_array($get);
echo $year = $ret['courseyear'];


?>
<option value="">-select-</option>
<?php
   $sql = mysqli_query($conn,"SELECT * FROM testanalysis WHERE coursename='$coursename' GROUP BY courseyear");
      while($row = mysqli_fetch_assoc($sql))
      {
       
   ?>
<option value="<?php echo $row['coursename']; ?>"><?php echo $row['courseyear'];  ?></option>
<?php
   }
   ?>