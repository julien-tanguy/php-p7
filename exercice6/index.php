<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - e6p7 user page</title>
    </head>
    <body>
    <!--!empty permet de verifier qu'une variable n'est pas vide-->
    <!--verifier que l'input n'est pas vide est si il correspond a la regexp prenom-->
    <?php 
    if ((!empty($_GET['lastname']) && preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_GET['lastname'])) && (!empty($_GET['firstname']) && preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_GET['firstname'])) && (!empty($_GET['civilité'] == "monsieur") || !empty($_GET['civilité'] == "madame"))) { ?>
        <p><?php echo 'Bonjour ' . $_GET['civilité'] . ', votre nom est : ' . $_GET['lastname'] . ' et votre prénom : ' . $_GET['firstname']; ?></p>
    <!--si la method d'envoie est post-->
    <?php 
    }else if ((!empty($_POST['lastname']) && preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_POST['lastname'])) && (!empty($_POST['firstname']) && preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_POST['firstname'])) && (!empty($_POST['civilité'] == "monsieur") || !empty($_POST['civilité'] == "madame"))) { ?>
        <p><?php echo 'Bonjour ' . $_POST['civilité'] . ', votre nom est : ' . $_POST['lastname'] . ' et votre prénom : ' . $_POST['firstname']; ?></p>
    <!--//si il manque un paramétre-->
    <?php }
    else {
        ?><form method="get" action="index.php">
        <ul>
            <select name="civilité">
                <option value="">Genre *</option>
                <option value="monsieur">Monsieur</option>
                <option value="madame">Madame</option>
            </select>
            <li><label for="firstname"></label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom *">
            </li>
            <li><label for="lastname"></label>
                <input type="text" name="lastname" id="lastname" placeholder="Nom *">
            </li>
            <li><input type="submit" id="button" /></li>
        </ul>
    </form>
    <!--message d'erreur si le nom ou le prénom ne correspondent pas a une valeur attendu-->
    <p class ="errors"><?php 
            if ((!empty($_GET['lastname']) && !preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_GET['lastname'])) || (!empty($_POST['lastname']) && !preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_POST['lastname']))) {
                echo 'Vous avez mal rensigné(e) votre NOM';
            }else if ((!empty($_GET['firstname']) && !preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_GET['firstname'])) || (!empty($_POST['firstname']) && !preg_match('/^[a-zA-Zàâäéèêëïîôöùûüÿç\-\s\']{3,16}$/', $_POST['firstname']))) {
                echo 'Vous avez mal rensigné(e) votre PRÉNOM';
            }else {
                echo '* champs obligatoires';
            }
    ?></p>
    <?php } ?>
    </body>
</html>