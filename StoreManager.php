<?php

    class StoreManager{


        public $list = [];

        //array associativo, está a atribuir à key [nome do filme].
        //posso aceder ao array através da posição e neste caso através do nome.
        //porque está a ser atribuído o nome do filme  à key do array
        //acedo ao array pela posição ou pelo nome da key


        public function addMovie(Movie $movieData){
            $this->list[$movieData->getName()] = $movieData;
        }

        public function getMovies(){

         /** @var Movie $movie */
            foreach ($this->list as $movie){

               echo $movie->getName().'<br>';

           }


        }


        public function getMovie($name){
            /** @var Movie $movie */

            return $this->list[$name];
        }

        public function releaseMovie($name){

            $this->list[$name]->setAvailability('0');
            Echo 'The Movie '.$name.' is now available!<br>';

        }

        public function rentedMovies(){

            foreach($this->list as $movie){

                if($movie->availability == '1'){
                    Echo  $movie->getName().'<br>';
                }
            }
        }


        public function getMovieInfo($name){

            echo '<br>';
            echo 'Name: '.$this->list[$name]->getName().'<br>';
            echo 'Year: '.$this->list[$name]->getYear().'<br>';
            echo 'Director: '.$this->list[$name]->getDirector().'<br>';
            echo 'Category: '.$this->list[$name]->getCategory().'<br>';
            echo 'Rating: '.$this->list[$name]->getRating().'<br>';
            echo 'Availability: '.$this->list[$name]->getAvailability().'<br>';
            echo '<br>';

        }

        public function getDirector($name){

            echo $this->list[$name]->director;
        }

        public function getCategory($name){

            echo $this->list[$name]->category;
        }

        public function getAvailability($name)
        {
            switch ($this->list[$name]->availability){

                case 0: echo "Movie Available";
                break;
                case 1: echo "Movie Not Available";
            }

        }


    }



?>