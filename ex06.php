<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 6</title>
    </head>
    <body>
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>
    <section>
        <h2>Tests avec des numéros de mois fixes</h2>
        <?php
        $tests = [1, 3, 12, 15];

        foreach ($tests as $numeroMois) {
            echo "Mois numéro <strong>$numeroMois</strong> : ";
            
            switch ($numeroMois) {
                case 1:
                    echo "Janvier";
                    break;
                case 2:
                    echo "Février";
                    break;
                case 3:
                    echo "Mars";
                    break;
                case 4:
                    echo "Avril";
                    break;
                case 5:
                    echo "Mai";
                    break;
                case 6:
                    echo "Juin";
                    break;
                case 7:
                    echo "Juillet";
                    break;
                case 8:
                    echo "Août";
                    break;
                case 9:
                    echo "Septembre";
                    break;
                case 10:
                    echo "Octobre";
                    break;
                case 11:
                    echo "Novembre";
                    break;
                case 12:
                    echo "Décembre";
                    break;
                default:
                    echo "Numéro de mois invalide";
                    break;
            }
            echo "<br>";
        }
        ?>
    </section>

    <section>
        <h2>Mois courant dynamique</h2>
        <?php
        $numeroMoisCourant = (int) date("m");
        echo "Le mois courant est le numéro <strong>$numeroMoisCourant</strong> : ";
        switch ($numeroMoisCourant) {
            case 1:
                echo "Janvier";
                break;
            case 2:
                echo "Février";
                break;
            case 3:
                echo "Mars";
                break;
            case 4:
                echo "Avril";
                break;
            case 5:
                echo "Mai";
                break;
            case 6:
                echo "Juin";
                break;
            case 7:
                echo "Juillet";
                break;
            case 8:
                echo "Août";
                break;
            case 9:
                echo "Septembre";
                break;
            case 10:
                echo "Octobre";
                break;
            case 11:
                echo "Novembre";
                break;
            case 12:
                echo "Décembre";
                break;
            default:
                echo "Numéro de mois invalide";
                break;
        }
        ?>
    </section>

</body>
</html>