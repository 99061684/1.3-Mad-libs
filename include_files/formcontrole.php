<?php
// define variables and set to empty values
$inputs = array();
$Errors = array();

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
        }
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


