<h1>Hospital</h1>
<ul>
 <li><a href="http://localhost/hospital-mvc/patients">Patiënts</a></li>
 <li><a href="http://localhost/hospital-mvc/clients">Clients</a></li>
<li><a href="http://localhost/hospital-mvc/species"> Species</a></li>
	</ul>

<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th colspan="2">action</th>
			</tr>
		</thead>
		<?
	
	foreach ($clients as $patient) {
  	 		echo "<tr>";
            echo "<td>" . $patient["client_firstname"]  ."</td>";
            echo "<td>" .  $patient["client_lastname"]  ."</td>";
            echo "<td class='center'>" . "<a href='". URL. "clients/update/". $patient['client_id']."'>edit</a></td>";
            echo "<td class='center'>" . "<a href='" . URL . "clients/delete/". $patient['client_id'] ."'>X</a></td>";  
           	echo "</tr>";  
     }
	?>
</table>
 <p><a href= "clients/create/">Create</a></p>
  <p><a href='http://localhost/hospital-mvc/ '>Home</a></p>
	
