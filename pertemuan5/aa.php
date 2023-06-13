<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assosiative Arrays</title>
</head>
<body>
<h1>
    <ul>
        <li>
             <a href="index.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="aa.php">Associative Arrays </a>
        </li>
    </ul>
</h1>
    
    <hr>
    <?php
         $laptop = array("Acer"=> "Rp.10.000.000","Asus" => "Rp.13.000.000","macbook" => "Rp.15.000.000");
         //var_dump ($laptop);
        // echo $laptop["Acer"];
    ?>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>No</th>
            <th>Nama Laptop</th>
            <th>Harga Laptop</th>
        </tr>
        <?php 
        $i = 1;
        foreach($laptop as $l => $l_value) :?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $l; ?></td>
                <td><?= $l_value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>