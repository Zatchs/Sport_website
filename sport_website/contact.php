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
    <!--------------------------------------------------------------------------------
    ------------------------------- HEADER CONTACT -----------------------------------
    --------------------------------------------------------------------------------->

    <?php include('header.php'); ?>
    <div id="header_contact">
        <div id="cadre_titre">
            <h1>CONTACT</h1>
        </div>
    </div>
    <!---FIN <div id="header_contact"> --->



    <!-------------------------------------------------------------------------------
    -----------------------------FORMULAIRE CONTACT----------------------------------
    -------------------------------------------------------------------------------->


    <div id="formulaire">

        <!------FORMULAIRE GAUCHE -------->
        <div class="box_form">
            <form method="post" action="traitement_formulaire.php">
                <fieldset>
                    <legend>Vos coordonnées</legend>
                    <input type="text" name="nom" id="nom" placeholder="Nom" size="30" maxlength="20" />
                    <br />
                    <input type="email" name="email" id="email" placeholder="Email" size="30" maxlength="20" />
                    <br />
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet" size="30" maxlength="20" />
                </fieldset>
        </div>
        <!---FIN div class="formulaire_gauche" --->


        <!------FORMULAIRE DROITE--------->
        <div class="box_form">
            <fieldset>
                <legend>Votre message</legend>
                <textarea name="message" id="message" rows="10" cols="50" placeholder="Texte"></textarea>
            </fieldset>
        </div>
        <!---FIN <div class="fomulaire_droite">--->


        <!-------BOUTON ENVOYER---------->
        <div id=bouton_form>
            <input type="submit" value="Envoyer" />
        </div>
        </form>
        <!---FIN <form method="post" action="traitement_formulaire.php"> --->

    </div>
    <!---FIN <div id="formulaire"> --->

    <?php include('footer1.php'); ?>
    <?php include('footer2.php'); ?>
</body>


</html>