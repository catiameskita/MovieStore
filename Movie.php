<?php


class Movie {

	public $name;
	public $year;
	public $director;
	public $category;
	public $rating;
	public $availability;


	public function  __construct($movieData){

	    if(is_array($movieData)){

	        foreach ($movieData as $key => $value)
                $this->$key = $movieData[$key];

        }

    }


	public function setName($name){

		$this->name = $name;

	}

	public function getName():string{

		return $this->name;

		
	}

	public function setYear($year){

		$this->year = $year;

		
	}

	public function getYear(){

		return $this->year;

		
	}

	public function setDirector($director){

		$this->director = $director;

		
	}

	public function getDirector(): string{
		return $this->director;
	}

		
	

	public function setCategory($category){

		$this->category = $category;

		
	}

	public function getCategory():string{

		return $this->category;

		
	}

	public function setRating($rating){

		$this->rating = $rating;

		
	}

	public function getRating():float{

		return $this->rating; 

		
	}


    public function setAvailability($availability){


	    $this->availability = $availability;


	}


    public function getAvailability(){

        return $this->availability;



    }


}





?>