<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

echo "<table border='1'>";
echo "<tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>";

foreach ($notes as $nom => $note) {

    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";

    $somme += $note;

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

echo "</table>";

$moyenne = $somme / count($notes);

echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenne</p>";
echo "<p>Nombre d'étudiants ayant validé : $nombreValides</p>";
echo "<p>Meilleur étudiant : $meilleurEtudiant</p>";
echo "<p>Meilleure note : $meilleureNote</p>";

?>