<?php
$i ;
$runner[0] = "Martin Kokeš";
$runner[1] = "Jakub Vávrů";
$runner[2] = "Štěpán Kolarovský";
$runner[3] = "Jan Šlechta";
$runner[4] = "Michal Plaček";
$runner[5] = "Martin Lédl";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=0; $i < 5 ; $i++) {  ?>
        Místo <?= $i + 1 ?>. <?= $runner[$i] ?> <br>
        <?php
    }

    ?>


</body>
</html>