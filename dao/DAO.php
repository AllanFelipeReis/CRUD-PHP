<?php
require_once '../modelos/connection.php';
require_once '../modelos/person.php';

class PersonDAO {
	public static function serch () {
		$con = new Conn();
		$cont = $con->search('SELECT * FROM people');
		$con->close();
		return $cont;
	}

	public static function create ($person) {
		$con = new Conn();
		$con->update("INSERT INTO people (name, cpf, rg, email, marital_status, birth_date, gender)
									VALUES ('".$person->getName()."', '".$person->getCpf()."', '".$person->getRg()."',
									'".$person->getEmail()."', '".$person->getMaritalStatus()."', '".$person->getBirthDate()."',
									'".$person->getGender()."')");
		$con->close();
	}

	public static function searchId ($id) {
		$con = new Conn();
		$cont = $con->search("SELECT * FROM people WHERE Id = $id");
		$con->close();
		return $cont[0];
	}

	public static function update ($person) {
		$con = new Conn();
		$con->update("UPDATE people
		SET name = '".$person->getName()."', cpf = '".$person->getCpf()."', rg = '".$person->getRg()."',
		 		email = '".$person->getEmail()."', marital_status = '".$person->getMaritalStatus()."',
				birth_date = '".$person->getBirthDate()."', gender = '".$person->getGender()."'
			 						WHERE id = ".$person->getId()."");
		$con->close();
	}

	public static function delete ($id) {
		$con = new Conn();
		$con->update("DELETE FROM people WHERE id = $id");
		$con->close();
	}
}
