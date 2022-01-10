
<?php
//HESAP BİLGİLERİNİ HESABIM SAYFASINDA BULUNAN HESAP BİLGİLERİ KISMINA YAZDIRMA
$connection=mysqli_connect("localhost","root","","e-ticaret");

            if(!$connection){
				echo "Connection Failed...";
			}
			$search = $_SESSION["email"];
            $sql = "select * from uye where email like '%$search%'";
            //$result = $connection->query($sql);
			$result=mysqli_query($connection,$sql);
            /*if ($result->num_rows > 0) 
                    $row = $result->fetch_assoc()*/
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					$adi = $row['ad'];
                    $soyadi= $row['soyad'];
					$email = $row['email'];
					$pwd =$row['sifre'];
				}
			}
			
			
?>