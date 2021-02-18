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
                <h1>Er heerst paniek...</h1>
                <p class="let_op">let op! alleen letters en spatie's zijn toegestaan.</p>
                <label for="huisdier_input">Welk dier zou je nooit als huisdier willen hebben?</label>
                <input type="text" id="huisdier_input" name="huisdier_input" placeholder="vul hier in..." required> 

                <label for="belangrijkste_persoon_input">Wie is de belangrijkste persoon in je leven?</label>
                <input type="text" id="belangrijkste_persoon_input" name="belangrijkste_persoon_input" placeholder="vul hier in..." required></input> 
                
                <label for="land_input">In welk land zou je graag willen wonen?</label>
                <input type="text" id="land_input" name="land_input" placeholder="vul hier in..." required></input> 
                
                <label for="bij_verveling_input">Wat doe je als je je verveelt?</label>
                <input type="text" id="bij_verveling_input" name="bij_verveling_input" placeholder="vul hier in..." required></input> 
                
                <label for="speelgoed_input">Met welk speelgoed speelde je als kind het meest?</label>
                <input type="text" id="speelgoed_input" name="speelgoed_input" placeholder="vul hier in..." required></input> 
                
                <label for="docent_spijbelen_input">Bij welke docent spijbel je het liefst?</label>
                <input type="text" id="docent_spijbelen_input" name="docent_spijbelen_input" placeholder="vul hier in..." required></input> 
                
                <label for="kopen_input">Als je &#8364; 100.000,- had, wat zou je dan kopen?</label>
                <input type="text" id="kopen_input" name="kopen_input" placeholder="vul hier in..." required></input> 
                
                <label for="bezigheid_input">Wat is je favoriete bezigheid?</label>
                <input type="text" id="bezigheid_input" name="bezigheid_input" placeholder="vul hier in..." required></input> 
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
                <p>&#xA9; [Bas Verdoorn], 2021</p>
            </footer>
        </div>
        
    </div>
</body>
</html>

