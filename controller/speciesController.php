
<?php 
require(ROOT . "model/speciesModel.php");


function index(){
    render("species/overview", array(
        'species' => gotospecies()
    ));


 }
 function create()
{
 render("species/create", array(
        'species' => gotospecies(),
    ));
}
function save(){
    $result = saveSpecies($_POST);
    header('Location: '.URL."species");
}
function delete($id)
{
    deleteSpecies($id);
    header('Location: '.URL."species");
}
function saveSpecie()
{
  updateSpecie($_POST);
 header("Location: ".URL. "species");
}
function update($id)
{
	 $data['species']= getSpecies($id);
 	render("species/update", $data);
}
 ?>