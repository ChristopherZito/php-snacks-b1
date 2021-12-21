<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack6</title>
    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
    Stampiamo il nostro array mettendo 
    gli insegnanti in un rettangolo grigio 
    e i PM in un rettangolo verde. -->
    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>

</head>
<body>
    <section id="container">
        <div class="box grey">
           <?php
                $teachers = $db["teachers"];
                for($i=0; $i<count($teachers); $i++){
                    $teacher = $teachers[$i];
                    echo $teacher["name"] ." ". $teacher["lastname"] . "<br>";
                }
           ?>
        </div>
        <div class="box green">
            <?php
                $pms = $db["pm"];
                for($i=0; $i<count($pms); $i++){
                    $pm = $pms[$i];
                    echo $pm["name"] . $pm["lastname"] . "<br>";
                }
            ?>
        </div>
    </section>
    
</body>
</html>