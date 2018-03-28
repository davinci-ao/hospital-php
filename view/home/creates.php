<?php
    if(isset($_POST['add'])) {
        confirmCreateSpecie();
        header('location: ' . URL . 'home/species');
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
        <h1><b>Add Client</b></h1>
        <label class="accLabel"><b>Specie Name<span style="color:red;">*</span></b></label>
        <input type="text" placeholder="Specie Name" name="species_description" required><br>
        <button class="submitButton" type="submit" name="add">Add Specie</button>
    </form>
</body>
</html>