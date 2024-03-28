<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $moi = [
                'Prénom' => 'Mickaël',
                'Nom' => 'HAÏS',
                'Age' => 22
            ];

            $prenom = $moi['Prénom'];
            $nom = $moi['Nom'];
            $age = $moi['Age'];

            echo"<p>Bonjour, je m'appelle $prenom $nom et j'ai actuellement $age ans.</p>"
        ?>
    </body>
</html>