<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nous contacter - Gacec | Fabrication & Emballages Industriels</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/logo_gacec.png">

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Orbitron:wght@500&family=Poppins:wght@200;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css"/>
</head>
<body>
    <div class="barnav">
        <nav class="navbar1 navbar-expand-sm bg-success">
          <div class="collapse navbar-collapse">
            <a href="index.html" class="nav-item"><img src="../images/logo_gacec.png" alt=""></a>
            <li class="dropdown">
              <a href="./index.html" class="nav-item nav-link" d="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">Présentation de Gacec</a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="./index.html#premier-titre">Qui sommes-nous ?</a></li>
                <li><a class="dropdown-item" href="./historique.html">Historique de l'entreprise</a></li>
              </ul>
            </li>
            <a href="./services.html" class="nav-item nav-link">Nos services</a>
            <a href="./realisations.html" class="nav-item nav-link">Nos réalisations</a>
            <a href="./realisations.html" class="nav-item nav-link">Nos certifications</a>
            <a href="./contacts.html" class="nav-item nav-link">Nous contacter</a>
            <a href="./devis.html" class="nav-item nav-link">Demander un devis</a>
          </div>
        </nav>
    </div>
    <header>
        <div class="head-contacts premier-titre">
            <h1>Nous contacter</h1>
        </div>
    </header>
    <div class="container bloc-contacts">
      <div class="col-6" id="left-contacts">
        <h2>Envoyez-nous un message svp</h2>
        <div class="formulaire">
          <form action="mail.php" method="post">
            <div>
              <label for="name">Nom :</label>
              <input type="text" id="name" name="user_name">
            </div>
            <div>
              <label for="mail">Votre e-mail :</label>
              <input type="email" id="mail" name="user_mail">
            </div>
            <div>
              <label for="sujet">Sujet :</label>
              <input type="text" id="sujet" name="user_sujet">
            </div>
            <div>
              <label for="msg">Message :</label>
              <textarea id="msg" name="user_message"></textarea>
            </div>
            <div class="button btn-send">
              <button type="submit">Envoyer le message</button>
            </div>
          </form>
          <?php
    if (isset($_POST['message'])) {
        $retour = mail('yoann1.godard@epitech.eu', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
        </div>
      </div>
      <div class="col-6" id="right-contacts">
        <h2>Coordonnées</h2>
        <div class="coord-align">
          <div class="coord">
            <div class="coord-entp">
              <p style="font-size:larger">Entreprise :</p>
            </div>
            <div>
              <p>Tel : 02.32.30.02.40</p>
              <p>E-mail : gacec27@gacec.fr</p>
              <p>Fax : 02.32.30.31.79</p>
              <p>Adresse postale : ZI Les Fontenelles, Route de Louviers,
                 27190 Conche-en-ouche
                </p>
            </div>
            <div class="coord-dg">
              <p style="font-size:larger">Directeur général :</p>
            </div>
            <div>
              <p>E-mail : thierry.godard@gacec.fr</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer-contacts">
        <div class="container bottom_border">
          <div class="social">
            <a href="https://www.instagram.com/gacec_sas/" class="social-logo">
              <img src="../images/logo_insta.png">
            </a>
          </div>
          <div class="lien">
            <a href="index.html">Accueil</a>
            <a href="mentions.html">Conditions générales d'utilisation</a>
            <a href="contacts.html">Contacts</a>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <p>© 2022 Gacec</p>
          </div>
        </div>
    </footer>
</body>
</html>
