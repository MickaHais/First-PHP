<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // exercice 1
            $size = 6;
            for($i = 0; $i < $size; $i++) {
                for($j = 0; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }

            echo "<br>";

            // exercice 2
            $size = 6;
            for($i = 0; $i < $size; $i++) {
                for($j = 1; $j < $size - $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for($k = 0; $k <= $i; $k++) {
                    echo "*";
                }
                echo "<br>";
            }

            echo "<br>";

            // exercice 3
            $size = 5;
            for($i = 1; $i <= $size; $i++) {
                for($j = 0; $j < $i; $j++) {
                    if($i != $size) {
                        if($j == 0 || $j == $i - 1) {
                            echo "*";
                        }
                        else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    else {
                        echo "*";
                    }
                }
                echo "<br>";
            }

            echo "<br>";

            // exercice 4
            function fact($n){ 
                $f = 1; 
                for ($i = 1; $i <= $n; $i++){ 
                  $f = $f * $i; 
                } 
                return $f; 
            } 
                
            $n = 5; 
            $f = fact($n); 
            echo "La factorielle de $n est $f";

            echo "<br>";
            echo "<br>";

            // exercice 5
            function somme_tableaux($tab1, $tab2) {
                $count1 = count($tab1);
                $count2 = count($tab2);
                
                if ($count1 !== $count2) {
                    return "Les tableaux n'ont pas la même taille.";
                }

                $resultat = array();

                for ($i = 0; $i < $count1; $i++) {
                    $resultat[] = $tab1[$i] + $tab2[$i];
                }
                
                return $resultat;
            }

            $tab1 = [1, 2, 3];
            $tab2 = [4, 5, 6];
            $resultat = somme_tableaux($tab1, $tab2);
            print_r($resultat);

            echo "<br>";
            echo "<br>";

            // exercice 6 
            function trouver_tresor($tableau) {
                foreach ($tableau as $i => $ligne) {
                    foreach ($ligne as $j => $case) {
                        if ($case === true) {
                            return array($i, $j);
                        }
                    }
                }
                return "Trésor non trouvé.";
            }

            $tableau = array_fill(0, 10, array_fill(0, 10, false));
            $tableau[rand(0, 9)][rand(0, 9)] = true;
            
            $position = trouver_tresor($tableau);
            echo "Position du trésor : (" . $position[0] . ", " . $position[1] . ")";
        ?>
    </body>
</html>