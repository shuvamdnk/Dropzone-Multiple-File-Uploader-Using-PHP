<?php
include("header.php");
?>

<?php
include "dbConfig.php";
$sql = "SELECT * FROM image WHERE id='" . $_GET["id"] . "'";
$rs=mysqli_query($db,$sql);
$data=mysqli_fetch_array($rs);
?>

      <div class="container-fluid">
       <div class="row">
          <div class="col-md-6">
           <span class='zoom' id='zoom-pic'>
                  <img src="<?php echo 'upload/'.$data[1]?>" class="img-fluid shadow rounded" id="img">
           </span>
        </div>
      </div>
  </div>

<?php
include("footer.php");
?>