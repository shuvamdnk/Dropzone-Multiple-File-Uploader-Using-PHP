
<?php
include "dbConfig.php";

$sql1 = "SELECT file FROM image WHERE id='" . $_GET["id"] . "'";

$row = mysqli_query($db, $sql1);

$row1 = mysqli_fetch_array($row);

$img = $row1["file"];

unlink("upload/".$img);

$sql = "DELETE FROM image WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($db, $sql)) {

    ?>
    <html>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-lg-6">

  <div class="alert alert-danger alert-dismissible fade show shadow" role="alert">
     	<strong>

        <div class="d-flex align-items-center text-danger">
        <strong>Deleting file...</strong>
        <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
       </div>
      </strong>
  </div>


</div>
</div>
</div>

</body>
       <script>
        setTimeout(function(){
        window.location.href = 'test.php';
        }, 1);
      </script>


    <style>
    	.row{
    		justify-content: center;
    		margin-top: 10px;
    	}
    	body{
    		background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
    	}
    	.alert{
    		border-bottom: 4px solid #FF3C3C;
        background-color: #ffff;
        outline: none;
    	}
              ::-webkit-scrollbar {
          width:0px;
        }
    </style>
    </html>
  
    <?php
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>