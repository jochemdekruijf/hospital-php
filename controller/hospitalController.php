<?php 

require(ROOT . "model/patientsModel.php");

function index()
{
	render("index", array(
		'patients' => getPatients()
	));
}





 ?>