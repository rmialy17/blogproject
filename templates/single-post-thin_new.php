<?php $this->title = 'Blog post'; ?>

<!DOCTYPE html>
<html lang="en">
<h1>Mon blog</h1>
<p>En construction</p>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<div>
    <h2><?= htmlspecialchars($article->getTitle()); ?></h2>
    <p><?= nl2br(htmlspecialchars($article->getChapo())); ?></p>
    <p><?= nl2br(htmlspecialchars($article->getContent())); ?></p>
    <p><?= htmlspecialchars($article->getAuthor()); ?></p>
    <p>Crée le : <?= htmlspecialchars($article->getCreatedAt()); ?></p>
</div>
<div class="actions">
    <p><a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a></p>
    <p><a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a></p>
</div>
<br>
<a href="../public/index.php?route=home">Retour à l'accueil Blog Post</a>
<div id="comments" class="text-left">
    <h3>Ajouter un commentaire</h3>
    <?php include 'form_comment.php'; ?>
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment) {
        ?><h4><?= htmlspecialchars($comment->getPseudo()); ?></h4>
        <p><?= nl2br(htmlspecialchars($comment->getContent())) ?></p>
        <p>Posté le : <?= htmlspecialchars($comment->getCreatedAt()) ?></p>
        <?php
        if ($comment->isFlag()) {
            ?><p class="flag">Ce commentaire à été signalé</p>
            <?php
        } else {
            ?><p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId() ?>">Signaler le commentaire</a></p>
        <?php }
        ?><p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p><?php
    }
    ?>
</div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">
                            <h2 class="section-heading">Single Blog Post</h2>
                            <div class="item-metas text-muted mb30 white">
                                <span class="meta-item"><i class="pe-icon pe-7s-folder"></i> POSTED IN <span>News</span></span>
                                <span class="meta-item"><i class="pe-icon pe-7s-ticket"></i> TAGS <span>Photography</span></span>
                                <span class="meta-item"><i class="pe-icon pe-7s-user"></i> AUTHOR <span>Danny Jones</span></span>
                                <span class="meta-item"><i class="pe-icon pe-7s-comment"></i> COMMENTS <span>3</span></span>
                                <span class="meta-item post-date"><i class="pe-icon pe-7s-clock"></i> POSTED <span>12th December, 2016</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div id="post-content" class="col-sm-8 col-sm-offset-2 blog-item mb60 wow">
                            <div class="row">
                                <div class="col-sm-12 single-post-content">
                                    <p>Behind sooner dining so window excuse he summer. Breakfast met certainty and fulfilled propriety led. Waited get either are wooded little her. Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given. Behind sooner dining so window excuse he summer. Breakfast met certainty and fulfilled propriety led. Waited get either are wooded little her. Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given.</p>
                                    <p>Behind sooner dining so window excuse he summer. Breakfast met certainty and fulfilled propriety led. Waited get either are wooded little her. Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given.</p>

                                    <div data-easyshare data-easyshare-url="http://www.distinctivethemes.com/">
                                        <!-- Total -->
                                        <button data-easyshare-button="total">
                                            <span>Total</span>
                                        </button>
                                        <span data-easyshare-total-count>0</span>

                                        <!-- Facebook -->
                                        <button data-easyshare-button="facebook">
                                            <span>Share</span>
                                        </button>
                                        <span data-easyshare-button-count="facebook">0</span>

                                        <!-- Twitter -->
                                        <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                            <span>Tweet</span>
                                        </button>
                                        <span data-easyshare-button-count="twitter">0</span>

                                        <!-- Google+ -->
                                        <button data-easyshare-button="google">
                                            <span>+1</span>
                                        </button>
                                        <span data-easyshare-button-count="google">0</span>

                                        <div data-easyshare-loader>Loading...</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="comments-list" class="col-sm-8 col-sm-offset-2 gap wow">
                            <div class="mt60 mb50 single-section-title">
                                <h3>3 Comments</h3>
                            </div>
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

                            <div id="comments-form" class="row wow">
                                <div class="col-md-12">
                                    <div class="mt60 mb50 single-section-title">
                                        <h3>Leave A Reply</h3>
                                    </div>
                                    <div id="comment_message"></div>
                                    <form method="post" id="commentform" class="comment-form">
                                        <input type="text" class="form-control col-md-4" name="name1" placeholder="Your Name *" id="name1" required data-validation-required-message="Please enter your name." />
                                        <input type="text" class="form-control col-md-4" name="email1" placeholder="Your Email *" id="email1" required data-validation-required-message="Please enter your email address." />
                                        <input type="text" class="form-control col-md-4" name="website1" placeholder="Your URL *" id="website1" required data-validation-required-message="Please enter your web address." />
                                        <textarea name="comments1" class="form-control" id="comments1" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                        <a class="btn btn-primary pull-right" href="#">Reply</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg6.jpg" data-speed="0.7">
            <div id="contact-tabs" role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-justified icon-tabs" id="nav-tabs" role="tablist">
                    <li role="presentation" class="ptb smoothie active">
                        <a href="#contact1" aria-controls="contact1" role="tab" data-toggle="tab">
                            <span class="tabtitle heading-font smoothie text-right">Email Us</span>
                        </a>
                    </li>
                    <li role="presentation" class="ptb smoothie">
                        <a href="#contact2" aria-controls="contact2" role="tab" data-toggle="tab">
                            <span class="tabtitle heading-font smoothie text-left">Visit Us</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" id="tabs-collapse">
                    <div role="tabpanel" class="tab-pane fade in active" id="contact1">
                        <div id="contact-inner" class="nopadding-lr">
                            <div class="contact-section-inner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div id="message"></div>
                                            <form method="post" action="sendemail.php" id="contactform" class="main-contact-form wow">
                                                <input type="text" class="form-control col-md-4" name="name2" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                                <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                                <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                                <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                                <input class="btn btn-primary mt30 btn-white pull-right" type="submit" name="submit" value="Submit" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="contact2">
                        <div id="mapwrapper"></div>
                    </div>

                </div>
            </div>
        </section>

        <section class="dark-wrapper">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget about-us-widget">
                                <h4 class="widget-title"><strong>Global</strong> Coverage</h4>
                                <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                <div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post A</a></span>
                                            <small class="muted">Posted 14 April 2015</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post B</a></span>
                                            <small class="muted">Posted 14 April 2015</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                <div class="tagcloud">
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Local</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Business</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Media</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Photogtraphy</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Aid</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Fashion</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">News</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Cars</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Global Affairs</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Music</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Downloads</a>
                                    <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">MP3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="white-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline social-links wow">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="thin-hr" />

                    <div class="col-md-12 text-center wow">
                        <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <div class="flexpanel">
        <div class="viewport-wrap">
            <div class="viewport">
                <div class="widget mb50">
                    <h4 class="widget-title">Latest Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Panic In London</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">New iPhone News</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Sheen Interview</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget mb50">
                    <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                    <div class="tagcloud">
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Local</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Business</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Media</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Photogtraphy</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Aid</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Fashion</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">News</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Cars</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Global Affairs</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Music</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Downloads</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">MP3</a>
                    </div>
                </div>
                <div class="widget about-us-widget mb50">
                    <h4 class="widget-title">About Kompleet</h4>
                    <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</body>

</html>
