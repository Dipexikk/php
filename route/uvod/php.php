<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGMA</title>
</head>
<body>

<?php include "../../components/header.php" ?>

    <h1>Můj první pokus o ztracení deprese z javascriptu</h1>

        <?php
            $name = "Petros";
            $text = "Uživatel";
         ?>

    <p>Zde jméno účastníka na fetu: <?php echo "$name Breit";?>
    </p>



    <?php
        $i = 1;

        while($i <= 6){
            echo "<h3> $text $i </h3>";
            $i = $i + 2;
        }

        for ($j = 0; $j <= 10; $j++) {
            echo "The number is: $j <br>";
        }

    ?>

</body>
</html>