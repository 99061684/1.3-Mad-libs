<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?pagina=onkunde" method="post">
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

    <input type="submit" name="submit" value="Submit">
    <ul>
        <?php 
            foreach ($Errors as $name => $value) {
                echo "<li class='let_op'>" . $Errors[$name]. "</li>";
            } 
        ?>
    </ul>
</form> 
