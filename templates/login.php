<?php $this->title = "Connexion" ?>
<!DOCTYPE html>

<html lang="en">

<section>
           
        </section>
        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">
                            <h4 class="section-heading">Decouvrez les blog posts</h4>
                            <div class="item-metas text-muted mb30 white">

      <div class="container text-center" >

        <center><p><?= $this->session->show('error_login')?></p></center>
        <?= $this->session->show('need_login');?></p>
 </div>
          <h2><p>Connectez-vous</h2></p> 
        <div>
        <form method="post" action="../public/index.php?route=login" target="_blank">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : '';?>" style="color:black;"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"style="color:black;"><br>
        <br><input type="submit" style="color: black;"value="Connexion" id="submit" name="submit">
        </form>
           <p><span class="meta-item"><i class="pe-icon pe-7s-folder"></i><a href="../public/index.php?route=register"> Pas encore inscrit ? </a><span>C'est par ici</span></span></p>
         <p><span class="meta-item"><i class="pe-icon pe-7s-ticket"></i><a href="../public/index.php"><span> Retour à l'accueil</a></span></span></p>
        </div> 

  



                            </div>
                        </div>
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


   



</html>
