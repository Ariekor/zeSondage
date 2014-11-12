<?php
$nbrPaticipant = 4;
echo '<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/zeCss.css">
    <script src="jquery.min.js"></script>
<head>

</head>
<body>
<div class="contenu">
    <h3>Les choix au sondage :</h3>
    <form id="formulaire" action="TraitementVote.php" method="post" enctype="multipart/form-data">
       ';
echo '
</form>
<div id="soumettre" class="button">cliquer ici pour soumettre votre votre vote </div>
</div>
</body>
</html>';

?>;

<script>$("#soumettre").click(function(){
        $('#formulaire').submit();
    })</script>