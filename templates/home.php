<?php $this->title = "Accueil blog posts"; ?>

 
<h2 class="section-subheading secondary-font" style="font-family: serif;font-style: italic;color: #F4A460;margin-top: 5%;margin-bottom: -5%;"> 
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login_message'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?></h2>


        <section id="welcome" >
            <div class="section-inner nopaddingbottom">

                <div class="container" >
                    <div class="row"  >
                        <div class="col-lg-12 mb100 wow" >
                            <?php
//Menu dynamique si l'utilisateur est connecté
if ($this->session->getUserInfo('pseudo')) :
?>
    <h2 class="section-heading">Bonjour <?= ucfirst(htmlspecialchars($this->session->getUserInfo('pseudo')))?></h2>
                            <br><h3 class="section-subheading secondary-font"> <a href="../public/index.php?route=logout">Déconnexion //</a>
    <a href="../public/index.php?route=profile"> Profil</a>
    <?php if($this->session->getUserInfo('role') === 'admin') :?>
    <a href="../public/index.php?route=administration">// Administration</a>
    <?php endif;?>
<?php
else:
    ?>
    <h1 style="font-family: serif;font-style: italic;margin-top: -5%;">Bienvenue ! </h1>
    <br><h3 style="font-family: serif;color: grey;">Connectez-vous pour ajouter des posts :</h3>
    <h3 class="section-subheading secondary-font"> 
    <br><a href="../public/index.php?route=login">Connexion //</a>
    <a href="../public/index.php?route=register">Inscription</a></h3>
   
    <?php
endif;
?> 
<p><a class="btn btn-primary mt30"href="../public/index.php?route=addArticle"style="font-style: normal;">Ajouter un blog post</a></p>

                        </div> 
                    </div>
                </div>

            </div>     

     </section>  


                   
<!----------------------Blog Posts List----------------------->

   <section>
            <!-- <div class="section-inner" > -->
                <div class="container" style="margin-left:45%;">
                    <div class="row">
                        <div class="col-sm-8">

                        <?php
/** @var \App\src\model\Article $articles */
foreach ($articles as $article) {
  ?>                           
                       <div class="col-sm-12 blog-item mb100 wow match-height" >
                                <div class="row">
                                    <div class="col-xs-10" >
                                        <div class="hover-item mb30">
                                            <img src="assets/img/news/1.jpg" class="img-responsive smoothie" alt="title">
                                            <div class="overlay-item-caption smoothie"></div>
                                            <div class="hover-item-caption smoothie">
                                                <h3 class="vertical-center smoothie"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>" class="smoothie btn btn-primary page-scroll" title="view article">Voir le post</a></h3>
                                            </div>
                                        </div>
                 
                                        <h2 class="post-title"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>"><?= htmlspecialchars($article->getTitle()); ?></a></h2>
                                        <div class="item-metas text-muted mb30">
                                            <span class="meta-item"><i class="pe-icon pe-7s-folder"></i>POST DU <span><?= htmlspecialchars($article->getCreatedAt()); ?></span></span>
                                            <span class="meta-item"><i class="pe-icon pe-7s-user"></i> AUTEUR <span><?= htmlspecialchars($article->getAuthor()); ?></span></span>
                                        </div>

                                        
    <br>                                <p>En résumé :<?= nl2br(htmlspecialchars($article->getChapo())); ?></p>
                                        <p>Behind sooner dining so window excuse he summer. Breakfast met certainty and fulfilled propriety led. Waited get either are wooded little her. Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given.</p>
                                        <a class="btn btn-primary mt30" href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId()) ?>">En savoir plus</a>
                                    </div>
                                </div>
                             </div>
                                                  
<?php
}
?>                     <div class="row paging text-center">
                <a class="btn btn-primary mt30" href="#" style="margin-top:-10%">Dernier post</a>
                <p></p>
                <br><p></p>

            </div>
                         </div> 
                    </div>
                </div>
            </div>

            

     </section>        
       
                                           
</html>
