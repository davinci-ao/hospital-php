<?php

    if(isset($_POST['Update'])) {
        editPatientConfirm($id);
        header('location: ' . URL . 'home/index');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Edit</b></h1>

        <label class="createLabel"><b>Name</b></label>
        <input type="text" name="name" placeholder="Knuckles" value="<?php echo $name['patient_name']; ?>" required>
        <br>
        <label><b>Gender<span style="color:red;">*</span></b></label>
        <?php
            if($user['patient_gender'] == 0)
            {
                echo "<input type='radio' name='gender' value='0' required checked>Male</input>";
                echo "<input type='radio' name='gender' value='1'>Female</input>";
            } else {
                echo "<input type='radio' name='gender' value='0' required>Male</input>";
                echo "<input type='radio' name='gender' value='1'checked>Female</input>";
            }
        ?><br>
        <label class="createLabel"><b>Species</b></label>
        <select type="text" placeholder="species" name="species" required>
            <?php
                foreach($species as $specie)
                {
                    if($specie['species_id'] == $name['species_id']){
                        echo "<option value='" . $specie['species_id'] ."'>" . $specie['species_description']  . " ". "</option>";
                    }
                }
                foreach($species as $specie)
                {
                    if($specie['species_id'] != $name['species_id']){
                        echo "<option value='" . $specie['species_id'] ."'>" . $specie['species_description']  . " ". "</option>";
                    }
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Client</b></label>
        <select type="text" placeholder="client" name="client" required>
            <?php
                foreach($clients as $client)
                {
                    if($client['client_id'] == $name['client_id']){
                        echo "<option value='" . $client['client_id'] ."'>" . $client['client_firstname']  . " ".  $client['client_lastname']."</option>";
                    }
                }
                foreach($clients as $client)
                {
                    if($client['client_id'] != $name['client_id']){
                        echo "<option value='" . $client['client_id'] ."'>" . $client['client_firstname']  . " ".  $client['client_lastname']."</option>";
                    }
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Status</b></label>
        <textarea style="max-width: 500px; max-height: 250px; min-height: 100px; min-width: 340px;" name="status" value="<?php echo $name['patient_status']; ?>" required><?php echo $name['patient_status']; ?></textarea>
        <br>
        <button class="createButton" type="submit" name="Update">Update</button>
    </div>
</form>