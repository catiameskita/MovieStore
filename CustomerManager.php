<?php

class CustomerManager{

    public $customersList = [];


    public function addCustomer(Customer $customerData){

        array_push($this->customersList, $customerData);

    }

    public function getCustomers(){

        $number = count($this->customersList);

        for ($i=0;$i<$number; $i++){
            echo $this->customersList[$i]->getName().'<br>';
        }
    }

    public function getCustomer($id){

        /** @var Customer $customer */
        foreach ($this->customersList as $customer){
            if($customer->id == $id){
                return $customer;
                break;
            }
        }
    }

    public function redCostumersList(){

        /** @var Customer $customer */
        foreach ($this->customersList as $customer){

            if($customer->state == 'Red'){
                Echo $customer->name.'<br>';
            }

        }
    }

    public function updateCustomer($id, $name){

        /** @var Customer $customer */
        foreach ($this->customersList as $customer){

            if($customer->id == $id){
                 $customer->setName($name);
                break;
            }

        }

    }

    public function deleteCustomer($id){

        /** @var Customer $customer */

        foreach ($this->customersList as $customer){

              if ($customer->id == $id){
                  unset($customer);
                  break;
              }
          }

    }
}


?>