<h1>Hospital</h1>
<ul>
 <li><a href="http://localhost/hospital-mvc/patients">Patiënts</a></li>
 <li><a href="http://localhost/hospital-mvc/clients">Clients</a></li>
<li><a href="http://localhost/hospital-mvc/clients">Species</a></li>
	</ul>

<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>patiënts</th>
				<th>Status</th>
				<th colspan="2">action</th>
			</tr>
		</thead>
		<?
	
	foreach ($patients as $patient) {
  	 		echo "<tr>";
            echo "<td>" . $patient["patient_name"]  . "</td>";
            echo "<td>" . $patient["patient_status"]  . "</td>";
            echo "<td class='center'>" . "<a href='#'>edit</a></td>";
            echo "<td class='center'>" . "<a href='" . URL . "patients/delete/". $patient['patient_id'] ."'>X</a></td>";  
           	echo "</tr>";  
     }
	?>
</table>
	 <p><a href= "patients/create/">Create</a></p>
     <p><a href='http://localhost/hospital-mvc/ '>Home</a></p>
	
