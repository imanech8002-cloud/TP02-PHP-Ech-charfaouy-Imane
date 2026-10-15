<?php

if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

    if ($nom !== "" && $prenom !== "" && in_array($groupe, ['G1', 'G2', 'G3', 'G4'])) {
        $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "Bienvenue $prenom $nom ! Votre groupe est $groupe.";
    } else {
        echo "Veuillez remplir correctement tous les champs.";
    }
} else {
    echo "Veuillez soumettre le formulaire POST.";
}

?>