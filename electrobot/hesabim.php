<?php
session_start();
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/searchStyle.css">
    <title>Hesabım</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="navbar-brand" href="anasayfa">
            <img src="https://findicons.com/files/icons/2770/ios_7_icons/128/circuit.png" width="30" height="30" class="d-inline-block align-top " alt="Electrobot">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="anasayfa">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategoriler
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="arduinoUrunler">Arduino</a>
                            <a class="dropdown-item" href="raspberryUrunler">Raspberry</a>
                            <a class="dropdown-item" href="gelistirmekartUrunler">Geliştirme Kartları</a>
                            <a class="dropdown-item" href="sensorUrunler">Sensörler</a>
                            <a class="dropdown-item" href="aracgerecUrunler">Araç-Gereç</a>
                        </div>
                      </div>
                </li>
            </ul>
            <form class="form-inline">
                <div class="container">
                    <div class="wrapper">
                        <div class="search-input">
                        <a href="" target="_blank" hidden></a>
                        <input type="text" placeholder="Search.." class="searchText">
                        <div class="autocom-box">
                            <!-- Arama listesinin sonuçları burada görünür -->
                        </div>
                        <div class="icon"><i class="fas fa-search"></i></div>
                        </div>
                    </div>
                    <script src="js/searchScript.js"></script>
                    <script src="js/suggestions1.js"></script>
                </div>
            </form>
            <form method="post">
                <?php
                    if(isset($_SESSION['email'])){
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="hesabim">Hesabım</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="php/logout">Çıkış Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="kayit">Kayıt Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="giris">Giriş Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    }
                ?>
            </form>
        </div>
    </nav>

    <div class="container my-5">
        <div class="accordion" id="accordionExample">
        
                <div class="card border-primary">

                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-primary" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Hesap Bilgileri
                        </button>
                        </h2>
                    </div>
                    <?php include "php/hesapbilgileri.php" ?>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="adi" placeholder="Ad" name="adi" value="<?php echo $adi;?>" READONLY>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="soyadi" placeholder="Soyad" name="soyadi" value="<?php echo $soyadi;?>" READONLY>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>" READONLY>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">          
                                    <input type="password" class="form-control" id="pwd" placeholder="Şifre" name="pwd" value="<?php echo $pwd; ?>" READONLY>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card border-primary">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-primary" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sepetim
                        </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="php/sepetim.php" method="get">
                                <?php 
                                include "C:\\xampp\\htdocs\\electrobot\\php\\sepetim.php";
                                ?>
                            </form>
                            <form action="php/sepetitemizle" method="post">
                            <button class="btn btn-outline-danger float-right ml-2" name="sepettenCikar" id="sepettenCikar">Sepeti Temizle</button>
                            </form>
                            <button class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#siparisModal">Sipariş Ver</button>
                            <div class="modal fade" id="siparisModal" tabindex="-1" role="dialog" aria-labelledby="siparisModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="siparisModalLabel">Sipariş Ver</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="php/siparisver.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="toplamFiyat" class="col-form-label">Toplam Fiyat: </label>
                                                        <?php
                                                        include "C:\\xampp\\htdocs\\electrobot\\php\\toplamfiyat.php";
                                                        ?>
                                                        <input type="text" class="form-control bg-transparent" id="toplamFiyat" name="toplamFiyat" value="<?php echo $toplamFiyat; ?> TL" READONLY>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="adres" class="col-form-label">Adres: </label>
                                                        <textarea class="form-control" id="adres" name="adres" rows="5"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="container border border-primary mb-2">
                                                            <label for="hesapNumara" class="col-form-label">Hesap Numarası: </label>
                                                            <input type="text" class="form-control mb-2" id="hesapNumara" name="hesapNumara" maxlength="16">
                                                            <label for="sonKullanmaTarihi" class="col-form-label">Son Kullanma Tarihi: </label>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="text" class="form-control w-100" id="sonKullanmaTarihi" name="sonKullanmaTarihiAy" maxlength="2" placeholder="Ay"> 
                                                                </div>
                                                                <div class="col">
                                                                <input type="text" class="form-control w-100" id="sonKullanmaTarihi" name="sonKullanmaTarihiYil" maxlength="2" placeholder="Yıl">
                                                                </div>
                                                            </div>
                                                            <label for="cvc2" class="col-form-label">CVC2: </label>
                                                            <input type="text" class="form-control mb-2" maxlength="3" id="cvc2" name="cvc2">
                                                        </div>
                                                    </div>
                                                    <hr class="my-5">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                                        <button type="submit" class="btn btn-primary" id="siparisVer" name="siparisVer">Sipariş Ver</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--<div class="modal-footer">
                                            </div>-->
                                        </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>

                <div class="card border-primary">

                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-primary" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Siparişlerim
                        </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="php/sepetim.php" method="get">
                                <?php 
                                include "C:\\xampp\\htdocs\\electrobot\\php\\siparislerim.php";
                                ?>
                            </form>
                            <br><br>
                        </div>
                    </div>

                </div>

                <div class="card border-primary">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-primary" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Şifremi Değiştir
                        </button>
                        </h2>
                    </div>
                    <?php include "php/sifredegistir.php" ?>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <form  method="post" action="<?php $_PHP_SELF?>" onSubmit="return validatePassword()">
                                <div class="form-group">
                                    <div class="col-sm-10">          
                                        <input type="password" class="form-control" id="pwd1" placeholder="Mevcut Şifre" name="pwd1">
                                        <span id="pwd1" class="required"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">          
                                        <input type="password" class="form-control" id="pwd2" placeholder="Yeni Şifre" name="pwd2">
                                        <span id="pwd2" class="required"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">          
                                        <input type="password" class="form-control" id="pwd2_tekrar" placeholder="Yeni Şifre Tekrarı" name="pwd2_tekrar">
                                        <span id="pwd2_tekrar" class="required"></span>
                                    </div>
                                </div>
                                <div class="form-group">        
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-outline-primary" name="submit">Onayla</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <br class="my-10">
        <br class="my-10">
        <br class="my-10">
        <br class="my-10">
        <br class="my-10">
        <br class="my-10">
    </div>
    
    <hr class="my-5">

    <footer class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h5>Hızlı Erişim</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="anasayfa" class="text-muted">Anasayfa</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                </div>

                <div class="col-6 col-md-3">
                    <h5>Kurumsal Bilgiler</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="iletisim" class="text-muted">İletişim</a>
                        </li>
                        <li>
                            <a href="hakkimizda" class="text-muted">Hakkımızda</a>
                </div>

                <div class="col-6 col-md-3">
                    <h5>Yardım</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="kayitkosullari" class="text-muted">Kayıt Koşulları</a>
                        </li>
                        <li>
                            <a href="sikcasorulansorular" class="text-muted">Sıkça Sorulan Sorular</a>
                        </li>
                        <li>
                            <a href="secenekler" class="text-muted">Satış Sözleşmesi ve Müşteri Hizmetleri</a>
                        </li>

                </div>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>