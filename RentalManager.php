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

                Echo '<strong>Movie Rented</strong><br>';
                Echo "User: ".$rental->getUser()->getName().'<br>';
                Echo "Customer: ".$rental->getCustomer()->getName().'<br>';
                Echo "Movie: ".$rental->getMovie()->getName().'<br>';
                Echo "Date : ".$rental->getDate()->format('H:i:s').'<br>';

            } else {

                Echo 'Something Went Wrong!<br>';
            }
        }
    }


    public function overdue(){

        $currentDate = new DateTime();

        /** @var Rental $rental */
        foreach ($this->rentalList as $rental){

           $devolutionLimit = $rental->getDevolution();

            if($currentDate > $devolutionLimit){

                    array_push($overdueList, $rental->getMovie());

                    echo $rental->getMovie()->getName();

            }else{

                Echo "No OverdueList!";
            }

        }

    }

}