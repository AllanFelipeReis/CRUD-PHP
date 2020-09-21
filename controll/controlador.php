<?php
require_once '../modelos/person.php';
require_once '../dao/DAO.php';

switch ($_GET['method']) {
	case 'create':
		$person = new Person();
		$person->setName($_POST['name']);
		$person->setCpf($_POST['cpf']);
		$person->setRg($_POST['rg']);
		$person->setEmail($_POST['email']);
		$person->setMaritalStatus($_POST['maritalStatus']);
		$person->setGender($_POST['gender']);
		$person->setBirthDate($_POST['birthDate']);

		PersonDAO::create($person);
		break;
	case 'edit':
		$person = new Person();
		$person->setId($_POST['id']);
		$person->setName($_POST['name']);
		$person->setCpf($_POST['cpf']);
		$person->setRg($_POST['rg']);
		$person->setEmail($_POST['email']);
		$person->setMaritalStatus($_POST['maritalStatus']);
		$person->setGender($_POST['gender']);
		$person->setBirthDate($_POST['birthDate']);

		PersonDAO::update($person);
		break;
	case 'elim':
		PersonDAO::delete($_GET['id']);
		break;
}

header('Location: ../views/');
