<?php

$bad_word = $_GET['badwords'];
$text = $_GET['text'];

$censured_text = str_replace($bad_word, '***' , $text);

$original_length = strlen($text);
$new_length = strlen($censured_text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <section class="container w-50 bg-primary mt-5 p-4">
        <div class="mb-3">
            <h1>Paragrafo originale</h1>
            <h4><?= $text ?></h4>
            <h5>Il pragrafo originale era lungo <strong><?= $original_length ?></strong> caratteri</h5>
        </div>
        <div class="mb-3">
            <h1>Paragrafo censurato</h1>
            <h4><?= $censured_text ?></h4>
            <h5>Il pragrafo originale era lungo <strong><?= $new_length ?></strong> caratteri</h5>
        </div>
    </section>
    
</body>
</html>