<?php
    require_once __DIR__.'/classes/movie.php';


    
    $batman = new Movie('the dark Knight', '2008-07-13', 8, 'Christopher Nolan');

    $hulk = new Movie('the incredible hulk', null, null, null);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <div class="container">
            <div class="text">

                <?php

                var_dump($batman);
                
                echo $batman->getTitleRelease();


                var_dump($hulk);
                ?>

                <script>
                    movie = {
                        title : 'batman',
                        release : '2008',
                        vote : 8
                    }

                    let text = document.querySelector('.text') 
                    //text.innerHTML(movie.title)
                    text.innerHTML += movie.title;
                    for(let key in movie) {
                        console.log(movie[key])
                    }
                </script>
            </div>
        </div>
    </body>
</html>