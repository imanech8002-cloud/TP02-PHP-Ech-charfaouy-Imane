<?php
$moyenne=14[]
if ($moyenne>=0 && $moyenne<=20){
    if ($moyenne<10){
        echo "Non valide";
    }
    if ($moyenne<12){
        echo "Passable";
    }if ($moyenne<14){
        echo "Assez bien";
    }
    if ($moyenne<16){
        echo "Bien";
    }
    else{
        echo "Tres bien";
    }
  
}else{
 echo "Note invalide";
}
?>