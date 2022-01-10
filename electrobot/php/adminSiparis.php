<?php
$conn = mysqli_connect("localhost", "root", "", "e-ticaret");
if($conn){

    $sql = "select * from siparis";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
        echo '<div class="card">';
        while($row = $result->fetch_assoc()){
            echo '<div class="card-header" id="'.$row['Email'].'heading">';
                echo '<h5 class="mb-0 d-flex justify-content-between">';
                echo '<button class="btn btn-link" data-toggle="collapse" data-target="#'.$row['Email'].'collapse" aria-expanded="true" aria-controls="'.$row['Email'].'collapse">';
                echo $row['Email'];
                echo '</button>';
                echo '<button type="button" class="btn btn-primary">';
                echo 'Kargoya ver';
                echo '</button>';
                echo '</h5>';
                echo '</div>';

                echo '<div id="'.$row['Email'].'collapse" class="collapse show" aria-labelledby="'.$row['Email'].'heading" data-parent="#accordion">';
                    echo '<div class="container">';
                        echo '<div class="row row-cols-1 row-cols-md-3 g-4 mt-1">';
                            echo '<br class="my-10">';
                            echo '<div class="col mb-4">';
                                echo '<div class="card h-100 border-primary">';
                                    echo '<div class="card-body">';
                                        echo '<div class="list-group">';
                                            echo '<button type="button" class="list-group-item list-group-item-action active" aria-current="true">';
                                            echo 'Sipariş 1';
                                            echo '</button>';
                                            echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Urunler'].'</button>';
                                            echo '<button type="button" class="list-group-item list-group-item-action">'.$row['ToplamFiyat'].'</button>';
                                            echo '<button type="button" class="list-group-item list-group-item-action">'.$row['Adres'].'</button>';
                                            echo '<button type="button" class="list-group-item list-group-item-action">'.$row['KargoDurumu'].'</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            
        }
        echo '</div>';

    }

}
else {
    echo "Connection Failed.";
}



?>