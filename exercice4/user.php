<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - e4p7 user page</title>
    </head>
    <body>
    <!--!empty permet de verifier qu'une variable n'est pas vide-->
    <p><?php if (!empty($_POST['lastname']) && !empty($_POST['firstname'])) {
        echo 'Bonjour, votre nom est : ' . $_POST['lastname'] . ' et votre prénom : ' . $_POST['firstname'];
    //si il manque un paramétre
    }else if (!empty($_POST['lastname']) || !empty($_POST['firstname'])) {
        if (!empty($_POST['lastname'])) {
            echo 'Bonjour, votre nom est : ' . $_POST['lastname'];
        }else {
            echo 'Bonjour, votre prénom est : ' . $_POST['firstname'];
        }
    }
    //si aucun paramétres n'est présent
    else {
        echo 'Vous avez mal remplis le formulaires!';
    } ?></p>
    </body>
</html>