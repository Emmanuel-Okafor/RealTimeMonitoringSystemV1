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
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : ''; 
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
   // $message = isset($_POST['message']) ? $_POST['message'] : '';
    $date_joined = isset($_POST['date']) && !empty($_POST['date']) && $_POST['date'] != 'auto' ? $_POST['date'] : NULL;
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO donor VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $email, $phone, $address, $date_joined]);
    // Output message
    $msg = 'Created Successfully!';
    if(isset($_POST['Register'])){
        account_info();
    }
}


?>

<?=template_header('Donate')?>
<style>
    input[type=text]{
        width:20%;
        padding: 12px 25px;
        margin: 8px 0;
        box-sizing:border-box;
        border:none;
        background-color:#7335a5;
        color:white;
        border-radius:1rem;
        transition:width 0.4s ease-in-out;
        
    }
    input[type=text]:focus{
        width:30%;
        outline:none
    }

    form{
        margin-left:50px;
    }
    h1{
        margin-left:1rem;
        font-size: 2rem;
    }
    input{
  	display: inline-block;
  	text-decoration: none;
  	background-color: #38b673;
  	font-weight: bold;
  	font-size: 14px;
  	color: #FFFFFF;
  	padding: 10px 15px;
  	margin: 15px 0;
}
</style>


<h1>Become a registered donor today</h1>
<form action="donate.php" method="post" id="userform">
        <label for="name">Name  </label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email"  id="email">
        <br>
        <label for="phone">Phone</label>
        <br>
        <input type="text" name="phone" placeholder="(234)81-3778-1983" id="phone">
        <br>
        <label for="address">Address</label>
        <br>
        <input type="text" name="address" id="address">
    
        <br>
        <input type="submit" value="Register" >
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>



    <?php 
    
    $account_details = array("row1"=>["bank"=>"United Bank for Africa","num"=>"2070949568","name"=>"Em-Al Orphanage"],
    "row2"=>["bank"=>"GT Bank","num"=>"0427960924","name"=>"Em-Al Orphanage"],
    "row3"=>["bank"=>"Access Bank","num"=>"2099099377","name"=>"Em-Al Orphanage"],                    
)
    
    ?>

    <?php 
    if(isset($_POST['Register'])){?>
            <table style="width:50%">

        <tr>
            <th>Bank name</th>
            <th>Account number</th>
            <th>Account name</th>
        </tr> 

        <?php foreach($account_details as $ac){?>
            <tr>
                <td><?php echo $ac["bank"]?></td>
                <td><?php echo $ac["num"]?></td>
                <td><?php echo $ac["name"]?></td>
            </tr>                  
        <?php }?>
        
        <?php }?>

    </table>
     
   