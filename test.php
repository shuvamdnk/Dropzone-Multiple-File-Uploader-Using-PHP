<?php
include("header.php");
?>



    <div class="container-fluid">
      <div class="row" id="block">

      </div>
    </div>


      
    

<?php
include("footer.php");
?>


<script>
	var load = 0;
 
	loadmore(load);

   
    function loadmore(start)
    {
        jQuery.ajax({
        url:'get.php',
        data:'start='+start,
        type:'post',
        success:function(result){
          jQuery('#block').append(result);
          load +=12;
        }
      })
    }  

    


    jQuery(document).ready(function(){
    	jQuery(window).scroll(function(){
      	
      	if (jQuery(window).scrollTop()>=jQuery(document).height() - 
      		jQuery(window).height()) {
      		loadmore(load);
      	    //console.log("fetching");
      	}
      })
    })
</script>