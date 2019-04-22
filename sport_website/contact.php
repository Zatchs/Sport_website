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
    <?php include('header.php'); ?>

    <!--------------------------------------------------------------------------------
    ------------------------------- HEADER CONTACT -----------------------------------
    --------------------------------------------------------------------------------->

    <div id="header_contact">
        <div id="cadre_titre">
            <h1>CONTACT</h1>
        </div>
    </div>
    <!---FIN <div id="header_contact"> --->



    <!-------------------------------------------------------------------------------
    -----------------------------FORMULAIRE CONTACT----------------------------------
    -------------------------------------------------------------------------------->





    <form method="post" action="traitement_formulaire.php">
        <!--- CONTENEUR FORMULAIRE --->
        <div id="conteneur-form">
            <!------FORMULAIRE PARTIE GAUCHE -------->
            <div class="element-form1">
                
                    <legend>Vos coordonnées</legend>
                    <input type="text" name="nom" id="nom" placeholder="Nom" size="40" maxlength="20" />
                    <br />
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" size="40" maxlength="20" />
                    <br />
                    <input type="email" name="email" id="email" placeholder="Email" size="40" maxlength="20" />
                    <br />
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet" size="40" maxlength="20" />
                
            </div>
            <!------FIN FORMULAIRE PARTIE GAUCHE------>


            <!-------FORMULAIRE PARTIE DROITE--------->
            <div class="element-form2">
                
                    <legend>Votre message</legend>
                    <textarea name="message" id="message" rows="16" cols="40" placeholder="Texte"></textarea>
                
            </div>
            <!---FIN FORMULAIRE PARTIE DROITE--->


        </div>
        <!---FIN CONTENEUR FORMULAIRE --->

        <!-------BOUTON ENVOYER---------->
        <div id=bouton-form>
            <input type="submit" value="Envoyer" />
        </div>

    </form>

    <!-- PARRALAX -->
	<div class="parallax-window" data-parallax="scroll" data-image-src="images/sport2.jpg" alt=""></div>
    <!-- FIN PARRALAX -->
    

    <!------ MAP ------>

    <div id=map></div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <?php include('footer1.php'); ?>
    <?php include('footer2.php'); ?>
</body>


</html>