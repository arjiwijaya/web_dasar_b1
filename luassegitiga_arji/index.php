<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Segitiga</title>
</head>

<body>
    <h1>Form Hitung Luas Segitiga</h1>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
             <tr>
                <td>Tinggi Segitiga</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr><br>
        </table>
        <?php
        if(isset($_POST['submit'])){
            $alas =$_POST['alas'];
            $tinggi = $_POST['tinggi'];

            //menghitung luas segitiga
            $luas_segitiga = 1/2*$alas*$tinggi;

            echo"Hasil Hitung luas segitiga adalah sebagai berikut:<br/>";
            echo"Diketahui;<br/>";
            echo"Alas Segitiga = $alas<br/>";
            echo"Tinggi Segitiga = $tinggi<br/>";
            echo"Maka luas segitiga sama dengan 1/2 ( $alas x $tinggi ) = $luas_segitiga";

        }
        ?>
        
</body>
</html>