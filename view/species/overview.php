<h1>Hospital</h1>
<ul>
 <li><a href="http://localhost/hospital-mvc/patients">Patiënts</a></li>
 <li><a href="http://localhost/hospital-mvc/clients">Clients</a></li>
<li><a href="http://localhost/hospital-mvc/species">Species</a></li>
	</ul>

<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Species</th>
				<th colspan="2">action</th>
			</tr>
		</thead>
		<?
	
	foreach ($species as $patient) {
  	 		echo "<tr>";
  	 		echo "<td>" . $patient["species_id"]  . "</td>";  
            echo "<td>" . $patient["species_description"]  . "</td>";     
            echo "<td class='center'>" . "<a href='#'>edit</a></td>";
            echo "<td class='center'>" . "<a href='" . URL . "species/delete/". $patient['species_id'] ."'>X</a></td>";  
           	echo "</tr>";  
     } 
	?>
</table>
 <p><a href= "species/create/">Create</a></p>
  <p><a href='http://localhost/hospital-mvc/ '>Home</a></p>