<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack7</title>
    <!-- Creare un array contenente qualche alunno di un'ipotetica classe.
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
</head>
<body>
    <section id="container">
        <div>
            <?php
                $class = [
                    "Me Medesimo" => [6,7,9,9,8,6,6,7],
                    "Me Parallelo" => [1,2,3,4,2,4,1,3]
                ];
                $name = array_keys($class);
                
                foreach($name as $value){
                    $score = $class[$value];
                    foreach($score as $voti){
                        $media += $voti;
                    }
                    $media /= count($score);
                    echo $value . ":". round($media , 1) . "<br>";
                }
            ?>
        </div>
    </section>
    
</body>
</html>