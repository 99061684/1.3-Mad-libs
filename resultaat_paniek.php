<?php
// define variables and set to empty values
$inputs = array();

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

      echo "<h1>De ingevulde gegevens zijn:</h1>";
      echo "Naam: " . $name;
      echo "<br>";
      echo "input_form: " . $input_form;
      echo "<br>";
      echo "nameErr: " . $nameErr;
      echo "<br>";
      print_r($inputs);
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
        <h1>Er heerst paniek...</h1>
        <p>Er heerst paniek in het koninkrijk <?php echo $inputs["land_input"]; ?>. 
          Koning <?php echo $inputs["docent_spijbelen_input"]; ?> is ten einde raad en als koning <?php echo $inputs["docent_spijbelen_input"]; ?> ten einde raad is,
          dan roept hij zijn ten-einde-raadsheer <?php echo $inputs["belangrijkste_persoon_input"]; ?>. <br> <br> 
          "<?php echo $inputs["belangrijkste_persoon_input"]; ?>! Het is een ramp! Het is een schande!" <br> <br> 
          "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" <br> <br> 
          "Mijn <?php echo $inputs["huisdier_input"]; ?> is verdwenen! Zo maar, zonder waarschuwing. 
          En ik had net <?php echo $inputs["speelgoed_input"]; ?> voor hem gekocht!" <br> <br> 
          "Majesteit, uw <?php echo $inputs["huisdier_input"]; ?> komt vast vanzelf weer terug?" <br> <br> 
          "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $inputs["bezigheid_input"]; ?> leren?" <br> <br> 
          "Maar Sire, daar kunt u toch uw <?php echo $inputs["kopen_input"]; ?> voor gebruiken." <br> <br> 
          "<?php echo $inputs["belangrijkste_persoon_input"]; ?>, je het helemaal gelijk! Wat zou ik doen als ik jou niet had."<br> <br> 
          "<?php echo $inputs["bij_verveling_input"]; ?>, Sire." <br> <br> 
        </p>
      </div>
      <footer>
        <p>Deze website is gemaakt door: Bas Verdoorn.</p> 
      </footer>
    </div>
  </div>
</body>
</html>
