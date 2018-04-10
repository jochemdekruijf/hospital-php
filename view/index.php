<h1>Hospital</h1>
<ul>
 <li><a href="http://localhost/hospital-mvc/patients">Patiënts</a></li>
 <li><a href="http://localhost/hospital-mvc/clients">Clients</a></li>
<li><a href="http://localhost/hospital-mvc/species">Species</a></li>
	</ul>

<h2>Overview</h2>
	<table>
		<thead>
			<tr>
				<th>patiënts</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<!-- <th colspan="2">action</th> -->
			</tr>
		</thead>
		<?
	
	foreach ($patients as $patient) {
  	 		echo "<tr>";
            echo "<td>" . $patient["patient_name"]  . "</td>";
            echo "<td>" . $patient["species_description"]  . "</td>";
            echo "<td>" . $patient["patient_status"]  . "</td>";
            echo "<td>" . $patient["client_firstname"]  . " ".  $patient["client_lastname"] ."</td>";
            // echo "<td class='center'>" . "<a href='#'>edit</a></td>";
            // echo "<td class='center'>" . "<a href='" . URL . "species/delete/". $patient['species_id'] ."'>X</a></td>";  
           	echo "</tr>";  
     }
	?>
</table>
   
	