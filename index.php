<?php
    class Movie {
        public $title;
        public $release;
        public $vote;
        public $director;
        public $avaiable;
    }


    $batman = new Movie();

    $batman->title = 'the dark Knight';
    $batman->release = '2008-07-13';
    $batman->vote = 8;
    $batman->director = 'Christopher Nolan';
    $batman->avaiable = true;
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
                
                echo $batman->title;

                ?>

            </div>
        </div>
    </body>
</html>