<?php
$this->title = 'Mon profil';
$user = $this->session->get('user');
//TODO: proteger les pages de comptes avec redirection vers page de connexion si non connecté
//TODO: enregister connexion après inscription
//TODO: si non connecté ou connexion espirée, redirect login
?>

<head>
<link href="../templates/assets/css/blog.css" rel="stylesheet" type="text/css">
</head>

<h2 class="section-subheading secondary-font" id="profileh2"> 
<?= $this->session->show('update_password'); ?></h2><br>

 <p class="mt30"><a href="../public/index.php?route=home"class="btn btn-primary btn-theme page-scroll"id="returnbtn">Retour aux Blog Posts</a></p>

<section id="welcome">
            <div class="section-inner">
<?php
echo $this->session->show('not_admin');
?>

                <div class="container"id="profile1">
                    <div class="row">
                        <div class="col-lg-12 mb100 wow">
                            <h2 class="section-heading">Votre profil</h2>
                            <h3 class="section-subheading secondary-font">Toutes les informations de votre compte</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6"id="profile2">
                            <p class="lead"><strong>Référence du compte: </strong> <?= $this->session->getUserInfo('id') ?> </p>
                            <p class="lead"><strong>Identifiant : </strong> <?= $this->session->getUserInfo('pseudo'); ?> </p>
                            <p class="lead"><strong>Type du compte : </strong> <?= $this->session->getUserInfo('role') ?></p>
                            <p>Vous avez la possibilité de modifier votre mot de passe ou de supprimer votre compte : </p>
                            <p class="mt30"><a href="../public/index.php?route=updatePassword" class="btn btn-primary btn-theme page-scroll">Modifier mon mot de passe</a>
                            <a href="../public/index.php?route=deleteAccount" class="btn btn-primary btn-theme page-scroll" id="profile3">Supprimer mon compte</a></p>
                        </div>

                        <div class="col-md-6"id="profile4">
                            <img src="assets/img/isometric-ipad-white.png" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="" >
                        </div>
                    </div>
                </div>
                        
            </div>
                       
        </section>