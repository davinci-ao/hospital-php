<?php
    if(isset($_POST['Update'])) {
        editClientConfirm($id);
        header('location: ' . URL . 'home/clients');
    }
?>
<form method="POST" action="">
    <h1><b>Edit Client</b></h1>
    <label class="accLabel"><b>Firstname<span style="color:red;">*</span></b></label>
    <input type="text" placeholder="Firstname" name="cfirstname" required><br>
    <label class="accLabel"><b>Lastname<span style="color:red;">*</span></b></label>
    <input type="text" placeholder="Lastname" name="clastname" required><br>
    <button class="submitButton" type="submit" name="Update">Update Client</button>
</form>