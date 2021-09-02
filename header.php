<!DOCTYPE html>
<html>
<head>
	<title>Dropzone</title>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dropzone-5.7.0/dist/min/dropzone.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="dist/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>
.container-fluid .row .col-md-12 .dropzone{
  border: 4px dotted #5298C5;
  border-radius: 10px;
}

.container-fluid .row .col-md-12 .dropzone:hover{
   border:4px dotted #52C580;
   background-color: #F5F5F5;
}
.modal .modal-footer{
  border: none;
  outline: none;
}
</style>

<?php
include("dbConfig.php");
$sql = "SELECT COUNT(id) as total FROM image";
$result = mysqli_query($db,$sql);
$value = mysqli_fetch_assoc($result);
$num_rows = $value["total"];
?>


<nav class="navbar navbar-light bg-light shadow mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" data-bs-toggle="modal" data-bs-target="#file-drop">Dropzone</a>
    <!-- <i><?php echo $num_rows;?></i> -->
   <!--  <button id="uploadfiles" class="btn btn-success shadow-sm">Upload</button> -->
    <a href="test.php" class="btn btn-primary shadow-sm"><?php echo $num_rows;?> POST</a>
  </div>
</nav>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#file-drop">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="file-drop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header shadow-sm">
        <h5 class="modal-title" id="exampleModalLabel">UPLOAD IMAGE</h5>
        <button type="button" class="btn-close shadow-sm" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="container-fluid">
        <div class="row my-2">
          <div class="col-md-12 shadow-sm text-center p-4">
            <form action="upload.php" class="dropzone needsclick" id="recommendationDiv">
         
            <!--  <div class="dz-message" data-dz-message><span>Upload Images</span></div> -->

                 <div class="dz-message needsclick">
                      Drop files here or click to upload.<br />
                      <span class="note needsclick">(Please upload <strong>JPEG, JPG, GIF, PNG</strong> files only.)</span>
                 </div>


           <!--  <div class="fallback">    
            <input name="file[]" type="file" multiple />
          </div> -->
        </form>
          </div>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" id="uploadfiles" class="btn btn-success shadow-sm">Save</button>
      </div>
    </div>
  </div>
</div>