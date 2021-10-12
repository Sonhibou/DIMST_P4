<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <link rel="stylesheet" href="afficher.css">
        <meta charset="utf-8">
    </head>
    <body>
        <p>Bonjour et bienvenue sur notre plateforme. vous ètes inscris avec ces données :</p>
        
        <?php
            echo 'Prénom : '.$_POST["prenom"].'<br>';
            echo 'Nom : ' .$_POST["nom"].'<br>';
            echo 'Email : ' .$_POST["mail"].'<br>';
            echo 'Avec comme mot de passe : ' .$_POST["password"].'<br>';
        ?>
      

    </body>
    <p>
        Clicquer <a href="form.php">ICI</a> pour retourner sur le formulaire
    </p>
</html>