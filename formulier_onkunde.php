<?php
    include 'formcontrole.php';
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
    <style>
        .uitslag {
            display: <?php echo $uitslag_display ?>;
        }
        form {
            display: <?php echo $form_display ?>;
        }
        footer {
            display: <?php echo $uitslag_display ?>;
        }
    </style>

    <div class="center_div">
        <h1 class="mad_libs">mad libs</h1>
        <div class="form">
           <div class="menu">
            <ul>
                <li><a href="formulier_paniek.php">Er heerst paniek...</a></li>
                <li><a href="formulier_onkunde.php">Onkunde</a></li>
            </ul>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Onkunde</h1>
                <p class="let_op">let op! alleen letters en spatie's zijn toegestaan.</p>
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
                <ul>
                    <?php 
                        foreach ($Errors as $name => $value) {
                            echo "<li class='let_op'>" . $Errors[$name]. "</li>";
                        } 
                    ?>
                </ul>
            </form> 
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
                <p>&#xA9; [Bas Verdoorn], 2021</p> 
            </footer>
        </div>
        
    </div>
</body>
</html>
