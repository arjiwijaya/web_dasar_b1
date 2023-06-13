<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
    

        <?php
            $nama_mahasiswa = "Arji";
            $prodi = "Sistem Informasi";
        ?>

    <p>
        Nama saya adalah <?= $nama_mahasiswa. ' ' . $prodi; ?> ,Saya adalah mahasiswa UMSU Prodi <?= $prodi; ?>
    </p>

    <?php
    $nilai1 = 25;
    $nilai2 = 20;
    ?>

    <p> Hasil dari <?= $nilai1 ?> + <?= $nilai2 ?>
    adalah <?= $nilai1 + $nilai2 ?>
    </p>

    
    <p> Hasil dari <?= $nilai1 ?> - <?= $nilai2 ?>
    adalah <?= $nilai1 - $nilai2 ?>
    </p>

    
    <p> Hasil dari <?= $nilai1 ?> * <?= $nilai2 ?>
    adalah <?= $nilai1 * $nilai2 ?>
    </p>

    
    <p> Hasil dari <?= $nilai1 ?> / <?= $nilai2 ?>
    adalah <?= $nilai1 / $nilai2 ?>
    </p>

    </body>
</html>