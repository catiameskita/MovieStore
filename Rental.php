<?php
/**
 * Created by PhpStorm.
 * User: mesqu
 * Date: 04/10/2017
 * Time: 17:43
 */

class Rental{

    public $user;
    public $customer;
    public $movie;
    public $date;
    public $devolution;


    public function __construct($user, $customer,$movie){

           $this->user = $user;
           $this->customer = $customer;
           $this->movie = $movie;
           $this->date = new DateTime();
           $date = new DateTime();
           $this->devolution = $date->add(new DateInterval('PT30S'));
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param mixed $movie
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
    }

    public function setDevolution($devolution)
    {
        $this->devolution = $devolution;
    }
    public function getDevolution()
    {
        return $this->devolution;
    }

}

?>