<?php

class Person{

    private $id;
    private $name;
    private $cpf;
    private $rg;
    private $email;
    private $maritalStatus;
    private $birthDate;
    private $gender;

    public function construct(){
			$this->id = 0;
	    $this->name = '';
	    $this->cpf = '';
	    $this->rg = '';
	    $this->email = '';
	    $this->maritalStatus = '';
      $this->birthDate = '';
	    $this->gender = '';
    }

    public function getId(){
      return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getMaritalStatus(){
        return $this->maritalStatus;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getBirthDate(){
        return $this->birthDate;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setRg($rg){
        $this->rg = $rg;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setMaritalStatus($maritalStatus){
        $this->maritalStatus = $maritalStatus;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function setBirthDate($birthDate){
        $this->birthDate = $birthDate;
    }
}
?>
