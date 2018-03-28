<?php
    if(isset($_POST['Update'])) {
        editSpecieConfirm($id);
        header('location: ' . URL . 'home/species');
    }
?>
<form method="POST" action="">
    <h1><b>Edit Specie</b></h1>
    <label class="accLabel"><b>Specie Name<span style="color:red;">*</span></b></label>
    <input type="text" placeholder="Specie Name" name="species_description" required><br>
    <button class="submitButton" type="submit" name="Update">Update Specie</button>
</form>