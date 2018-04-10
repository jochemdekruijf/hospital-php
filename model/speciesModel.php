<?
function gotospecies()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species ";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;

	return $query->fetchAll();
}

function saveSpecies($answers){
    $db = openDatabaseConnection();

    $sql = "INSERT INTO species(species_description) VALUES (:specie)";
    
    $query = $db->prepare($sql);
    $query->bindParam(":specie", $answers['species']);
    $query->execute();
 
}
function deleteSpecies($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM species WHERE species_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
}
?>