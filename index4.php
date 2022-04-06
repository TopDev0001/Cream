<?php
include('include/header.php');
?>

        <div class="row m-0 index_div " >
          <div class="col-12 col-sm-12 col-md-6 girl_div m-auto" style="padding: 0">
            <div class="fit_content d-flex">
              <img class="girl_image" src="assets/image/girl.png" alt="girl" />
              <div id="droppable" class="ui-widget-header">
              <div class="mark1  bg_image" id = "mark1"> </div>
              <div class="mark2  bg_image" id = "mark2"> </div>
              <div class="mark3  bg_image" id = "mark3"></div>   
            </div>  
            </div>   

          </div>
          <div class="col-12 col-sm-10 col-md-6 m-auto " style="padding-bottom: 7rem">
           <div class="float-left">
            <p class="home_text2 text-center mb-4 " style="color: #293D8A" id="text1" >Jom DRAG & DROP Sekarang!</p>
            <div class="row mt-md-4 mt-sm-3 group_div align-items-center justify-content-center" id="text2">        
              <img class="mx-3" src="assets/image/tube.png" alt="tube">        
              <div class="mx-3 text-center"  id="draggable" class="ui-widget-content">
                <div class="card1 "  id="card1"></div> 
                <div class="card2 " id="card2" ></div>  
                <div class="card3 " id="card3" ></div>
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
                <div class="card1 m-1 " id="m_card1"   
                        ></div> 
                <div class="card2 m-1 " id="m_card2" 
                       ></div>  
                <div class="card3 m-1 " id="m_card3"  
                      ></div>
          </div>
          <div class="fit_content d-flex mt-5">
            <img class=" girl_image" src="assets/image/girl_cream.png" alt="girl" />
            <div class="mark1  bg_image" id = "m_mark1"> </div>
              <div class="mark2  bg_image" id = "m_mark2"> </div>
              <div class="mark3  bg_image" id = "m_mark3"></div>   
          </div>   
          <img class="w-100 wave_img" src="assets/image/wave_mobile.png" alt="wave">
        </div>
         <script type="text/javascript">
          var count = 0;
          $(function() {  
              for(i = 1 ; i < 4 ; i++ )
              {
                  $('.card'+i).draggable({
                    revert: true,
                    placeholder: true,
                    droptarget: '.mark' + i,
                    // dragstart:function(evt, droptarget){
                    //   $(droptarget).removeClass('bg_image');
                    //   $(droptarget).addClass('select_image'); 
                    // },
                    drop: function(evt, droptarget) {
                      $(droptarget).removeClass("bg_image");
                      $(droptarget).addClass("drop_image3");
                      // $(this).appendTo(droptarget).draggable('destroy');
                      count = count +1;
                      if(count == 3) window.location.href = 'index5.php';
                          
                    }
                  });
                }

              });

            // function dragStart(ev) { 
            //   const card_id = ev.target.getAttribute('id');
            //   const mark_id = "#mark" + card_id.slice(4);
            //   $(mark_id).removeClass('bg_image');
            //   $(mark_id).addClass('select_image'); 
            //       return true;
            // }
           
         </script>
</body>
</html>


