<?

function gotoPatients()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients ";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;

	return $query->fetchAll();
}
function savePatient($answers){
    $db = openDatabaseConnection();
   $client_id= 1;
   $species_id = 1;
    $sql = "INSERT INTO patients(patient_name,patient_status,client_id,species_id) VALUES (:name, :status, :client_id, :species_id)";
    
    $query = $db->prepare($sql);
    $query->bindParam(":name", $answers['person']);
    $query->bindParam(":status", $answers['status']);
    $query->bindParam(":client_id", $answers['client_id']);
   	$query->bindParam(":species_id", $answers["species_id"]);
    $query->execute();
}
function deletePatients($id){
    $db = openDatabaseConnection();

    $sql = "DELETE FROM patients WHERE patient_id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":id", $id);
    $query->execute();
}
?>