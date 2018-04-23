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

function getPatient($id){
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM patients WHERE patient_id = $id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}

function update($answers){
$db = openDatabaseConnection();

    $sql = "UPDATE patients SET patient_name = :name, species_id = :sp_id, patient_status= :status, client_id = :cl_id WHERE patient_id = :id ";

    $query = $db->prepare($sql);
    $query->bindParam(":name", $answers['name']);
    $query->bindParam(":cl_id", $answers['client_id']);
    $query->bindParam(":status", $answers['status']);
    $query->bindParam(":sp_id", $answers['species_id']);
    $query->bindParam(":id", $answers['id']);
    $query->execute();

 }


