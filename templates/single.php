<?php $this->title = 'Blog post'; ?>

<h2 class="section-subheading secondary-font" style="font-family: serif;font-style: italic;color: #F4A460;margin-top: 5%;margin-bottom: -5%;"> 
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?></h2>


        
        <!-------------Post Title--------------->
        <section id="welcome" >
            <div class="section-inner nopaddingbottom text-center" >

                <div class="container" >
                    <div class="row"  >
                        <div class="col-lg-12 mb100 wow" >
                            <h2 class="section-heading"><?= htmlspecialchars($article->getTitle()); ?></h2>
                
                            <div class="item-metas text-muted mb30 grey">
                                <span class="meta-item"><i class="pe-icon pe-7s-folder"></i> POST DU <span> <?= htmlspecialchars($article->getCreatedAt()); ?></span></span>
                                <span class="meta-item"><i class="pe-icon pe-7s-user"></i> AUTEUR <span> <?= htmlspecialchars($article->getAuthor()); ?></span></span>
                            </div>
                        </div>
        
                        <div id="post-content" class="col-sm-8 col-sm-offset-2 blog-item mb60 wow">
                            <div class="row" style="margin-top:-10%;text-align: justify;">
                                <div class="col-sm-12 single-post-content">
                                <h3 class="section-subheading secondary-font">En bref : <?= nl2br(htmlspecialchars($article->getChapo())); ?></h3>
                                <br><?= nl2br(htmlspecialchars($article->getContent())); ?>
                                <br>
                                <br><p>Behind sooner dining so window excuse he summer. Breakfast met certainty and fulfilled propriety led. Waited get either are wooded little her. Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given.</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>    
        </section>

        <section id="welcome" >
            <div class="section-inner nopaddingbottom">
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-12 mb100 wow" style="text-align: right;margin-bottom: 0%;margin-top: -10%;">        
                            <div class="actions"> 
                            <h3 class="section-subheading secondary-font">
                             <br><a href="#comments">Commenter //</a>
                              <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier //</a>
                             <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>" style="margin-right: 16%;">Supprimer ce post </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>

    <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row" style="margin-top: -20%;padding-bottom: 0%;">
                        <div id="comments-list" class="col-sm-8 col-sm-offset-2 gap wow">
                            <div class="mt60 mb50 single-section-title">
                                <h3>Commentaires</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       

 <div class="section-inner"style="margin-top: -70%;padding-top: 0%;">
                 <?php    
    foreach ($comments as $comment) {                    
          ?><div class="container">
                    <div class="row" >       
                        <div id="comments-list" class="col-sm-8 col-sm-offset-2 gap wow">
                       
                           <div class="media">
                                <div class="pull-left">
                                    <img class="avatar comment-avatar" src="assets/img/users/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="well">
                                        <div class="media-heading">
                                            <span class="heading-font"><?= htmlspecialchars($comment->getPseudo()); ?></span>&nbsp; <small class="secondary-font">Posté le : <?= htmlspecialchars($comment->getCreatedAt()) ?></small>
                                        </div>
                                        <p><?= nl2br(htmlspecialchars($comment->getContent())) ?></p>
                                    
                                 </div>
                                </div>     
                            </div>
                        </div>
                  
                                <?php
        if ($comment->isFlag()) {
            ?><p class="flag">Ce commentaire à été signalé</p>
            <?php
        } else {
            ?><a class="btn btn-primary pull-right"href="../public/index.php?route=flagComment&commentId=<?= $comment->getId() ?>"style="margin-top: -6%;margin-right: 38%;">Signaler</a>
        <?php }
        ?><a class="btn btn-primary pull-right" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"style="margin-top: -6%;margin-right: 19%;">Supprimer le commentaire</a></div><?php
    }
    ?>              
                    </div>
                                    <!--/.media-->
                </div>            
                       
           </div>
    </section>  

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row" style="margin-top: -15%;">          
                        <div id="comments-list" class="col-sm-8 col-sm-offset-2 gap wow">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar comment-avatar" src="assets/img/users/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="well">
                                        <div class="media-heading">
                                            <span class="heading-font">Dave Evans</span>&nbsp; <small class="secondary-font">30th Jan, 2015</small>
                                        </div>
                                        <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                        <a class="btn btn-primary pull-right" href="#">Reply</a>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar comment-avatar" src="assets/img/users/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="well">
                                                <div class="media-heading">
                                                    <span class="heading-font">Dave Evans</span>&nbsp; <small>30th Jan, 2015</small>
                                                </div>
                                                <p>Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the. Abode stuff noisy manor blush yet the far. Up colonel so between removed so do.</p>
                                                <a class="btn btn-primary pull-right" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.media-->
                                </div>
                            </div>
                            <!--/.media-->
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar comment-avatar" src="assets/img/users/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="well">
                                        <div class="media-heading">
                                            <span class="heading-font">Dave Evans</span>&nbsp; <small>30th Jan, 2015</small>
                                        </div>
                                        <p>Quitting informed concerns can men now. Projection to or up conviction uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p>
                                        <a class="btn btn-primary pull-right" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!--/.media-->

                            <div id="comments">
                                <?php include 'form_comment.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
  


         <div >
                <a class="btn btn-primary " href="#" style="margin-top:382%">Revoir le post</a>
                <p></p>
                <br><p></p>

            </div>   

    </section>