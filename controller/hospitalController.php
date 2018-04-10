<?php 

require(ROOT . "model/hospitalModel.php");

function index()
{
	render("index", array(
		'patients' => getPatients()
	));
}





 ?>