<?
function gotoclients()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients ";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;

	return $query->fetchAll();
}

function saveClients($answers){
    $db = openDatabaseConnection();

    $sql = "INSERT INTO clients(client_firstname,client_lastname) VALUES (:client_firstname, :client_lastname)";
    
    $query = $db->prepare($sql);
    $query->bindParam(":client_firstname", $answers['Firstname']);
    $query->bindParam(":client_lastname", $answers['Lastname']);
    $query->execute();
 
}
function deleteClients($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM clients WHERE client_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
}

function getClient($id){
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM clients WHERE client_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}
 function updateClient($answers){

$db = openDatabaseConnection();

    $sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname  WHERE client_id = :id ";
    
    $query = $db->prepare($sql);
    $query->bindParam(":firstname", $answers['Firstname']);
    $query->bindParam(":lastname", $answers['Lastname']);
     $query->bindParam(":id", $answers['id']);
    $query->execute();
 }
?>