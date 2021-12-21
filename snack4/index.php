<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack4</title>
    <!-- Creare un array con 15 numeri casuali, 
    tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
</head>
<body>
    <section id="container">
        <div>
            <?php
                $koaku = [];
                $numbers = [];

                while(count($koaku) < 15) {
                    $num = rand(1, 100);
                    if(!in_array($num , $numbers)){
                        $numbers = $num;
                    }
                   
                }
            ?>
        </div>
    </section>
    
</body>
</html>