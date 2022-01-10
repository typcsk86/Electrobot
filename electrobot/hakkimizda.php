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
    <title>Hakkımızda</title>
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
        <h1 data-aos="fade-up" class="display-4 text-center mb-2">Hakkımızda</h1><br>
        <div class="card">
            <div class="card-header text-white bg-primary mb-3">
                    <h1>Electrobot</h1>
            </div>
            <div class="card-body">
                <h1>Düşün, tasarla, üret..</h1>
                <p><span style="font-family: helvetica; font-size: 12pt;">Teknoloji üretme heyecanına ve uçuk hayallere sahip bir öğrenci ekibi olarak 2020’de yola çıktık. Ürettiğimiz kartlarımızı ve robot kitlerimizi satarak kendimize ar-ge bütçesi oluşturma hayaliyle eticaret sitemizi açarak... İyimser senaryolarımız aklımıza geldikçe hala gülüyoruz :).<br></span></p>
                <p><span style="font-family: helvetica; font-size: 12pt;">Aslında hayallerimiz oldukça gerçekçiydi ve yavaş yavaş gerçeğe de dönüştüğünü söyleyebiliriz, sadece bu kadar uzun ve zorlu bir yol olacağını bilmiyorduk.<br></span></p>
                <p><span style="font-family: helvetica; font-size: 12pt;">Bu süreçte, öğrenci bütçesiyle kurulan bir şirket olarak etik kuralları içerisinde temiz bir şekilde ticaret yapmanın ve Ar-Ge çalışmaları yürütmenin ülkemiz şartlarında ne denli zor olduğunu tecrübe ederek öğrendik. Bu tecrübeleri edinirken çok değerli bir şey keşfettiğimizi farkettik, en büyük heyecanımız olan üretmekten bile daha değerli bir keşifti bu... <b class="tinymceVarsayilan">Üretmeyi öğretmek</b>.<br></span></p>
                <p><span style="font-family: helvetica; font-size: 12pt;">Çığ gibi büyüyen tüketim kültürü döngüsünü kırmak ve insanlara üretmenin tadını hatırlatmak zorundayız. Üretimi, ülkemizin problemlerini çözebilecek tek çıkış yolu olarak görüyoruz. Ancak, bundan da önemlisi üzerinde yaşadığımız dünyamızın sıkıntılarını, problem çözme yeteneği gelişmemiş, fikir, sanat, teknoloji ve çözüm üretemeyen nesillere bırakma lüksümüz olmadığını düşünüyoruz.Electrobot ekibi olarak, ülkemizde üretmeyi seven nesillerin yetişmesi için tüm gücümüzle çalışmaya devam edeceğiz.</p>   
            </div>
        </div>
    </div>
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