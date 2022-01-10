<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="collapse navbar-collapse d-flex justify-content-end p-1" id="navbarSupportedContent">
    <form method="post">
    <?php
      if(isset($_SESSION['email'])){
        echo '<ul class="navbar-nav">';
        echo '<li class="nav-item active mb-2">';
        echo '<a class="btn btn-outline-primary" href="php/logout">Çıkış Yap</a>';
        echo '</li>';
        echo '</ul>';
      }
    ?>
    </form>
  </div>
</nav>

<div class="container mt-5">
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="heading">
        <h5 class="mb-0 d-flex justify-content-between">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
          Siparişler
        </button>
        <form action="php/kargoyaVer" method="post">
        <button type="submit" class="btn btn-primary" name="kargoyaVer" id="kargoyaVer">
          Kargoya ver
        </button>
        </form>
        </h5>
      </div>
      <div id="collapse" class="collapse show" aria-labelledby="heading" data-parent="#accordion">
        <div class="container">
          <?php 
          $conn = mysqli_connect("localhost", "root", "", "e-ticaret");
          if($conn){
              $sql = "select * from siparis";
              $result = $conn->query($sql);
              if(mysqli_num_rows($result)>0){
                $i = 1;
                echo '<div class="row row-cols-1 row-cols-md-3 g-4 mt-1">';
                while($row=mysqli_fetch_assoc($result)){
                  if($row['KargoDurumu'] == "Kargoya verilmedi."){
                    echo '<div class="col mb-4">';
                        echo '<div class="card h-100 border-primary">';
                            echo '<div class="card-body">';
                                echo '<div class="list-group">';
                                    echo '<button type="button" class="list-group-item list-group-item-action active" aria-current="true">';
                                    echo 'Sipariş '.$i;
                                    echo '</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Email'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Urunler'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['ToplamFiyat'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Adres'].'</button>';
                                    echo '<button type="button" class="list-group-item list-group-item-action list-group-item-danger">'.$row['KargoDurumu'].'</button>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                  }
                  $i++;
                }
                echo '</div>';
              }
          }
          else {
              echo "Connection Failed.";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<br class="mb-10">

</body>
</html>