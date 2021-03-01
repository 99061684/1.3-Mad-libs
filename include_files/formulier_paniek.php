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
    <input type="submit" name="submit" value="Submit">
    <ul>
        <?php 
            foreach ($Errors as $name => $value) {
                echo "<li class='let_op'>" . $Errors[$name]. "</li>";
            } 
        ?>
    </ul>
</form>


