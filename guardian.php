<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Guardian')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        select{
            margin:5px;
        }
        .container{
            margin: 3rem 3rem;
        }
        button{
            display:inline-block;
            padding:0.5rem 0.5rem;
            font-size:15px;
            cursor:pointer;
            text-align:center;
            text-decoration:none;
            outline:none;
            color:#fff;
            background-color:#7335a5;
            border:none;
            border-radius:15px;
            box-shadow:0 9px #999;

        }
        button:hover{
            background-color:#3e8e41;
        }
        button:active{
            background-color:#3e8e41;
            box-shadow:0 5px #66;
            transform: translateY(4px);
        
        }
    </style>
</head>
<body>
    <h1>BECOME A GUARDIAN</h1>
    <div class="container">

    <h1>How would you like your new family member to look like?</h1>

    <label for="race">Race:</label>
    <select name="race" id="">
        <option value="African">African</option>
        <option value="red-head">Red-head</option>
        <option value="Asian">Asian</option>
    </select>
    

    <label for="age">Age:</label>
    <select name="Age" id="">
        <option value="first">0-6</option>
        <option value="second">7-14</option>
        <option value="second">15-17</option>
    </select>
    

    <label for="genotype">Genotype:</label>
    <select name="genotype" id="">
        <option value="AA">AA</option>
        <option value="AA">AS</option>
        <option value="SS">SS</option>
    </select>
    <br>
    <button>search</button>
    </div>
    
</body>
</html>