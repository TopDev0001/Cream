<?php
include('include/header.php');
?>


<div class="">
  <div class="row m-0" style="height: 100vh;">
    <div class="col-12 col-sm-12 col-md-6 col-lg-5 girl_div m-auto">
      <div class="fit_content d-flex float-right">
        <img class="float-right girl_image" src="assets/image/girl_2.png" alt="girl" />
        <img class="mark1" id = "mark1"src="assets/image/mark_1.png" alt="mark_1" />
        <img class="mark2" src="assets/image/mark_1.png" alt="mark_2" />
        <img  class="mark3" src="assets/image/mark_1.png" alt="mark_3" />  
        <img class="w-100 h-100 wave_img " src="assets/image/BG_wave.png" alt="wave">  
      </div>      
    </div>
    <div class="col-12 col-sm-10 col-md-6 col-lg-7 m-auto">
      <div class="index5_text1 text-center mb-4">Tahniah! Anda semakin menghampiri peluang<br /> untuk memenangi hadiah wang tunai bernilai<br /> RM500 atau produk QV!</div>
      <div class="text-center ml-md-5  text_div">
        <div class="text_div2">
          <div class="index5_text2 "> Hadiah Kod Baucar RM5 menanti di email anda. Sila isi butiran peribadi seterusnya.</div>
          
        </div>
        <div>
            <button type="button" id= "SETERUSNYA" class="btn btn-primary mt-5">SETERUSNYA</button>
        </div>
      </div>
    </div>

  </div>

</div>

<script type="text/javascript">

$("#SETERUSNYA").click(function(){
  window.location.href = 'pop.php';
});

  </script>

</body>

</html>
