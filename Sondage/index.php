<?php
include("fonction.php");
$tab = array( array("singe" , "1"),array( "chat", "2"),array( "chien", "0"), array( "patate", "10"));
$nbrPaticipant = getVotesTotal($tab);
echo '<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/zeCss.css">
<head>

</head>
<body>
<div class="contenu">
    <h3> Votre animal préféré</h3>
    <p> Résultats obtenus pour ' . $nbrPaticipant . ' participants :</p>
    <table id="zetableau">
        <tr>
            <th>Espèce</th>
            <th>Votes</th>
            <th>%</th>
            <th id="graphique">Graphique</th>
        <tr>
       ';
genererTableau($tab,$nbrPaticipant);
echo '
</table>
<a href="Voter.php"><div class="button">cliquer ici pour voter </div></a>
</div>
</body>
</html>';

?>




