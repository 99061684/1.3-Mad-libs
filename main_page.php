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
                <li><a href="main_page.php?pagina=er_heerst_paniek">Er heerst paniek...</a></li>
                <li><a href="main_page.php?pagina=onkunde">Onkunde</a></li>
            </ul>
            </div>
            <?php
                if ($_GET['pagina'] == 'onkunde') {
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit"]) && empty($Errors)) {
                        include 'include_files/reslultaat_onkunde.php';
                    } else {
                        include 'include_files/formulier_onkunde.php';
                    }
                } else {
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit"]) && empty($Errors)) {
                        include 'include_files/resultaat_paniek.php';
                    } else {
                        include 'include_files/formulier_paniek.php';
                    }
                }
                
                
            ?>
        </div>
        
    </div>
</body>
</html>
