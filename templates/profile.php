<?php
$this->title = 'Mon profil';
$user = $this->session->get('user');
//TODO: proteger les pages de comptes avec redirection vers page de connexion si non connecté
//TODO: enregister connexion après inscription
//TODO: si non connecté ou connexion espirée, redirect login
?>

  
<section>
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
  </section>

<h1>Mon blog</h1>
<p>En construction</p>
<?php
echo $this->session->show('not_admin');
?>
<div>
    <h2>Votre profil <?= $this->session->getUserInfo('pseudo'); ?></h2>
    <p>Identifiant du compte : <?= $this->session->getUserInfo('id') ?></p>
    <p>Type du compte : <?= $this->session->getUserInfo('role') ?></p>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>
<br>
<a href="../public/index.php?route=home">Retour à l'accueil Blog Posts</a>