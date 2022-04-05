<?php
include('include/header.php');
?>

        <div class="row m-0 index_div " >
          <div class="col-12 col-sm-12 col-md-6 girl_div m-auto" style="padding: 0">
            <div class="fit_content d-flex">
              <img class="girl_image" src="assets/image/girl.png" alt="girl" />
              <div class="mark1 bg_image" id = "mark1" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> </div>
              <div class="mark2 bg_image" id = "mark2"ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> </div>
              <div class="mark3 bg_image" id = "mark3" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"></div>   
            </div>   

          </div>
          <div class="col-12 col-sm-10 col-md-6 m-auto " style="padding-bottom: 7rem">
           <div class="float-left">
            <p class="home_text2 text-center mb-4 " style="color: #293D8A" id="text1" >Jom DRAG & DROP Sekarang!</p>
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
                    untuk membantu kulitnya <br />agar terasa segar, lembut dan lembap
                </div>
              </div>
            </div>
          </div>
          </div>
          <img class=" wave_img" src="assets/image/BG_wave.png" alt="wave">

        </div>

        <div class="group_mobile_div  text-center">

          <p class="home_text2 text-center mb-3 margin_top" >Jom DRAG & DROP Sekarang!</p>
          <div class="row align-items-center justify-content-center mx-3 mt-4">          
            <img class="mx-2 finger_image" src="assets/image/finger.png" alt="finger">                  
            <p class="home_text1" style="color: #293D8A"> DRAG & DROP QV<br/> Cream ke atas kulit<br/> MUKA dan TANGAN nya.
            </p>          
          </div>
          <div class="mt-3 text-center d-flex justify-content-center align-items-center" style="height:40px" >    
                <div class="card1 m-1" id="m_card1"   ontouchmove="move(event)"
                        ontouchmove="move(event)" ></div> 
                <div class="card2 m-1" id="m_card2"   ontouchmove="move(event)"
                        ontouchmove="move(event)" ></div>  
                <div class="card3 m-1" id="m_card3"  ontouchmove="move(event)"
                        ontouchmove="move(event)"></div>
          </div>
          <div class="fit_content d-flex mt-5">
            <img class=" girl_image" src="assets/image/girl_cream.png" alt="girl" />
            <div class="mark1 bg_image" id = "m_mark1"  ontouchend="drop(event)"> </div>
              <div class="mark2 bg_image" id = "m_mark2"  ontouchend="drop(event)"> </div>
              <div class="mark3 bg_image" id = "m_mark3" ontouchend="drop(event)" ></div>   
          </div>   
          <img class="w-100 wave_img" src="assets/image/wave_mobile.png" alt="wave">
        </div>

         <script type="text/javascript">
            let moving = null;
            var count_mobile = 1;
            // function pickup(event) {
            //     const card_id = event.target.getAttribute('id');
            //     const mark_id = "#m_mark" + card_id.slice(6);
            //     $(mark_id).removeClass('bg_image');
            //     $(mark_id).addClass('select_image'); 
            //     moving = event.target;
            //     moving.style.height = (moving.clientHeight).toString() + "px";
            //     moving.style.width =(moving.clientWidth).toString() + "px"; 
            //     moving.style.position = 'fixed';
            //     moving.style.zIndex = '2';
           

            // }
            function move(event) {
              const card_id = event.target.getAttribute('id');
                const mark_id = "#m_mark" + card_id.slice(6);
                $(mark_id).removeClass('bg_image');
                $(mark_id).addClass('select_image'); 
                moving = event.target;
                moving.style.height = (moving.clientHeight).toString() + "px";
                moving.style.width =(moving.clientWidth).toString() + "px"; 
                moving.style.position = 'fixed';
                moving.style.zIndex = '2';
                if (moving) {
                    if (event.clientX) {
                        // mousemove
                        moving.style.left = (event.clientX - moving.clientWidth / 2).toString() +"px";
                        moving.style.top = (event.clientY - moving.clientHeight / 2) .toString() +"px";
                    } else {
                        // touchmove - assuming a single touchpoint
                        moving.style.left = (event.changedTouches[0].clientX - moving.clientWidth / 2).toString() +"px";
                        moving.style.top = (event.changedTouches[0].clientY - moving.clientHeight / 2).toString() +"px";
                    }
                }   
            }
       

            function drop(event) {
                var src = event.currentTarget.getAttribute('id');
                  if (moving) {
                          if(src == "m_mark1")
                          {
                            $("#m_mark1").removeClass("select_image");
                            $("#m_mark1").addClass("drop_image1");
                            $("#m_card1").hide();
                          }
                          if(src == "m_mark2")
                          {
                            $("#m_mark2").removeClass("select_image");
                            $("#m_mark2").addClass("drop_image2");
                            $("#m_card2").hide();
                          }
                          if(src == "m_mark3")
                          {
                            $("#m_mark3").removeClass("select_image");
                            $("#m_mark3").addClass("drop_image3");
                            $("#m_card3").hide();
                          }

                          count_mobile = count_mobile +1 ;
                         if(count_mobile >3)  window.location.href = 'index5.php';

                          moving.style.left = '';
                          moving.style.top = '';
                          moving.style.height = '';
                          moving.style.width = '';
                          moving.style.position = '';
                          moving.style.zIndex = '';
                          moving = null;
                  }
              }
        function touchHandler(event) {
            var touch = event.changedTouches[0];
            var simulatedEvent = document.createEvent("MouseEvent");
            simulatedEvent.initMouseEvent({
            touchstart: "mousedown",
            touchmove: "mousemove",
            touchend: "mouseup"
            }[event.type], true, true, window, 1,
            touch.screenX, touch.screenY,
            touch.clientX, touch.clientY, false,
            false, false, false, 0, null);
            touch.target.dispatchEvent(simulatedEvent);
            event.preventDefault();
        }
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
            if(src == "card1")
            {
              $("#mark1").removeClass("select_image");
              $("#mark1").addClass("drop_image1");
            }
            if(src == "card2")
            {
              $("#mark2").removeClass("select_image");
              $("#mark2").addClass("drop_image2");
            }
            if(src == "card3")
            {
              $("#mark3").removeClass("select_image");
              $("#mark3").addClass("drop_image3");
              console.log($("#mark3"));
            }
            ev.stopPropagation();
            count = count +1 ;
            if(count >3)  window.location.href = 'index5.php';
            return false;
        }

  
        $(function() {
          var el = document.getElementById('card_mobile2'); 

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
        document.addEventListener("touchstart", touchHandler, {passive:false});
        document.addEventListener("touchmove", touchHandler,  {passive:false});
        document.addEventListener("touchend", touchHandler,  {passive:false});
        document.addEventListener("touchcancel", touchHandler,  {passive:false});
    });
  </script>
</body>
</html>


