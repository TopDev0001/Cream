<?php
include('include/header.php');
?>

<div class="row m-0 index_div" style="height: 100vh;">
  <div class="col-12 col-sm-12 col-md-6 col-lg-5 girl_div m-auto" style="padding: 0">
    <div class="fit_content d-flex float-right">
      <img class="float-right girl_image" src="assets/image/girl.png" alt="girl" />
      <div class="mark1 bg_image" id = "mark1" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> </div>
      <div class="mark2 bg_image" id = "mark2"ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> </div>
      <div class="mark3 bg_image" id = "mark3" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"></div>   
    </div>      
    <img class="h-100 wave_img" src="assets/image/BG_wave.png" alt="wave">
  </div>
  <div class="col-12 col-sm-10 col-md-6 col-lg-7 m-auto" style="padding-bottom: 7rem">
 
    <p class="home_text2 text-center mb-4" style="color: #293D8A" id="text1" >Jom DRAG & DROP Sekarang!</p>
    <div class="row mt-md-4 mt-sm-3 group_div align-items-center justify-content-center" id="text2">        
      <img class="mx-3" src="assets/image/tube.png" alt="tube">        
      <div class="mx-3 text-center" id = "draggable">
        <div class="card1" id="card1"  draggable="true" ondragstart="return dragStart(event)"></div> 
        <div class="card2" id="card2"  draggable="true" ondragstart="return dragStart(event)"></div>  
        <div class="card3" id="card3"  draggable="true" ondragstart="return dragStart(event)"></div>
      </div>
      <div class="row align-items-center mx-3">          
        <img class="mx-2 finger_image" src="assets/image/finger.png" alt="finger">                  
        <p class="home_text1" style="color: #293D8A"> DRAG & DROP QV<br/> Cream ke atas kulit<br/> MUKA dan TANGAN nya.
        </p>          
      </div>
    </div>
    <div class="text-center ml-md-5  text_div">
      <div class="text_div2">
        <div class="home_text2" style="color: #293D8A" id="text3"> Raya Ini, Pilih Kebaikan!</div>
        <div class="home_text3" style="color: #293D8A" id="text4">
            Pilih <img src="assets/image/logo.png" class="logo_image" style="height: 30px; margin:2px"> Cream
            untuk membantu kulitnya agar terasa segar, lembut dan lembap
        </div>
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
  <div class="mt-2 text-center d-flex justify-content-center align-items-center">    
        <div class="card1" id="card1" ></div> 
        <div class="card2" id="card2_mobile"  ></div>  
        <div class="card3" id="card3"  draggable="true" ondragstart="return dragStart(event)"></div>
  </div>
  <div class="fit_content d-flex float-right">
    <img class="float-right girl_image" src="assets/image/girl_cream.png" alt="girl" />
    <div class="mark1 bg_image" id = "mark1" > </div>
      <div class="mark2 bg_image" id = "mark2"ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> </div>
      <div class="mark3 bg_image" id = "mark3" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"></div>   
  </div>   
  <img class="w-100 wave_img" src="assets/image/wave_mobile.png" alt="wave">
</div>

<script type="text/javascript">

// var el = document.getElementById('card2_mobile'); 

// el.addEventListener("touchstart", handleStart(el), false);
// el.addEventListener("touchend", handleEnd, false);
// // el.addEventListener("touchcancel", handleCancel, false);
// el.addEventListener("touchleave", handleEnd, false);
// // el.addEventListener("touchmove", handleMove, false);

//   function handleStart(event) {
//       // Handle the start of the touch
//    console.log(event.tartget.value);
//   }
//   function handleEnd(event) {
//       // Handle the start of the touch
//       alert("bbb");
//       dragDrop(event);
//   }

  


    var count = 1;
    function dragStart(ev) { 
  
        const card_id = ev.target.getAttribute('id');
        const mark_id = "#mark" + card_id.slice(4);
        $(mark_id).removeClass('bg_image');
        $(mark_id).addClass('select_image'); 
            ev.dataTransfer.effectAllowed='move';
            ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
            ev.dataTransfer.setDragImage(ev.target,30,30);
            return true;
         }

    function dragEnter(ev) {
        event.preventDefault();
        return true;
    }

    function dragOver(ev) {
        return false;
    }

    function dragDrop(ev) {
        var src = ev.dataTransfer.getData("Text");
        ev.target.appendChild(document.getElementById(src));
        ev.stopPropagation();
        count = count +1 ;
        if(count >3)  window.location.href = 'index5.php';
        return false;
    }

  
$(function() {

    $('#text1').hide();
    $('#text2').hide();
    $('#text3').hide();
    $('#text4').hide();
    $('#text1').show(200, function() {
        $('#text2').show(200, function() {
            $('#text3').show(200, function() {
                $('#text4').show(200, function() {
                });
            });

        });
    });


});
  </script>

</body>

</html>


