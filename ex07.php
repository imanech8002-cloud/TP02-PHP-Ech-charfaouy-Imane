<!DOCTYPE html>
<html>
    <head>
        <meata charset="UTF-8">
        <title>Exercice 7</title>
    </head>
    <body>
<?php
$nombre=7;
?>
<section>
    <h2>Table de multiplication de <?php echo $nombre ?></h2>
    <ul>
        <?php
        for ($i=0;$i<=10;$i++){
            resultat=$nombre*$i;
            echo "<li>$nombre x $i = $resultat</li>";
        }
        ?>
    </ul>
</section>
<section>
    <h2>Pyramide d'étoiles</h2>
        <?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
</section>
</body>
</html>