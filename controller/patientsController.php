<?php 
require(ROOT . "model/patientsModel.php");
require(ROOT . "model/clientsModel.php");
require(ROOT . "model/speciesModel.php");

function index()
{
    render("patients/overview", array(
        'patients' => gotoPatients()
    ));
 }

function create()
{
 render("patients/create", array(
        'clients' => gotoclients(),
        'species' => gotospecies()
    ));
}
 
function save(){
    $result = savePatient($_POST);
    header('Location: '.URL."patients");

}
function delete($id)
{
    deletePatients($id);
    header('Location: '.URL."patients");
}






?>