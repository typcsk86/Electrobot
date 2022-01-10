<?php
session_start();

if(isset($_SESSION['email'])){
    if(isset($_POST['sepettenCikar'])){
        $conn = mysqli_connect("localhost", "root", "", "e-ticaret");
        if($conn) {
            $email = $_SESSION['email'];
            $sql = "DELETE from sepet where Email like '%$email%'";
            mysqli_query($conn, $sql);
            echo "<script>window.open('../hesabim','_self')</script>";
        }
        else {
            echo "Connection Failed";
        }
    }
}
?>
