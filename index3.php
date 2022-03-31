<?php
include('include/header.php');
?>


<div class="">
  <div class="row m-0" style="height: 100vh;">
    <div class="col-12 col-sm-12 col-md-6 col-lg-5 girl_div m-auto">
      <div class="fit_content d-flex float-right">
        <img class="float-right girl_image" src="assets/image/girl.png" alt="girl" />
        <img class="mark1" id = "mark1"src="assets/image/mark_1.png" alt="mark_1" />
        <img class="mark2" src="assets/image/mark_1.png" alt="mark_2" />
        <img  class="mark3" src="assets/image/mark_1.png" alt="mark_3" />  
        <img class="w-100 h-100 wave_img " src="assets/image/BG_wave.png" alt="wave">  
      </div>      
    </div>
    <div class="col-12 col-sm-10 col-md-6 col-lg-7 m-auto">

      <div class="row mt-4 group_div align-items-center justify-content-center">
     
        <div class="mx-3 text-center">
          <div >
            <img class="card1" id="card1" src="assets/image/cream1.png" alt="cream1">
          </div> 
          <div>
            <img class="card2" src="assets/image/cream2.png" alt="cream2">
          </div>  
          <div>
            <img class="card3" src="assets/image/cream3.png" alt="cream3">
          </div>
        </div>
        <div class="row align-items-center mx-3">
          <div class="">
            <img class="mx-2 finger_image" src="assets/image/finger.png" alt="finger">
          </div>
          <div class="">
            <div class="home_text1"> DRAG & DROP QV<br/> Cream ke atas kulit<br/> MUKA dan TANGAN nya.
            </div>
          </div>
        </div>
      </div>
      <div class="text-center ml-md-5 mt-3 text_div">
        <div class="text_div2">
          <div class="home_text3">
          Pastikan posisi cream diletakkan tepat pada kawasan bulatan
          </div>
        </div>
      </div>
      <div>
            <button type="button" id= "MULA" class="btn btn-primary mt-5 ">MULA</button>
        </div>
    </div>

  </div>
  <!-- <div class="row wave_div m-0">
    <img class="w-100 h-100 wave_img " src="assets/image/BG_wave.png" alt="wave">
  </div> -->
  <div class="row group_mobile_div">
    <!-- <div class="col-12"> -->
    <div class="text-center col-3">
      <img class="card1 " src="assets/image/cream1.png" alt="cream1">
      <img class="card2" src="assets/image/cream2.png" alt="cream2">
      <img class="card3" src="assets/image/cream3.png" alt="cream3">
    </div>
    <!-- <div class="text-center align-items-center float-left"> -->
    <div class="col-4">
      <img class="finger_image" src="assets/image/finger.png" alt="finger">
    </div>
    <div class="col-4">
      <div class="home_text1 text-left"> DRAG & DROP QV Cream ke atas kulit MUKA dan <br> TANGAN nya.
      </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
  </div>
  <div class="row wave_mobile_div m-0">
    <img class="w-100 h-100 " src="assets/image/wave_mobile.png" alt="wave">
  </div>
</div>

<script type="text/javascript">
$("#MULA").click(function(){
  window.location.href = 'index4.php';
});
  </script>

</body>

</html>

<!-- 
<div class="home_text3">
  <div class="home_text3_1">
    Pilih <img src="assets/image/logo.png" class="logo_image" style="height: 30px; margin:2px"> Cream
  </div>
  <div class="home_text3_2">
    untuk membantu kulitnya agar terasa segar, lembut dan lembap
  </div>
</div> -->

