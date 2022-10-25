<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoie formulaire - Gacec</title>
</head>
<body>
    <p>TEST PHP PAGE</p>
    <a href="../html/index.html"> Retourner à l'accueil du site<br></a>
    <a href="../html/contacts.html">Retour</a>
    <?php
        if (isset($_POST['message'])) {
            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From: commercial.gacec@gacec.fr' . "\r\n";
            $entete .= 'Reply-to: ' . $_POST['email'];

            if (!empty($_POST['entreprise'])) {
                $entreprise = htmlspecialchars($_POST['entreprise']);
            } else {
                $entreprise = "Non renseigné";
            }
            if (!empty($_POST['phone'])) {
                $phone = htmlspecialchars($_POST['phone']);
            } else {
                $phone = "Non renseigné";
            }

            $message = '<h1>Message envoyé depuis la page contact du site GACEC</h1>
            <p>
            <b>Nom / Prénom : </b>' . $_POST['surname'] .
            '<br><b>Email : </b>' . $_POST['email'] .
            '<br><b>Entreprise : </b>' . $entreprise .
            '<br><b>Téléphone : </b>' . $phone .
            '<br><br><b>Message : </b>' . htmlspecialchars($_POST['message']) .
            '</p>';
            $envoie = mail('commercial.gacec@gacec.fr', $_POST['subject'], $message, $entete);
            if($envoie)
                echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>
