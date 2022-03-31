<?php
include('include/header.php');
?>


<div class="">
  <div class="row m-0 h-100">
    <div class="col-12 col-sm-12 col-md-6 girl_div">
      <img class="float-right girl_image" src="assets/image/girl.png" alt="girl">
         <img class = "mark4" src="assets/image/mark.png" alt="mark_1" />
     </img>
    </div>
    <div class="col-12 col-sm-10 col-md-6 m-auto text-center">
        <div class="first_text1 m-auto" >Kulitnya menjadi kering kerana berada di dalam bilik berhawa dingin sepanjang hari.
        </div>
        <div>
            <button type="button" id= "SETERUSNYA" class="btn btn-primary mt-5">SETERUSNYA</button>
        </div>
    </div>

  </div>
  <div class="row wave_div m-0">
    <img class="w-100 h-100 wave_img " src="assets/image/BG_wave.png" alt="wave">
  </div>
  <div class="row wave_mobile_div m-0">
    <img class="w-100 h-100 " src="assets/image/wave_mobile.png" alt="wave">
  </div>
</div>

<script type="text/javascript">
   $("#SETERUSNYA").click(function(){
  window.location.href = 'index2.php';
});
</script>


</body>

</html>

