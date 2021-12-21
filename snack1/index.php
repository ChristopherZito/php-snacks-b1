<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack1</title>
    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema.

    Olimpia Milano - Cantù | 55-60 -->
</head>
<?php
    $arr = [
        [
            "casa" => "LCS",
            "ospite" => "LEC",
            "puntiCasa" => 32,
            "puntiOspite" => 64 ,
        ],
        [
            "casa" => "LCK",
            "ospite" => "LCK",
            "puntiCasa" => 76,
            "puntiOspite" => 24 ,
        ],
        [
            "casa" => "LPL",
            "ospite" => "LCK",
            "puntiCasa" => 1,
            "puntiOspite" => 3 ,
        ],
    ]
?>
<body>
    <section id="container">
        <div>
            <?php
            // var_dump($arr); var_dump($key)
            
            $keys = array_keys($arr);
            for($i = 0; $i < count($keys); $i++){
                $key = $arr[$i];

                echo $key["casa"] . " " . $key["ospite"] . " | "  . $key["puntiCasa"] . " - " . $key["puntiOspite"] . "<br>" ;
            }
            ?>
        </div>
    </section>
    
</body>
</html>