<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

// Check if the orphanstb id exists, for example update.php?id=1 will get the orphanstb with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {

        // This part is similar to the create.php, but instead we update a record and not insert
        /*
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $DOB = isset($_POST['DOB']) ? $_POST['DOB'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';
        */
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $DOB = isset($_POST['DOB']) ? $_POST['DOB'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $education = isset($_POST['education']) ? $_POST['education'] : '';
        $class = isset($_POST['class']) ? $_POST['class'] : '';
        $disability = isset($_POST['disability']) ? $_POST['disability'] : '';
        $state = isset($_POST['state']) ? $_POST['state'] : '';
        $LGA = isset($_POST['LGA']) ? $_POST['LGA'] : '';
        $vulnerable_unit = isset($_POST['vulnerable_unit']) ? $_POST['vulnerable_unit'] : '';



        // Update the record
        $stmt = $pdo->prepare('UPDATE orphanstb SET id = ?, name = ?, DOB = ?, gender = ?, education = ?, class = ?, disability = ?, state = ?, LGA = ?, vulnerable_unit = ? WHERE id = ?');
        $stmt->execute([$id, $name, $DOB, $gender, $education, $class, $disability, $state, $LGA, $vulnerable_unit, $_GET['id']]);
        $msg = 'Thank you!';
    }

    // Get the orphanstb from the orphanstbs table
    $stmt = $pdo->prepare('SELECT * FROM orphanstb WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $orphanstb = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$orphanstb) {
        die ('The vulnerable child doesn\'t exist with that ID!');
    }
} else {
    die ('No ID specified!');
}
?>

<?=template_header('Read')?>





<div class="content update">
	<h2>Update/Vulnerable Child View #<?=$orphanstb['id']?></h2>
    
    
    
    
    
   <form action="update.php?id=<?=$orphanstb['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="1" value="<?=$orphanstb['id']?>" id="id">
        <input type="text" name="name" placeholder="" value="<?=$orphanstb['name']?>" id="name">
        <label for="DOB">DOB</label>
        <label for="gender">GENDER</label>
        <input type="text" name="DOB" placeholder="" value="<?=$orphanstb['DOB']?>" id="DOB">
        <input type="text" name="gender" placeholder="" value="<?=$orphanstb['gender']?>" id="gender">
        <label for="education">EDUCATION</label>
        <label for="class">CLASS</label>
        <input type="text" name="education" placeholder="" value="<?=$orphanstb['education']?>" id="education">
        <input type="text" name="class" placeholder="" value="<?=$orphanstb['class']?>" id="class">
        <label for="disability">HEALTH STATUS</label>
        <label for="state">STATE</label>
        <input type="text" name="disability" placeholder="" value="<?=$orphanstb['disability']?>" id="disability">
        <input type="text" name="state" placeholder="" value="<?=$orphanstb['state']?>" id="state">
        <label for="LGA">LGA</label>
        <label for="vulnerable_unit">VULNERABLE UNIT</label>
        <input type="text" name="LGA" placeholder="" value="<?=$orphanstb['LGA']?>" id="LGA">
        <input type="text" name="vulnerable_unit" placeholder="" value="<?=$orphanstb['vulnerable_unit']?>" id="vulnerable_unit">
        <input type="submit" value="Update">
    </form> 

   <!-- $id, $name, $DOB, $gender, $education, $class, $disability, $state, $LGA, $vulnerable_unit $_GET['id']] -->





    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>