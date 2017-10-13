<?php
/**
 * Created by PhpStorm.
 * User: mesqu
 * Date: 04/10/2017
 * Time: 17:46
 */

class RentalManager
{

    public $rentalList= [];
    public $overdueList = array();


    public function addRental(Rental $rental){

        array_push($this->rentalList, $rental);

    }

    public function rental(Rental $rental){

        /** @var Rental $rental */

        foreach ($this->rentalList as $rental) {
            $userSt = $rental->getUser()->getState();
            $customerSt = $rental->getCustomer()->getState();
            $movieAv = $rental->getMovie()->getAvailability();

            if ($userSt == 'Active' && $customerSt == 'Clean' && $movieAv == '0') {

                $rental->getMovie()->setAvailability('1');

                Echo 'Movie Rented<br>';

            } else {

                Echo 'Something Went Wrong, check the movie\'s
                 availability and customer\'s state!<br>';
            }
        }
    }

    public function getRentals(){
        /** @var Rental $rental */

        foreach ($this->rentalList as $rental){

           Echo $rental->getUser()->getName().'<br>';
           Echo $rental->getCustomer()->getName().'<br>';
           Echo $rental->getMovie()->getName().'<br>';
           Echo $rental->getDate()->format('H:i:s').'<br>';


        }

    }

    public function overdue(){

        $currentDate = new DateTime();

        /** @var Rental $rental */
        foreach ($this->rentalList as $rental){

            $rentalDate = $rental->getDate();
            $devolutionLimit = $rental->getDevolution();

            if($currentDate > $devolutionLimit){

                    array_push($overdueList, $rental->getMovie());

                    echo $rental->getMovie()->getName();

            }

        }

    }

}