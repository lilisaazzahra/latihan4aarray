<?php 
$warna = ["hijau, ", "kuning, ", "kelabu, ", "merah muda, ", "biru, "];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warna</title>
</head>
<body>
    <p>
        Balonku ada lima </br>
        Rupa-rupa warna-nya </br>

        <?php 
    
        for ($i =0; $i <4; $i++) {
            echo "$warna[$i]"; 
        }
        ?>
        dan
        <?php 
        echo $warna[4];
        ?>
        </br>
        meletus balon
        <?php 
        echo $warna[0];
        ?>
        DOR!!!</br>
        Hatiku sangat kacau.
        

    </p>
</body>
</html>