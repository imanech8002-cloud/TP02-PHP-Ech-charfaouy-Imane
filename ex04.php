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

$valeur_string=int($valeur_string);
$valeur_float=int($valeur_float);
$valeur_int=string($valeur_int);

?>
<pre>
    <?=var_dump($valeur_int)?>
    <?=var_dump($valeur_string)?>
    <?=var_dump($valeur_float)?>
</pre>
<?php

echo $vrai;
echo $faux;

var_dump($vrai);
var_dump($faux)

?>

    </body>
</html>