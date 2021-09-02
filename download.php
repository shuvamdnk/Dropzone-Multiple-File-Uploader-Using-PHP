<?php

include "dbConfig.php";

$sql1 = "SELECT file FROM image WHERE id='" . $_GET["id"] . "'";

$row = mysqli_query($db, $sql1);

$row1 = mysqli_fetch_array($row);

$img = $row1["file"];

$file = "http://localhost/projects/Dropzonejs%20file-upload/upload/".$img.""; 


header("Content-Description: File Transfer"); 

header("Content-Type: application/octet-stream"); 

header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 

readfile ($file);
exit(); 
?>