
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>formulaire</title>
    </head>
    <body>
        <!--exercice1 
        <form action="user.php" method='GET'>
            <input type="text" name="nom" />
            <input type="text" name="prenom" />
            <input type="submit" />
        </form>!-->
        <!--ecercice2
        <form action="user.php" method='POST'>
            <input type="text" name="nom" />
            <input type="text" name="prenom" />
            <input type="submit" />
        </form>!-->
        <!--exercice5
        <form action="user.php" method='POST'>
            <select name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <input type="text" name="nom" />
            <input type="text" name="prenom" />
            <input type="submit" />
        </form>!-->
        
        <?php
            //exercice6, 7, 8
            if (isset($_POST["nom"]) AND isset($_POST["prenom"])) {
                echo "Bonjour ".$_POST["sexe"]." ".$_POST["nom"]." ".$_POST["prenom"]."<br>".$_POST["upload"];
                $verif = $_POST["upload"];
                $extension = pathinfo($verif, PATHINFO_EXTENSION);
                
                if ($extension === "pdf") {
                    echo "  Fichier PDF valide";
                }
                
                else {
                    echo "  Fichier invalide";
                }
            }
            
            else {
                echo "<form method='POST'>
                    <select name='sexe'>
                        <option value='Mr'>Mr</option>
                        <option value='Mme'>Mme</option>
                    </select>
                    <input type='text' name='nom' />
                    <input type='text' name='prenom' />
                    <input type='file' name='upload' />
                    <input type='submit' />
                </form>";
            }
        ?>
    </body>
</html>


