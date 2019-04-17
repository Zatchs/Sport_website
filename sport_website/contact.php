<!DOCTYPE html>
<html lang="frr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contact.css">
    <title>Document</title>
</head>

<body>
    <div id="titre_contact">
        <h1>CONTACT</h1>
    </div>
    <p>Veuillez remplir le formulaire ci-dessous pour prendre contact.
    </p>

    <form method="post" action="traitement_formulaire.php">
        <fieldset>

            <legend>Vos coordonnées</legend>
            <input type="text" name="nom" id="nom" placeholder="Nom" size="30" maxlength="20" />
            <br />
            <input type="email" name="email" id="email" placeholder="Email" size="30" maxlength="20" />
            <br />
            <input type="text" name="sujet" id="sujet" placeholder="Sujet" size="30" maxlength="20" />
        </fieldset>
        <fieldset>

            <legend>Votre message</legend>
            <textarea name="message" id="message" rows="10" cols="50" placeholder="Texte"></textarea>
        </fieldset>
        <input type="submit" value="Envoyer" />
    </form>
</body>
<?php include('footer1.php'); ?>
<?php include('footer.php'); ?>

</html>
