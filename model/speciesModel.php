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
function getSpecies($id){
  $db = openDatabaseConnection();

    $sql = "SELECT * FROM species WHERE species_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}

function deleteSpecies($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM species WHERE species_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
}
  function updateSpecie($answers){
    $db = openDatabaseConnection();
    $sql = "UPDATE species SET species_description = :specie WHERE species_id = :id ";
    
    $query = $db->prepare($sql);
    $query->bindParam(":specie", $answers['species']);
    $query->bindParam(":id", $answers['id']);
    $query->execute();
 }

?>