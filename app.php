<?php

//DBs
require_once('DbMovies.php');
require_once('DbUsers.php');
require_once('DbCustomers.php');

//Entities
require_once ('User.php');
require_once ('Customer.php');
require_once ('Movie.php');
require_once ('Rental.php');


//Managers
require_once ('UserManager.php');
require_once ('CustomerManager.php');
require_once ('StoreManager.php');
require_once ('RentalManager.php');

//Resources

//myStoreManager

$myStoreManager = new StoreManager();

        /** @var Movie $movieData */

foreach ($movies as $movieData) {

        $myStoreManager->addMovie(new Movie($movieData));

    }

//myCustomerManager

$myCustomerManager = new CustomerManager();

    /** @var Customer $customerData */

foreach ($customers as $customerData) {

    $myCustomerManager->addCustomer(new Customer($customerData));
}

//myUserManager

$myUserManager = new UserManager();

        /** @var User $userData */

foreach ($users as $userData) {

            $myUserManager->addUser(new User($userData));
        }

//myRentalManager

$myRentalManager = new RentalManager();


$myStoreManager->addMovie(new Movie(
    array(
        'name' =>'Tulip Fever',
        'year' => '2017',
        'director' => 'Justin Chadwick',
        'category' => 'Drama',
        'rating' => '6.3',
        'availability' => '0'
    )
));

//User Manager Debug
echo '<br>';
echo '<br>';
echo 'USER MANAGER DEBUG';
echo '<br>';
echo '<br>';

$myUserManager->addUser(new User(

    array(
        'id' => '3',
        'name' => 'Rita',
        'state' => 'Active',
    )));

$myUserManager->getUsers();


//Customer Manager Debug
echo '<br>';
echo '<br>';
echo 'CUSTOMER MANAGER DEBUG';
echo '<br>';
echo '<br>';

$myCustomerManager->addCustomer(new Customer(

    array(
        'id'=>'3',
        'name' =>'Joaquim',
        'state'=>'Clean'
    )
));

$myCustomerManager->getCustomers();

//Store Manager Debug
echo '<br>';
echo '<br>';
echo 'STORE MANAGER DEBUG';
echo '<br>';
echo '<br>';

$myStoreManager->getMovies();


//Rental Manager Debug
echo '<br>';
echo '<br>';
echo 'RENTAL MANAGER DEBUG';
echo '<br>';
echo '<br>';

$myRental = new Rental($myUserManager->getUser(2),$myCustomerManager->getCustomer(2),$myStoreManager->getMovie('IT'));

$myRentalManager->addRental($myRental);

$myRentalManager->rental($myRental);


$myRentalManager->overdue();








//get availables
//rent movie
//get overdue (0)
//get availables
//sleep 60seg
//get overdue (1)
//release movie
//get overdue (0 overdues)


?>










