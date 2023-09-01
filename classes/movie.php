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

    $hulk->title = 'the incredible hulk';