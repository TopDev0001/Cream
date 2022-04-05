<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<?php include('include/header.php');?>

    <section class="pop_section">
        <div class="container bg-1">
            <div class="row text-center ">
                <div class="col-sm-12 mt-md-5" >
                    <div class="col-sm-12">
                        <p class = "platform_first_line mt-md-5" > Anda telah berjaya menyertai Cabutan Bertuah Raya QV dan berpeluang
                            memenangi</p>
                        <p  class = "platform_second_line px-5 px-md-0" >Hadiah Wang Tunai bernilai RM 500! </p>
                    </div>
                    <div class="platform_image_div mt-md-5" >
                   <img src="assets/image/platform.png" class="platform_image">
                    </div>
                </div>
            </div>
                <div class="col-sm-10  qvclass m-auto">
                    <div class="col-12 col-sm-6">
                        <p style="color: #293D8A;" class="platform_text3">Jangan lupa kongsikan permainan ini dengan rakan-rakan anda dan
                            meningkatkan peluang untuk menang! </p>
                        <div class="row align-items-center m-0">
                         <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                           
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_whatsapp"></a>
                            <a class="a2a_button_telegram"></a>
                            </div>
                            <input onclick="copy()" class="copy-input ml-2" value="https://www.qvskincare.com/my" id="copyClipboard" readonly>
                            <button class="copy-btn" id="copyButton" onclick="copy()"><img src="assets/image/copy_icon.png" class="w-100">    
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 text-center mt-3">
                        <p style="color: #293D8A;" class="platform_text3">Layari kedai e-dagang QV untuk pembelian produk QV! </p>
                        <div class="row">
                            <div class="col-6">
                                <a href="https://www.lazada.com.my/shop/qv-official-store/"><img class="mobile_image w-100" src="img/qv1.png"></a>
                            </div>
                            <div class="col-6">
                                 <a href="https://shopee.com.my/qv.os"><img class="mobile_image w-100 " src="img/qv2.png"></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 text-center m-auto " style="background: #003AA5; padding: 30px;">
                    <p style="color: #fff;">Layari laman web untuk maklumat lebih lanjut berkaitan produk QV sekarang!
                    </p>
                    <a href="https://www.qvskincare.com/my/en/news-and-promos/qvbodycampaign21.html">
                    <img src="img/qv3.png" class="mobile_image" ></a>
                </div>
            
        </div>
        </div>

    <script>
        function copy() {
            var copyText = document.getElementById("copyClipboard");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            $('#copied-success').fadeIn(800);
            $('#copied-success').fadeOut(800);
        }
    </script>
<script async src="https://static.addtoany.com/menu/page.js"></script>

</body>
</html>

