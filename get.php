<?php 
include("dbConfig.php");
if (isset($_POST['start'])) 
{
	$start = mysqli_real_escape_string($db ,$_POST['start']);
	//echo $start;
    $sql = "SELECT * FROM image ORDER BY id DESC LIMIT $start, 12";
    // ORDER BY id DESC
    $res = mysqli_query($db,$sql);
    if (mysqli_num_rows($res) > 0) {
    	$html="";
    	while ($row = mysqli_fetch_assoc($res)) {
            
    		$html.="<div class='col-4 col-md-3 col-lg-2 mt-3 mb-3' id='img-div'>
                    <a id='download-btn' href='download.php?id=".$row['id']."' class='btn btn-outline-info shadow'>
                       <i class='fa fa-arrow-circle-down' aria-hidden='true'></i>
                    </a>

                    <a id='link-btn' href='preview.php?id=".$row['id']."' class='btn btn-outline-success shadow'>
                       <i class='fa fa-window-restore' aria-hidden='true'></i>
                    </a>

                    <a href='delete.php?id=".$row['id']."' id='delete-btn' class='btn btn-outline-danger shadow'>
                       <i class='fa fa-trash' aria-hidden='true'></i>
                    </a>
                     
                    <a class='example-image-link' href='upload/".$row['file']."' data-lightbox='example-set' data-title=''> 
                     <img src='upload/".$row['file']."' class='img-fluid shadow rounded ' style='width:100%; height:100%; object-fit:cover;'/>
                    </a> 
                    </div>";     
                     
    	}
    	echo $html;
    }

    // $html="";
    // while($row=mysqli_fetch_array($res))
    // {
    // 	$html.="<h2>".$row['id']."</h2>";
    // }
    // echo $html;
}

?>