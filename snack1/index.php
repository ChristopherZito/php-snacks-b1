<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack1</title>
</head>
<?php
    $arr = [
        [
            "casa" => "Squadra1casa",
            "ospite" => "Squadra1ospite",
            "puntiCasa" => 32,
            "puntiOspite" => 64 ,
        ],
        [
            "casa" => "Squadra2casa",
            "ospite" => "Squadra2ospite",
            "puntiCasa" => 76,
            "puntiOspite" => 24 ,
        ],
        [
            "casa" => "Squadra3casa",
            "ospite" => "Squadr32ospite",
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

                echo $key["casa"] . "--" . $key["ospite"] . "--" . $key["puntiCasa"] . "--" . $key["puntiOspite"] . "<br>" ;


            }
            ?>
        </div>
    </section>
    
</body>
</html>