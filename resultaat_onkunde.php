<?php

session_start();
session_register($Errors);

// define variables and set to empty values
$inputs = array();
$Errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  foreach($_POST as $name=>$value){
    if (empty($_POST[$name])) {
      $nameErr = $name . " is required";
    } else {
      $input_form = test_input($_POST[$name]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $input_form)) {
        $nameErr = "Only letters and white space allowed at " . $name;
      }

      $inputs[$name] = $input_form;
      $Errors[$name] = $nameErr;
      
      echo "<h1>De ingevulde gegevens zijn:</h1>";
      echo "Naam: " . $name;
      echo "<br>";
      echo "input_form: " . $input_form;
      echo "<br>";
      echo "nameErr: " . $nameErr;
      echo "<br>";
      print_r($inputs);
      echo "<br>";
      print_r($Errors);

      $nameErr = "null Errors";
    }
  }

  foreach($Errors as $element=>$error){
    if ($error != "null Errors") {
      header("Location: formulier_onkunde.php?Error=true");
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// header("Location: formulier_paniek.php?form=submitted");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>mad libs</title>
</head>
<body>
  <div class="center_div">
    <h1 class="mad_libs">mad libs</h1>
    <div class="form">
      <div class="menu">
        <ul>
          <li><a href="formulier_paniek.php">Er heerst paniek...</a></li>
          <li><a href="formulier_onkunde.php">Onkunde</a></li>
        </ul>
      </div>
      <div class="uitslag">
        <h1>Onkunde</h1>
        <p>Er zijn veel mensen die niet kunnen <?php echo $inputs["willen_input"]; ?>. 
          Neem nou <?php echo $inputs["goed_opschieten_persoon_input"]; ?>. 
          Zelfs met de hulp van een <?php echo $inputs["vakantie_spullen_input"]; ?> of zelfs <?php echo $inputs["getal_input"]; ?> kan <?php echo $inputs["goed_opschieten_persoon_input"]; ?> niet <?php echo $inputs["willen_input"]; ?>. 
          Dat heeft niet te maken met een gebrek aan <?php echo $inputs["beste_eigenschap_input"]; ?>, maar met een te veel aan <?php echo $inputs["slechste_eigenschap_input"]; ?>. 
          Te veel <?php echo $inputs["slechste_eigenschap_input"]; ?> leidt tot <?php echo $inputs["ergste_input"]; ?> en dat is niet goed als je wilt <?php echo $inputs["willen_input"]; ?>. 
          Helaas voor <?php echo $inputs["goed_opschieten_persoon_input"]; ?>. <br> <br>
        </p>
      </div>
      <footer>
        <p>Deze website is gemaakt door: Bas Verdoorn.</p> 
      </footer>
    </div>
  </div>
</body>
</html>
