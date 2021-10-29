<head>
 <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
 <meta name="description" content="films de plein air">
 <meta name="keywords" content="cinema, plein air, festival, films">
 <title>Accueil | Mon Blog Pro</title>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script src="bootstrap.min.js"></script> 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.jpg"/>
  

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container" id="menu">
        <a class="navbar-brand" href="../public/index.php">
    <img src="images/logo_large.png" alt="Logo"  class="logo" >
    <span class="stylelogo"></span>
    </a>
        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
          <ul class="navbar-nav navbar-right ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../public/index.php#apropos">Qui suis-je</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../public/index.php#films">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../public/index.php#actualites">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../public/index.php#blogposts">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../public/index.php#contact">Contact</a>
            </li>
      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../public/index.php#contact">Connexion</a>
            </li>      
          </ul>
        </div>
      </div>
    </nav>

  <?php
    $retour = mail('mialy.razaf@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
<!---------Formulaire test--------------->

  <h1>Contact</h1>
    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
 if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('mialy.razaf@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>

    <!--------------email test--------------->
<?php
  $dest = "mialy.razaf@gmail.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: VotreGmailId@gmail.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
?>