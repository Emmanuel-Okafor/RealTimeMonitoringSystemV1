<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {

    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $occupation = isset($_POST['occupation']) ? $_POST['occupation'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : ''; 
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
   // $message = isset($_POST['message']) ? $_POST['message'] : '';
    $date_joined = isset($_POST['date']) && !empty($_POST['date']) && $_POST['date'] != 'auto' ? $_POST['date'] : NULL;
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO guardians VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $occupation, $age, $address, $phone, $email, $date_joined]);
    // Output message
    $msg = 'Created Successfully!';
}


?>

<?=template_header('Create')?>

<!DOCTYPE html>

<div class="content update">
	<h2>Become A Registered Donor</h2>
    <form action="create.php" method="post" id="userform">
        <label for="name">Name</label>
        <label for="email">Email</label>
        <input type="text" name="name"  id="name">
        <input type="text" name="email" placeholder="ms.faith@abu.edu.ng" id="email">        
        <label for="phone">Phone</label>
        <label for="age">Age</label>
        <input type="text" name="phone" placeholder="(234)81-3778-1983" id="phone">
        
        <input type="text" name="age" id="age">
        <label for="occupation">Occupation</label>
        <label for="address">Address</label>
        <input type="text" name="occupation" id="occupation3">
        <input type="text" name="address" id="address">

        
        <br>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>