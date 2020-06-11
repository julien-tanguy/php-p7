<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link style="text/css" rel="stylesheet" href="css/style.css" />
        <title>php - e2p7 user page</title>
    </head>
    <body>
    <p><?php echo 'Bonjour, votre nom est : ' . $_POST['lastname'] . ' ' . $_POST['firstname']; ?></p>
    </body>
</html>