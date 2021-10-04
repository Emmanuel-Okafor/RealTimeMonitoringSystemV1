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
    $DOB = isset($_POST['DOB']) ? $_POST['DOB'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $education = isset($_POST['education']) ? $_POST['education'] : '';
    $class = isset($_POST['class']) ? $_POST['class'] : '';
    $disability = isset($_POST['disability']) ? $_POST['disability'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $LGA = isset($_POST['LGA']) ? $_POST['LGA'] : '';
    $vulnerable_unit = isset($_POST['vulnerable_unit']) ? $_POST['vulnerable_unit'] : '';


    
   

    

    
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO orphanstb VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $DOB, $gender,$education,$class,$disability,$state,$LGA, $vulnerable_unit]);
    // Output message
    $msg = 'Registered Successfully!';
}


?> 
<?=template_header('Create')?>

<!DOCTYPE html>
<style>
    input[type=text] {
         
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
    }
    
    
    select  {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
} 
</style>

<div class="content update">
	<h2>Register a New Orphan</h2>
    <form action="children.php" method="post" id="userform">
        <label for="id">ID</label>
     <input type="text" name="id" placeholder="" value="auto" id="id">
        <label for="name">NAME</label>
        <input type="text" name="name" placeholder="" id="name">
        <label for="DOB">DATE OF BIRTH</label>
     <input type="date" name="DOB" placeholder="" id="DOB">
        <label for="gender">GENDER</label><br>
        <select name="gender" id="gender">
        <option value="select">-Select-</option>
        <option value="male">male</option>
        <option value="female">female</option>
 </select>
        <label for="education">EDUCATIONAL LEVEL</label><br>
    <select name="education" id="education">
        <option value="select">-select-</option>
            <option value="primary">Primary Education</option>
            <option value="secondary">Secondary Education</option>
            <option value="home school">Home School</option>
            <option value="no academic status">No Academic Status</option>
        <!--    <option value="tertiary">Tertiary</option> -->
        </select>
        <br>

        <label for="class">CLASS</label><br>
     <select name="class" id="class">
         <option value="select">-select-</option>
            <option value="Not in School">Not in School</option>
            <option value="Primary1">Primary1</option>
            <option value="Primary2">Primary2</option>
            <option value="Primary3">Primary3</option>
            <option value="Primary4">Primary4</option>
            <option value="Primary5">Primary5</option>
            <option value="Primary6">Primary6</option>
            <option value="JSS1">JSS1</option>
            <option value="JSS2">JSS2</option>
            <option value="JSS3">JSS3</option>
            <option value="SS1">SS1</option>
            <option value="SS2">SS2</option>
            <option value="SS3">SS3</option>
        </select><br>
       <label for="disability">HEALTH STATUS</label><br>
         <select name="disability" id="disability">
        <option value="select">-select-</option> 
        <option value="Autism">Autism</option>
        <option value="Blind">Blind</option>
        <option value="Cripple">Cripple</option>
        <option value="Deaf">Deaf</option> 
        <option value="Dump">Dump</option>
        <option value="Normal">Normal</option>

        </select><br>
        <label for="state">STATE</label><br>
        <select name="state" id="state">
                <option value="select">-select-</option>
               <option value="Abia">Abia</option>
               <option value="Adamawa">Adamawa</option>
               <option value="Akwa ibom">Akwa ibom</option>
               <option value="Anambra">Anambra</option>
               <option value="Bauchi">Bauchi</option>
               <option value="Bayelsa">Bayelsa</option>
               <option value="Benue">Benue</option>
               <option value="Borno">Borno</option>
               <option value="cross river">Cross River</option>
               <option value="delta">Delta</option>
               <option value="Ebonyi">Ebonyi</option> 
               <option value="Edo">Edo</option>
               <option value="Enugu">Enugu</option>
               <option value="FCT">FCT</option>
               <option value="Gombe">Gombe</option>
               <option value="Imo">Imo</option>
               <option value="Jigawa">Jigawa</option>
               <option value="Kaduna">Kaduna</option>
               <option value="Kano">Kano</option>
               <option value="Katsina">Katsina</option>
               <option value="Kebbi">Kebbi</option>
               <!-- <option value=""></option> -->
               <option value="kogi">Kogi</option>
               <option value="kwara">kwara</option>
               <option value="Lagos">Lagos</option>
               <option value="Nasarawa">Nasarawa</option>
               <option value="Niger">Niger</option>
               <option value="Ogun">Ogun</option>
               <option value="Ondo">Ondo</option>
               <option value="Osun">Osun</option>
               <option value="Oyo">Oyo</option>
               <option value="Plateau">Plateau</option>
               <option value="Rivers">Rivers</option>
               <option value="Sokoto">Sokoto</option>
               <option value="Taraba">Taraba</option>
               <option value="Yobe">Yobe</option>
               <option value="Zamfara">Zamfara</option>

        </select><br>

        <label for="LGA">LGA</label><br>
        <select name="LGA" id="LGA">
            <option value="select">-select-</option>
        <option value="Birni Gwari">Birnin Gwari</option>
        <option value="Funtua">Funtua</option>
        <option value="Sabuwa">Sabuwa</option>
        <option value="Dan dume">Dan dume</option>
        <option value="Giwa">Giwa</option>
        <option value="Hunkuyi">Hunkuyi</option>
        <option value="Ikara">Ikara</option>
        <option value="Jama'a">Jama'a</option>
        <option value="Kachia">Kachia</option>
        <option value="Kaduna North">kaduna North</option>
        <option value="Kaduna South">Kaduna South</option>
        <option value="Kauru">Kauru</option>
        <option value="Kudan">Kudan</option>
        <option value="Lere">Lere</option>
        <option value="Sanga">Sanga</option>
        <option value="Soba">Soba</option>
        <option value="Zaria">Zaria</option>
        <option value="Zangon Kataf">Zangon Kataf</option>
         </select> <br>


        <label for="vulnerable_unit">VULNERABLE-UNIT</label><br>
        <select name="vulnerable_unit" id="vulnerable_unit">
        <option value="select">-select-</option>
        <option value="Orphanage Home">Orphanage Home</option>
        <option value="Almajiri Centres">Almajiri Centre</option>
        </select> <br>

        
       
        <input type="submit" value="register">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>