<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack5</title>
   <!--  Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. -->
</head>
<body>
    <section id="container">
        <div>
            <?php
                $text = "Lorem ipsum dolor sit. amet consectetur adipisicing elit.
                Aut. aperiam. Maiores fuga, eos rem tempora necessitatibus.
                laboriosam eligendi veniam voluptates .totam neque aut tenetur 
                eius praesentium optio ullam odio ratione.";

                $newText = explode(".", $text);

                for($i=0; $i<count($newText); $i++){
                    $lng = $newText[$i];
                    echo "<p>" .$lng . ".</p>";
                }
            ?>
        </div>
    </section>
    
</body>
</html>