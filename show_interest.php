<?php
require 'conn.php' ;


$conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM events WHERE id = $id;";
  $stmt = $conn->prepare($query); 
  // EXECUTING THE QUERY 
  $stmt->execute(); 
  $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
  // FETCHING DATA FROM DATABASE 
  $result = $stmt->fetchAll(); 
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Δείξε Ενδιαφέρον</title>
  <link rel="stylesheet" href="css/show_interest_style.css">
</head>

<body>
  <div class="form">
    <?php foreach ($result as $row){ ?>
    <form  method="post" action="post_showed_interest.php?id=<?=$row['id']?>">
    <?php } ?>
      <div class="title">Γειά σου!</div>
      <div class="subtitle">Συμπλήρωσε την φόρμα για να συμμετάσχεις</div>
      <div class="input-container ic1">
        <input id="firstname" name="firstname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Όνομα</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" name="lastname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Επώνυμο</label>
      </div>
      <div class="input-container ic2">
        <input id="phone" name="phone" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="phone" class="placeholder">Τηλέφωνο</label>
      </div>
      <div class="input-container ic2">
        <input id="email" name="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</label>
      </div>
      <div class="input-container ic2">
        <textarea id="description" name="description" class="input" type="text" placeholder=" " rows="100"></textarea>
        <div class="cut cut-short"></div>
        <label for="description" class="placeholder">Πως μπορείς να βοηθήσεις</label>
      </div>

      <button type="submit" class="submit" name="submit-btn">submit</button>
    </form>
  </div>
</body>

</html>
