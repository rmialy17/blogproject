<?php $this->title = "Accueil blog posts"; ?>

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
    
<!-------A propos--------->

    <h1>Mon blog</h1>
    <p>En construction</p>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login_message'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<?php
//Menu dynamique si l'utilisateur est connecté
if ($this->session->getUserInfo('pseudo')) :
    ?>
    <p>Bienvenue sur votre espace <?= ucfirst(htmlspecialchars($this->session->getUserInfo('pseudo')))?></p>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php if($this->session->getUserInfo('role') === 'admin') :?>
    <a href="../public/index.php?route=administration">Administration</a>
    <?php endif;?>
<?php
else:
    ?>
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
<?php
endif;
?>

<?php
/** @var \App\src\model\Article $articles */
foreach ($articles as $article) {
    ?>
    <div>
        <h2>
            <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>"><?= htmlspecialchars($article->getTitle()); ?></a>
        </h2>
        <p><?= nl2br(htmlspecialchars($article->getChapo())); ?></p>
        <p><?= nl2br(htmlspecialchars($article->getContent())); ?></p>
        <p><?= htmlspecialchars($article->getAuthor()); ?></p>
        <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
    </div>
    <br>
    <?php
}
?>