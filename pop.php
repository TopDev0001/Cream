<?php

session_start();

error_reporting(0);

include('includes/config.php');

if (isset($_POST['send'])) {

    $name = $_POST['name'];

    $kp = $_POST['kp'];

    $telefon = $_POST['telefon'];

    $email = $_POST['email'];

    $sql = "INSERT INTO tblbooking(name,kp,telefon,email) VALUES(:name,:kp,:telefon,:email)";

    $query = $dbh->prepare($sql);

    $query->bindParam(':name', $name, PDO::PARAM_STR);

    $query->bindParam(':kp', $kp, PDO::PARAM_STR);

    $query->bindParam(':telefon', $telefon, PDO::PARAM_STR);

    $query->bindParam(':email', $email, PDO::PARAM_STR);

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {

        header('Location:video.php');

    } else {
        $error = "Something went wrong. Please try again";
    }
}
?>

<?php include('include/header.php');?>

    <section style="background-image: url(img/BG_pattern.png); background-size:contain; background-repeat: no-repeat;">
        <div class="container bg-1">
            <div class="row">
                    <div class="col-md-6 m-auto">
                        <div  class = "pop_fist_line"> Sila isi butiran peribadi anda untuk mendapatkan kod baucar pembelian bernilai RM5 dan penyertaan untuk Cabutan Bertuah Raya QV! </div>
                    </div>
                    <div class="clo-md-6 box_div">
                    <img src="img/box.png" class="box_image" >
                    </div>
            </div>
            <div class="formqv">
                <form method="post">
                    <?php if ($error) { ?><div class="errorWrap">
                        <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                    </div><?php } else if ($msg) { ?><div class="succWrap">
                        <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
                    </div>
                    <?php } ?>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Nama *" name="name" required>

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="NO. K/P *" name="kp" required>

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="NO. Telefon *" name="telefon" required>

                    </div>

                    <div class="form-group">

                        <input type="email" class="form-control" placeholder="E-mel *" name="email" required>

                    </div>



                    <br>

                    <button name="send" type="submit" class="btn btn-default"

                        style="width: 100%; background-color:#0078BF">HANTAR

                    </button>



                </form>

                <br>

                <p style="color: #293D8A;" class="form_text2"> Dengan penghantaran butiran ini, anda telah dianggap sudah baca, faham dan

                    bersetuju dengan Terma & Syarat QV dan Dasar Privasi Digital. </p>

            </div>



        </div>

        </div>









        <script src="assets/js/bootstrap.min.js"></script>









</body>



</html>

<?php  ?>