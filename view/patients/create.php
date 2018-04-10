
 <p>Add patiënts details</p>
<fieldset>
<form action="<?=URL?>patients/save" method="post">
   <label for="Name">Name:</label>
    <input required type="text" name="person" placeholder="patiënt name">
    <br>
    <label> Status:</label>
    <input required type="text" name="status"  placeholder="patiënt status">
    <select name="client_id">
<?php foreach($clients as $client){ ?>
    	<option value="<?= $client['client_id']?>"><?= $client['client_firstname']?> <?= $client['client_lastname']?></option>
<?php } ?>
    </select>
      <select name="species_id">
<?php foreach($species as $specie){ ?>
    	<option value="<?= $specie['species_id']?>"><?= $specie['species_description']?></option>
<?php } ?>
    </select>
    <br>
  
    <input type="submit" name="submit" value="Register">

</form>
</fieldset>