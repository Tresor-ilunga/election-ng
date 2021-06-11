<?php 
namespace App;

class Candidat{
    private $name;
    private $phoneNumber;
    private $status;
    private $adress;
    
    public function getName(){
        return $this->name;
    }
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }
    public function getStatuts(){
        return $this->status;
    }
    public function getAddress(){
        return $this->adress;
    }
    
}

?>