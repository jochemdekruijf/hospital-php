
 <p>update patiënts details</p>
<fieldset>
<form action="<?=URL?>patients/editSave" method="post">
   <label for="Name">Name:</label>
    <input required type="text" name="name" placeholder="patiënt name" value="<?= $patient['patient_name']?> ">
    <br>
    <label> Status:</label>
    <input required type="text" name="status"  placeholder="patiënt status" value="<?= $patient['patient_status']?> ">
    <br>
    <label >Client:</label>
    <select name="client_id">
<?php foreach($clients as $client){ ?>
    	<option value="<?= $client['client_id']?>"><?= $client['client_firstname']?> <?= $client['client_lastname']?></option>
<?php } ?>
    </select>
    <br>
    <label>Specie:</label>

     <select name="species_id">
<?php foreach($species as $specie){ ?>
    	<option value="<?= $specie['species_id']?>"><?= $specie['species_description']?></option>
<?php } ?>
    </select>
  
   <input type="hidden" name="id" value="<?= $patient['patient_id'] ?>">
   <br>
    <input type="submit" name="submit" value="Register">

</form>
</fieldset>