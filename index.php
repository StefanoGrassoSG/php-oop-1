<?php
    class Movie {
        public $title;
        public $release;
        public $vote;
        public $director;
        private $avaiable;

        public function getTitleRelease() {
            return $this->title.' '.$this->release;
        }

        public function getActive() {
            return $this->avaiable;
        }

        public function setActive($avaiable) {
            if(is_bool($avaiable)) {
                $this->avaiable = $avaiable;
            }
        }
    }


    $batman = new Movie();

    $batman->title = 'the dark Knight';
    $batman->release = '2008-07-13';
    $batman->vote = 8;
    $batman->director = 'Christopher Nolan';
    $batman->setActive(true);



    $hulk = new Movie();

    $hulk->title = 'the incredible hulk'
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