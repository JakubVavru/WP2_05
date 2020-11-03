<?php
$i ;
$runner = array (
"Martin Kokeš",
"Jakub Vávrů",
"Štěpán Kolarovský",
"Jan Šlechta",
"Michal Plaček",
"Martin Lédl",
)
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
    for ($i=0; $i < count($runner) ; $i++) {  ?>
        Místo <?= $i + 1 ?>. <?= $runner[$i] ?> <br>
        <?php
    }

    ?>


</body>
</html>