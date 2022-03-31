<?php
include('include/header.php');
?>

<div class="row m-0 index_div" style="height: 100vh;">
  <div class="col-12 col-sm-12 col-md-6 col-lg-5 girl_div m-auto" style="padding: 0">
    <div class="fit_content d-flex float-right">
      <img class="float-right girl_image" src="assets/image/girl.png" alt="girl" />
      <img class="mark1" id = "mark1"src="assets/image/mark_1.png" alt="mark_1" />
      <img class="mark2" src="assets/image/mark_1.png" alt="mark_2" />
      <img  class="mark3" src="assets/image/mark_1.png" alt="mark_3" />          
    </div>      
    <img class="h-100 wave_img" src="assets/image/BG_wave.png" alt="wave">
  </div>
  <div class="col-12 col-sm-10 col-md-6 col-lg-7 m-auto" style="padding-bottom: 7rem">
 
    <p class="home_text2 text-center mb-4" style="color: #293D8A">Jom DRAG & DROP Sekarang!</p>
    <div class="row mt-md-4 mt-sm-3 group_div align-items-center justify-content-center">        
      <img class="mx-3" src="assets/image/tube.png" alt="tube">        
      <div class="mx-3 text-center">
        <div>
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
        <img class="mx-2 finger_image" src="assets/image/finger.png" alt="finger">                  
        <p class="home_text1" style="color: #293D8A"> DRAG & DROP QV<br/> Cream ke atas kulit<br/> MUKA dan TANGAN nya.
        </p>          
      </div>
    </div>
    <div class="text-center ml-md-5  text_div">
      <div class="text_div2">
        <div class="home_text2" style="color: #293D8A"> Raya Ini, Pilih Kebaikan!</div>
        <div class="home_text3" style="color: #293D8A">
            Pilih <img src="assets/image/logo.png" class="logo_image" style="height: 30px; margin:2px"> Cream
            untuk membantu kulitnya agar terasa segar, lembut dan lembap
        </div>
        <a href ="index5.php">
          <button type="button" id= "MULA" class="btn btn-primary mt-3 btn-main" >MULA</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="group_mobile_div py-3 text-center">

  <p class="home_text2 text-center mt-5 mb-3" style="color: #293D8A">Jom DRAG & DROP Sekarang!</p>
  <div class="row align-items-center justify-content-center mx-3">          
    <img class="mx-2 finger_image" src="assets/image/finger.png" alt="finger">                  
    <p class="home_text1" style="color: #293D8A"> DRAG & DROP QV<br/> Cream ke atas kulit<br/> MUKA dan TANGAN nya.
    </p>          
  </div>
  <div class="mt-2 text-center">    
    <img class="card1 mx-1" id="card1" src="assets/image/cream1.png" alt="cream1">  
    <img class="card2 mx-1" src="assets/image/cream2.png" alt="cream2"> 
    <img class="card3 mx-1" src="assets/image/cream3.png" alt="cream3">
  </div>
  <div class="fit_content d-flex float-right">
    <img class="float-right girl_image" src="assets/image/girl_cream.png" alt="girl" />
    <img class="mark1" id = "mark1"src="assets/image/mark_1.png" alt="mark_1" />
    <img class="mark2" src="assets/image/mark_1.png" alt="mark_2" />
    <img  class="mark3" src="assets/image/mark_1.png" alt="mark_3" />    
  </div>   
  <img class="w-100 wave_img" src="assets/image/wave_mobile.png" alt="wave">
</div>

<script type="text/javascript">
//        $("#card1").click(function(){
//        alert("dfddf");
// });
  
$(function() {
      $("#card1").draggable({
        revert: true,
        cursor: 'pointer',
        drag: function (event, ui) {
            // ui.helper.addClass("draggable");
            alert("fdfdf");
        },
        stop: function (event, ui) {
            // ui.helper.removeClass("draggable");
                alert(" not dropped.");
        }
       });
      $("#mark1").droppable({
        // accept: '.child',
        drop: function(event, ui) {
          $(this).append($(ui.draggable));
        }
      });
});
  </script>

</body>

</html>

<

