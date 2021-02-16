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
            <form action="resultaat_paniek.php" method="post">
                <h1>Er heerst paniek...</h1>
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
            </form> 
        </div>
        
    </div>
</body>
</html>
