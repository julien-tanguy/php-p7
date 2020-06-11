<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - e3p7 user page</title>
    </head>
    <body>
    <!--!empty permet de verifier qu'une variable n'est pas vide-->
    <p><?php if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) {
        echo 'Bonjour, votre nom est : ' . $_GET['lastname'] . ' et votre prénom : ' . $_GET['firstname'];
    //si il manque un paramétre
    }else if (!empty($_GET['lastname']) || !empty($_GET['firstname'])) {
        if (!empty($_GET['lastname'])) {
            echo 'Bonjour, votre nom est : ' . $_GET['lastname'];
        }else {
            echo 'Bonjour, votre prénom est : ' . $_GET['firstname'];
        }
    }
    //si aucun paramétres n'est présent
    else {
        echo 'Vous avez mal remplis le formulaires!';
    } ?></p>
    </body>
</html>