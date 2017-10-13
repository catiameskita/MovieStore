<?php


    class Customer {

        public $name;
        public $id;
        public $state;


        public function __construct($customerData){

            if(is_array($customerData)){

                foreach($customerData as $key => $value){

                    $this->$key = $customerData[$key];

                }

            }

        }


        public function setName($name){

            $this->name = $name;

        }

        public function getName(){

            return $this->name;

        }

        public function setId($id){

            $this->id = $id;

        }

        public function getId(){

            return $this->id;
        }


        public function setState($state){

            $this->state = $state;

        }

        public function getState(){

            return $this->state;
        }






    }


?>