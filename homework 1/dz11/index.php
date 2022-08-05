<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'functions.php';
$method = $_POST;
if(isset($method['send'])) {
    $result = validateRegistration($method);
   if($result == true){
       redirectSuccess();
}
 if($result){
     addError($method);
 }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <h1>Sing up</h1>
         <legend><span class="number">1</span>Your basic info</legend>
         <label for="name">Name:</label>
         <input type="text" id="name" name="name">
         <?php getError('name');?>

         <label for="surname">Surname:</label>
         <input type="text" id="surname" name="surname">
         <?php getError('surname');?>

         <label for="facebook">Facebook:</label>
         <input type="url" id="facebook" name="facebook">
         <?php getError('facebook');?>

         <label>Gender:</label>
         <input type="radio" id="man" value="man" name="gender"><label for="man" class="light">Man</label><br>
         <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">Female</label>

         <label>Subscribe to our news</label>
         <input type="checkbox" id="subscribe" value="subscribe" name="subscribe"><label class="light" for="subscribe">Subscribe</label><br>


    <label for="city">City:</label>
         <select id="city" name="city">
             <option value="odessa">Odessa</option>
             <option value="kiev">Kiev</option>
             <option value="lviv">Lviv</option>
             <option value="dnepr">Dnepr</option>
         </select>
    <?php getError('city');?>
    <button type="submit" name="send">Send</button>
</form>
</body>
</html>