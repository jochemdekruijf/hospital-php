
 <p>Add patiënts details</p>
<fieldset>
<form action="<?=URL?>clients/save" method="post">
   <label for="Name">Firstname:</label>
    <input required type="text" name="Firstname" placeholder="clientname">
    <br>
    <label> Lastname:</label>
    <input required type="text" name="Lastname"  placeholder="client Lastname">
    <br>
    <input type="submit" name="submit" value="Register">
    
</form>
</fieldset>