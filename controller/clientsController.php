
<?php 
require(ROOT . "model/clientsModel.php");


function index(){
    render("clients/overview", array(
        'clients' => gotoclients()
    ));
 }
function create()
{
 render("clients/create", array(
        'clients' => gotoclients(),
    ));
}
function save(){
    $result = saveClients($_POST);
    header('Location: '.URL."clients");
}

function delete($id)
{
    deleteClients($id);
    header('Location: '.URL."clients");
}

function saveClient()
{
  updateClient($_POST);
 header("Location: ".URL. "clients");
}

function update($id)
{

	 $data['clients']= getClient($id);
 	render("clients/update", $data);
}
 
 ?>