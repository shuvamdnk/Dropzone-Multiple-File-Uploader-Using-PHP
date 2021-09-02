<script src="dropzone-5.7.0/dist//min/dropzone.min.js"></script>

      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="dist/js/lightbox-plus-jquery.min.js"></script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src='zoom-master/jquery.zoom.js'></script>

       <script>
          $(document).ready(function(){
             $('#zoom-pic').zoom({ on:'grab' });
          });
       </script>

    <!-- <script>
      Dropzone.autoDiscover = false;

      var myDropzone = new Dropzone(".dropzone", { 
         autoProcessQueue: false,
         parallelUploads: 500 // Number of files process at a time (default 2)
      });

      $('#uploadfiles').click(function(){
         myDropzone.processQueue();
      });
   </script>    -->


  <!--  # only image file  -->
   <script>
     Dropzone.options.recommendationDiv = {
        acceptedFiles: 'image/*'
    };
   </script>


   <!-- # limit file upload -->
   <!-- <script>
  Dropzone.options.recommendationDiv = {
  accept: function(file, done) {
    console.log("uploaded");
    done();
  },
  init: function() {
    this.on("addedfile", function() {
      if (this.files[5]!=null){
        this.removeFile(this.files[5]);
        alert("Limit Over!");
      }
    });
  }
};
   </script> -->




 <!--   <script>
     $(document).ready(function(){
      setInterval(function(){
        $('#block').load('get.php');
        refresh();

      },1000)
     })
   </script> -->
</body>
</html>