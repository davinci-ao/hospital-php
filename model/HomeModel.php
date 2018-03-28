<?php

function getPatientsTable() {
	$db = openDatabaseConnection();
	$sql = "SELECT patients.patient_id as id,
			patients.patient_name as name,
			species.species_description as species_name,
			clients.client_firstname as client_firstname,
			clients.client_lastname as client_lastname,
			patients.patient_gender as gender,
			patients.patient_status as status
			FROM patients
			INNER JOIN species ON species.species_id = patients.species_id
			INNER JOIN clients on clients.client_id = patients.client_id;";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getPatients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}
 
function getPatient($id) {
	$db = openDatabaseConnection();
  	$sql = "SELECT * FROM patients WHERE patient_id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
	$db = null;
	return $query->fetch();
}

function getClients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getClient($id) {
	$db = openDatabaseConnection();
  	$sql = "SELECT * FROM clients WHERE patient_id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
	$db = null;
	return $query->fetch();
}

function getSpecies() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getSpecie($id) {
	$db = openDatabaseConnection();
  	$sql = "SELECT * FROM species WHERE species_id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
	$db = null;
	return $query->fetch();
}

function delPatient($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE patient_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function delClient($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function delSpecie($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM species WHERE species_id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function confirmPatientEdit($id, $patient_name, $species_id, $client_id, $patient_status, $patient_gender) {
	$db = openDatabaseConnection();
  	$sql = "UPDATE patients SET patient_name='$patient_name', species_id='$species_id', client_id='$client_id', patient_status='$patient_status', patient_gender='$patient_gender' WHERE patient_id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
  	$db = null;
}

function confirmClientEdit($id, $client_firstname, $client_lastname) {
	$db = openDatabaseConnection();
  	$sql = "UPDATE clients SET client_firstname='$client_firstname', client_lastname='$client_lastname', client_id='$id' WHERE client_id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
  	$db = null;
}

function confirmSpecieEdit($id, $species_description) {
	$db = openDatabaseConnection();
  	$sql = "UPDATE species SET species_description='$species_description' WHERE species_id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
  	$db = null;
}

function createPatient($patient_id, $patient_name, $species_id, $client_id, $patient_status, $patient_gender) {
  	$db = openDatabaseConnection();
  	$sql = "INSERT INTO patients (patient_name, species_id, client_id, patient_status, patient_gender) VALUES ('$patient_name', '$species_id', '$client_id', '$patient_status', '$patient_gender')";
  	$query = $db->prepare($sql);
  	$query->execute();
  	$db = null;
}

function createClient($client_id, $client_firstname, $client_lastname) {
	$db = openDatabaseConnection();
	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES ('$client_firstname', '$client_lastname')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function createSpecie($species_id, $species_description) {
	$db = openDatabaseConnection();
	$sql = "INSERT INTO species (species_description) VALUES ('$species_description')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}
