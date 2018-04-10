<p>Change patiënts details</p>
<fieldset>
<form action="<?=URL?>clients/saveClient" method="post">
   <label for="Name">Firstname:</label>
    <input required type="text" name="Firstname" placeholder="client name"  value="<?= $clients['client_firstname'] ?>">
    <br>
    <label> Lastname:</label>
    <input required type="text" name="Lastname"  placeholder="client Lastname" value="<?= $clients['client_lastname'] ?>" >
    <br>
     <input type="hidden" name="id" value="<?= $clients['client_id'] ?>">
    <input type="submit" name="submit" value="Register">
</form>
</fieldset>
