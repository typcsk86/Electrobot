<?php
session_start();
?>

<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 320px) and (max-device-width: 500px)" href="contact_mobile.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 501px)" href="contact.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/searchStyle.css">

    <title>İletişim</title>
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


    <div class="top">
        <div class="first_h">
            <h1>Aklınıza Takılan</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <hr class="top_hr">
                </div>
                <div class="col-8">
                    <h1>Bir Soru mu Var?</h1>
                </div>
            </div>
        </div>
    </div>
</div>  

<div class="down">
    <form action="#" method="post">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2>Sizin için ne yapabiliriz?</h2>
                    <hr class="down_hr">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Konu" name="subject" aria-describedby="basic-addon1">
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="İsim" name="name" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Mail" name="email" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <textarea type="text" class="form-control" style="white-space: pre-line" placeholder="Mesaj" name="message" aria-label="With textarea"></textarea>
                    </div>
                    <input class="btn btn-outline-primary" name="submit" id="submit_button" type="submit" value="GÖNDER">
                </div>
                <div class="col">
                    <p>Bize ne düşündüğünden bahset. Senin için neler yapabileceğimizden. Şikayetlerinden ve tavsiyelerinden. Kısacası aklında ne varsa bize söyleyebilirsin.</p>
                    <div class="row">
                        <div class="col" id="col_down_social">
                            <a href=""><i  class="fab fa-instagram-square fa-2x"></i></a>
                            <a href=""><i id ="icon_social" class="fab fa-twitter-square fa-2x"></i></a>
                            <a href=""><i id="icon_social"  class="fab fa-facebook-square fa-2x"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </form>
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

<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if(!isset($_POST['submit']) || empty($_POST['submit'])){
   
}
else{
    if(!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['subject'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Subject = $_POST['subject'];
        $Message = $_POST['message'];
        $headers = "Name:$Name From: $Email";

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        $mail->SMTPAuth = True;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'mustafasah764@gmail.com';
        $mail->Password = '486486486M';
        $mail->SetFrom('mustafasah764@gmail.com');
        $mail->Subject = $Subject;
        $mail->Body = nl2br("$headers \n\n $Message");
        $mail->AddAddress('mustafasah45@gmail.com');

        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            
        }

        //mail("mustafasah45@gmail.com",$Subject,$Message,$headers);
    }
    else{
        echo '<script language="javascript">alert("Please fill the empty place!!!")</script>';
    }
}


?>
</body>

</html>