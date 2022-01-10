<?php
session_start();

if(isset($_SESSION['email'])){
    $conn = mysqli_connect('localhost', 'root', '','e-ticaret');
    if($conn){
        if(isset($_POST['sepeteEkle'])){
            $email = $_SESSION['email'];
            $urunAdi = $_POST['urunAdi'];
            $urunFiyati = $_POST['urunFiyati'];
            $urunAdedi = $_POST['urunAdet'];
            $sql1 = "select * from sepet where Email='$email' and UrunAdi='$urunAdi'";
            $result=$conn->query($sql1);

            if($result->num_rows > 0 ){
                echo "Bu ürün zaten sepetinizde";
                echo "<script>window.open('../hesabim','_self')</script>";
            }else {
                $sql2 = "INSERT INTO sepet VALUES('$email','$urunAdi', '$urunFiyati', '$urunAdedi')";
                $done=$conn->query($sql2);
                echo "<script>window.open('../hesabim','_self')</script>";
            }
        }
    }
    else {
        echo "Connection Failed";
    }
}
else {
    echo "<script>window.open('../giris','_self')</script>";
}

?>