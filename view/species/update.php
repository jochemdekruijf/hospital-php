<p>Change patiënts details</p>
<fieldset>
<form action="<?=URL?>species/saveSpecie" method="post">
   <label for="Name">Specie:</label>
    <input required type="text" name="species" placeholder="specie name"  value="<?= $species['species_description'] ?>">
     <input type="hidden" name="id" value="<?= $species['species_id'] ?>">
    <input type="submit" name="submit" value="Register">
</form>
</fieldset>
  </select>
