<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indexed Arrays</title>
</head>
<body>
    <h1>Indexed Arrays</h1>
    <ul>
        <li>
            <a href="index.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="aa.php">Associative Arrays </a>
        </li>
    </ul>
    <?php
        $laptop = array("Acer","Asus","macbook");
        $jumlah_laptop = count($laptop);
        //var_dump($laptop);
       // echo $laptop[0];
    ?>
    <ul>
        <! -- memanggil array dengan for -->
        <?php
        for ($i=0; $i < $jumlah_laptop; $i++) {
            echo "<li>$laptop[$i]</li>";
        }

        ?>
        <! -- memanggil array berdasarkan index --!
        <li><?php //echo $laptop[0]; ?></li>
      
    </ul>
</body>
</html>