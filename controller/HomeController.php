<?php

	require(ROOT . "model/HomeModel.php");

	function index()
	{
		render("home/index", array(
			'patients' => getPatientsTable()
		));	
	}

	function clients() {
		render("home/clients", array(
			'clients' => getClients()
		));	
	}

	function delete($id) {
		delPatient($id);
		header('Location: ../index');
	}

	function deletec($id) {
		delClient($id);
		header('Location: ../clients');
	}

	function deletes($id) {
		delSpecie($id);
		header('Location: ../species');
	}

	function createp() {
		render("home/createp", array(
			'species' => getSpecies(),
			'clients' => getClients()
		));
	}

	function createc() {
		render("home/createc", array(
			'clients' => getClients()
		));
	}

	function creates() {
		render("home/creates", array(
			'species' => getSpecies()
		));
	}

	function species() {
		render("home/species", array(
			'species' => getSpecies()
		));
	}

	function confirmCreatePatient() {
		$patient_id = $_POST['patient_id'];
		$patient_name = $_POST['patient_name'];
		$species_id = $_POST['species_id'];
		$client_id = $_POST['client_id'];
		$patient_status = $_POST['patient_status'];
		$patient_gender = $_POST['patient_gender'];
		createPatient($patient_id, $patient_name, $species_id, $client_id, $patient_status, $patient_gender);
	}

	function confirmCreateClient() {
		$client_id = $_POST['client_id'];
		$client_firstname = $_POST['client_firstname'];
		$client_lastname = $_POST['client_lastname'];
		createClient($client_id, $client_firstname, $client_lastname);
	}

	function confirmCreateSpecie() {
		$species_id = $_POST['species_id'];
		$species_description = $_POST['species_description'];
		createSpecie($species_id, $species_description);
	}

	function editp($id) {
		render("home/editp", array(
			'id' => $id,
			'name' => getPatient($id),
			'species' => getSpecies(),
			'clients' => getClients()
		));
	}
	
	function editc($id) {
		render("home/editc", array(
			'id' => $id,
			'clients' => getClients()
		));
	}

	function edits($id) {
		render("home/edits", array(
			'id' => $id,
			'species' => getSpecies()
		));
	}

	function editPatientConfirm($id) {
		$patient_name = $_POST['name'];
		$species_id = $_POST['species'];
		$client_id = $_POST['client'];
		$patient_status = $_POST['status'];
		$patient_gender = $_POST['gender'];
		confirmPatientEdit($id, $patient_name, $species_id, $client_id, $patient_status, $patient_gender);
	}

	function editClientConfirm($id) {
		$client_firstname = $_POST['cfirstname'];
		$client_lastname = $_POST['clastname'];
		$client_id = $_POST['client_id'];
		confirmClientEdit($id, $client_firstname, $client_lastname);
	}

	function editSpecieConfirm($id) {
		$species_id = $_POST['species_id'];
		$species_description = $_POST['species_description'];
		confirmSpecieEdit($id, $species_description);
	}