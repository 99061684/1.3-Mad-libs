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
            <form action="resultaat_onkunde.php" method="post">
                <h1>Onkunde</h1>
                <label for="willen_input">Wat zou je graag willen kunnen?</label>
                <input type="text" id="willen_input" name="willen_input" placeholder="vul hier in..." required>

                <label for="goed_opschieten_persoon_input">Met welk persoon kun je goed opschieten?</label>
                <input type="text" id="goed_opschieten_persoon_input" name="goed_opschieten_persoon_input" placeholder="vul hier in..." required></input>

                <label for="getal_input">Wat is je favoeriete getal?</label>
                <input type="text" id="getal_input" name="getal_input" placeholder="vul hier in..." required></input>

                <label for="vakantie_spullen_input">Wat heb je altijd bij je als je op vakantie gaat?</label>
                <input type="text" id="vakantie_spullen_input" name="vakantie_spullen_input" placeholder="vul hier in..." required></input>

                <label for="beste_eigenschap_input">Wat is je beste persoonlijke eigenschap?</label>
                <input type="text" id="beste_eigenschap_input" name="beste_eigenschap_input" placeholder="vul hier in..." required></input>

                <label for="slechste_eigenschap_input">Wat is je slechtste persoonlijke eigenschap?</label>
                <input type="text" id="slechste_eigenschap_input" name="slechste_eigenschap_input" placeholder="vul hier in..." required></input>

                <label for="ergste_input">Wat is het ergste dat je kan overkomen?</label>
                <input type="text" id="ergste_input" name="ergste_input" placeholder="vul hier in..." required></input>

                <input type="submit" value="Submit">
            </form> 
        </div>
        
    </div>
</body>
</html>

<?php 
    session_start();
    if ($_GET['Error'] = 'true') {
        foreach ($Errors as $element => $error) {
            if ($error != "null Errors") {
                echo $Errors[$name];
            }
        }
    }
    
?>