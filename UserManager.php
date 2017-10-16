<?php

class UserManager {

    public $usersList = [];


    public function addUser(User $userData){

        array_push($this->usersList,$userData);

    }

    public function getUser($id){

        /** @var USER $user */
        foreach ($this->usersList as $user) {
            if ($user->id == $id) {
                return $user;
                break;
            }
        }
    }
    public function getUsers(){

        /** @var USER $user */
        foreach ($this->usersList as $user) {
                echo $user->getName().'<br>';
            }

    }

    public function updateUser($id, $name, $state){
        
        /** @var User $user */
        foreach ($this->usersList as $user){
            
            if($user->id ==$id){
                $user->setName($name);
                $user->setState($state);
                break;
            }
        }
    }

    public function userState($state, $id){

        /** @var User $user */
        foreach ($this->usersList as $user){

            if ($user->id == $id){
                $user->setState($state);
                break;
            }

        }

    }

    public function deleteUser($id){

        /**@var USER $user*/
        foreach ($this->usersList as $user) {

            if ($user->id == $id) {
                unset($user);
                break;
            }
        }
    }

}
