<?php
$tab = array( array("singe" , "1"),array( "chat", "2"),array( "chien", "0"), array( "patate", "10"));
function getVotesTotal($tab)
{
    $votesTotal = 0;
    //calcul le total de toutes les valeurs tu tab.
    foreach($tab as $animal){
        $votesTotal += $animal[1];
    }
    return $votesTotal;
}
function compilerVote(&$tab, $choix){
    //ajoute un au nbreVote de la clé dans le tableau
    foreach ($tab as $animal)
    {
        if ($animal[0] == $choix)
        {
            ++$animal[1];
        }
    }
}
function genererTableau($tab, $total){
    $idAnimal =0;
    foreach($tab as $animal)
    {
        $nom = $animal[0];
        $nbVotes = $animal[1];
        $pourcent= intval($nbVotes*100/$total);
        echo "<tr>
                <td>$nom</td>
                <td>$nbVotes</td>
                <td>$pourcent%</td>
                <td><div id=\"Animal".$idAnimal."\" width=\"" . $pourcent . "%\"></div></td>
            </tr>";
    }
}
function genererListeChoix($tab){
    //génère un radioButton par clé du tableau
    foreach ($tab as $animal)
    {
        echo '<radioButton>' . $animal[0] . '</radioButton>';
    }
}
function tabToStringCSV($tab){
    $chaine = "";
    foreach($tab as $animal){
        $chaine .= "$animal[0] , $animal[1] \n";
    }
    return $chaine;
}
function lireFichier($nom_fichier){
    //recupérer le contenu du fichier
    $descripteur = fopen( $nom_fichier,"r", false );
    $tab = fgetcsv($descripteur);
    fclose($descripteur);
    return $tab;
}
function ecrireFichier($tab, $nom_fichier){
    //met le tab dans le fichier
    $chaine  = tabToStringCSV($tab);
    $descripteur = fopen( $nom_fichier,"r", false );
    $succes = fwrite( $descripteur, $chaine );
    if( $succes === FALSE )
    {
        echo "Erreur d'écriture";
        exit( 1 );
    }
}
