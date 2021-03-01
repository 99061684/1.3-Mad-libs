<?php
    include 'include_files/formcontrole.php';
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
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['submit'])) {
                    include 'include_files/reslultaat_onkunde.php';
                } else {
                    include 'include_files/formulier_onkunde.php';
                }
                
            ?>
        </div>
        
    </div>
</body>
</html>
