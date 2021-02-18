<?php
// define variables and set to empty values
$inputs = array();
$Errors = array();
$uitslag_display = "none";
$form_display = "grid";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach($_POST as $name=>$value){
        if (empty($_POST[$name])) {
            $nameErr = $name . " is verplicht in te vullen";
            $Errors[$name] = $nameErr;
        } else {
        $input_form = test_input($_POST[$name]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $input_form)) {
            $nameErr = "Alleen letters en spaties zijn toegestaan bij " . $name;
            $Errors[$name] = $nameErr;
        }

        $inputs[$name] = $input_form;
        
        echo "<h1>De ingevulde gegevens zijn:</h1>";
        echo "Naam: " . $name;
        echo "<br>";
        echo "input_form: " . $input_form;
        echo "<br>";
        echo "nameErr: " . $nameErr;
        echo "<br>";
        echo "empty $Errors: " . empty($Errors);
        echo "<br>";
        print_r($inputs);
        echo "<br>";
        print_r($Errors);
        }
    }
    if (empty($Errors)) {
        $uitslag_display = "block";
        $form_display = "none";
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


