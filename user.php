<?php
    /*exercice3
    if ($_GET['nom'] && $_GET['prenom'])
        echo $_GET['nom'] . " " . $_GET['prenom'];

    else
        echo "il manque des paramètres";*/
?>

<?php
    /*exercice4
    if ($_POST['nom'] && $_POST['prenom'])
        echo $_POST['nom'] . " " . $_POST['prenom'];

    else
        echo "il manque des paramètres";*/
?>

<?php
    //exercice5
    if ($_POST['civilite'] && $_POST['nom'] && $_POST['prenom'])
        echo $_POST['civilite'] . " " . $_POST['nom'] . " " . $_POST['prenom'];

    else
        echo "il manque des paramètres";
?>