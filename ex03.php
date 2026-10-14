<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 3</title>
    </head>
    <body>
<?php

const TAUX_TVA=20;
const DEVISE="MAD";

$prix_unitaire_HT=60;
$quantite=3;

$total_HT=$prix_unitaire_HT*$quantite;
$montant_TVA=$total_HT*TAUX_TVA/100;
$total_TTC=$montant_TVA+$total_HT;
$total_TTC+=15;
?>
<h3>Recapitulatif de la commande</h3>
<ul>
    <li>Total Ht: <?php echo $total_HT." ".DEVISE; ?></li>
    <li>Montant TVA: <?php echo $montant_TVA." ".DEVISE; ?></li>
    <li>Total TTC: <?php echo $total_TTC-15." ".DEVISE; ?></li>
    <li>Montant finale avec livraison: <?php $total_TTC." ".DEVISE; ?></li>
</ul>

<?php
if (defined("TAUX_TVA")){
    echo "<p>Verification: la constante TAUX_TVA est bien.</p>";
}
?>

    </body>
</html>