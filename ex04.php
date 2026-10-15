<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 4</title>
    </head>
    <body>
<?php

$valeur_int=42;
$valeur_string="42";
$valeur_float=15.8;
$vrai=true;
$faux=false;
$vide=null;

?>
<pre>
    <?=var_dump($valeur_int)?>
    <?=var_dump($valeur_string)?>
    <?=var_dump($valeur_float)?>
    <?=var_dump($vrai)?>
    <?=var_dump($faux)?>
    <?=var_dump($vide)?>

</pre>
<?php
$valeur_string=(int)$valeur_string;
$valeur_float=(int)$valeur_float;
$valeur_int=(string)$valeur_int;
?>
<pre>
    <?=var_dump($valeur_int)?>
    <?=var_dump($valeur_string)?>
    <?=var_dump($valeur_float)?>
</pre>
<?php
echo "Avec echo: <br>"
echo "true= ".$vrai."<br>";
echo "false= ".$false."<br>";

echo "Avec var_damp: <br>"
var_dump($vrai);
var_dump($faux)

$nombre_zero=(bool)0;
$chaine_zero=(bool)"0";
$chaine_php=(bool)"PHP";
$tableau_vide=(bool)[];

?>
<pre>
    0:
    <?=var_dump($nombre_zero)?>
    "0":
    <?=var_dump($chaine_zero)?>
    "PHP":
    <?=var_dump($chaine_php)?>
    Tableau vide:
    <?=var_dump($tableau_vide)?>
</pre>

    </body>
</html>