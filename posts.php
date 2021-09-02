<?php
include("header.php");
?>

    <div class="container-fluid">
      <div class="row" id="block">
  <?php 
       include("dbConfig.php");
         $sql = "select * from image order by id DESC";
         $query = mysqli_query($db,$sql);
         while($row=mysqli_fetch_array($query))
         {
        ?> 

         <div class="col-4 col-md-3 col-lg-2 mt-3 mb-3" id="img-div">

          <button id="download-btn"  onclick="location.href='download.php?id=<?php echo $row['id'];?>'" class="btn btn-outline-info shadow">
               <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
          </button>

          <button id="link-btn"  onclick="location.href='preview.php?id=<?php echo $row['id'];?>'" class="btn btn-outline-success shadow">
                <i class="fa fa-window-restore" aria-hidden="true"></i>
          </button>

          <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item')" id="delete-btn" class="btn btn-outline-danger shadow">
                   <i class="fa fa-trash" aria-hidden="true"></i>
          </a>


           <a class="example-image-link" href="upload/<?php echo $row['file'] ?>" data-lightbox="example-set" data-title=""><img src="upload/<?php echo $row['file'] ?>" class="img-fluid shadow rounded " style="width:100%; 
          height:100%; 
          object-fit:cover;" /></a>

 
         </div>

    <?php
         }
     ?> 
      </div>
    </div>
      
    

<?php
include("footer.php");
?>
