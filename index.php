<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Je suis en HTML -->
        <?php

        // Je suis en PHP

        $str = 'Ceci est une chaîne de caractères';
        $str2 = 'str contient : $str';
        $str3 = "str contient : $str";

        $str4 = $str . ' ' . $str2;

        echo $str;

        $array = [
            null,
            false,
            42,
            3.14159265358979,
            'string',
            new DateTime(),
            [
                'array'
            ]
        ];

        $utilisateur = [
            'prenom' => 'Victor',
            'nom' => 'Hugo',
            'sexe' => 'H',
            'naissance' => 1802,
            'mort' => 1883
        ];

        echo '<br>';

        var_dump($utilisateur);

        echo '<ul>';

        // echo '<li>Prénom : ' . $utilisateur['prenom'] . '</li>';
        // echo '<li>Nom : ' . $utilisateur['nom'] . '</li>';
        // echo '<li>Sexe : ' . $utilisateur['sexe'] . '</li>';
        // echo '<li>Naissance : ' . $utilisateur['naissance'] . '</li>';
        // echo '<li>Mort : ' . $utilisateur['mort'] . '</li>';

        // Remplacé par
        foreach ($utilisateur as $clef => $valeur) {
            echo "<li>$clef : $valeur</li>";
        }

        echo '</ul>';

        // include 'url' pour inclure un autre fichier php
        ?>
        <!-- Je suis en HTML -->
    </body>
</html>

<!-- Lien pour schémas des boucles : https://docs.google.com/presentation/d/13Le9Y5WvttjLhglQPoc_XC-Cb_fSn3-Wfrvq746WSZY/edit?usp=sharing -->