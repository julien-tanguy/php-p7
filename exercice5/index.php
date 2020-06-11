<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - e5p7</title>
    </head>
    <body>
    <form method="get" action="user.php">
        <ul>
            <select name="civilité">
                <option value="">Civilité</option>
                <option value="monsieur">Monsieur</option>
                <option value="madame">Madame</option>
            </select>
            <li><label for="firstname"></label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom">
            </li>
            <li><label for="lastname"></label>
                <input type="text" name="lastname" id="lastname" placeholder="Nom">
            </li>
            <li><input type="submit" id="button"></input></li>
        </ul>
    </form>
    </body>
</html>