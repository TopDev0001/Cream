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

<section class="pop_section" >
    <div class="container bg-1">
        <div class="row pt-md-5">
            <div class="col-12 col-md-6 m-auto text-left pt-5 pt-md-0 pl-md-5">
                <p class="pop_fist_line px-5 pl-md-4 mt-5 mt-md-0 mb-0 pt-5 pt-md-0"> Sila isi butiran peribadi anda untuk mendapatkan kod baucar pembelian bernilai RM5 dan penyertaan untuk Cabutan Bertuah Raya QV! </p>
            </div>
            <div class="col-12 col-md-6 text-center">
                <img src="assets/image/box.png" class="box_image mx-auto" >
            </div>
        </div>
        <div class="formqv mt-0 mt-md-5 mb-4">
            <form method="post">
                <?php if ($error) { ?><div class="errorWrap">
                    <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                </div><?php } else if ($msg) { ?><div class="succWrap">
                    <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
                </div>
                <?php } ?>
                <div class="form-group">
                    <input type="text" class="form-control py-1" placeholder="Nama *" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control py-1" placeholder="NO. K/P *" name="kp" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control py-1" placeholder="NO. Telefon *" name="telefon" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control py-1" placeholder="E-mel *" name="email" required>
                </div>
                <button name="send" type="submit" class="btn btn-default py-3 text-white" style="width: 100%; background-color:#0078BF">HANTAR</button>
            </form>
            <p style="color: #293D8A" class="form_text2 mt-2 mt-md-4 mb-2"> Dengan penghantaran butiran ini, anda telah dianggap sudah baca, faham dan bersetuju dengan Terma & Syarat QV dan Dasar Privasi Digital. </p>
        </div>
    </div>
</section>









        <script src="assets/js/bootstrap.min.js"></script>









</body>



</html>

<?php  ?>