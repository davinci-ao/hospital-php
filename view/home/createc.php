<?php
    if(isset($_POST['add'])) {
        confirmCreateClient();
        header('location: ' . URL . 'home/clients');
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
        <label class="accLabel"><b>Firstname<span style="color:red;">*</span></b></label>
        <input type="text" placeholder="Firstname" name="client_firstname" required><br>
        <label class="accLabel"><b>Lastname<span style="color:red;">*</span></b></label>
        <input type="text" placeholder="Lastname" name="client_lastname" required><br>
        <button class="submitButton" type="submit" name="add">Add Client</button>
    </form>
</body>
</html>