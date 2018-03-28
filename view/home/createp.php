<?php
    if(isset($_POST['add'])) {
        confirmCreatePatient();
        header('location: ' . URL . 'home/index');
    }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <h1><b>Add Patiënt</b></h1>
        <label><b>Patient Name<span style="color:red;">*</span></b></label>
        <input type="text" placeholder="Patient Name" name="patient_name" required><br>
        <label><b>Gender<span style="color:red;">*</span></b></label>
        <input type="radio" name="patient_gender" value="0">Male
        <input type="radio" name="patient_gender" value="1">Female<br>
        <label><b>Species ID<span style="color:red;">*</span></b></label>
        <select type="text" placeholder="species" name="species_id" required>
            <?php
                foreach($species as $specie)
                {
                    echo "<option value=" . $specie['species_id'] .">" . $specie['species_description'] ."</option>";
                }
            ?>
        </select><br>
        <label class="accLabel"><b>Client ID<span style="color:red;">*</span></b></label>
        <select type="text" placeholder="client" name="client_id" required>
            <?php
                foreach($clients as $client)
                {
                    echo "<option value=" . $client['client_id'] .">" . $client['client_firstname'] . " " . $client['client_lastname'] ."</option>";
                }
            ?>
        </select><br>
        <label class="accLabel"><b>Status<span style="color:red;">*</span></b></label>
        <input type="text" placeholder="status" name="patient_status" required><br>
        <button class="submitButton" type="submit" name="add">Add Patient</button>
    </form>
</body>
</html>