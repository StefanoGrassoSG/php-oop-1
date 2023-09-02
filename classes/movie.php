<?php
    class Movie {
        public $title;
        public $release;
        public $vote;
        public $director;
        public array  $genre;
        private $avaiable;

        public function __construct($title, $release, $vote, $director, $genre, $avaiable = true)
        {
            $this->title = $title;
            $this->release = $release;
            $this->vote = $vote;
            $this->director = $director;
            $this->genre = $genre;
            $this->setActive($avaiable);
        }

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

