
                <!-----anti csrf----->
<?php
//On démarre les sessions
session_start();
//On génére un jeton totalement unique (c'est capital :D)
$token = uniqid(rand(), true);
//Et on le stocke
$_SESSION['token'] = $token;
//On enregistre aussi le timestamp correspondant au moment de la création du token
$_SESSION['token_time'] = time();


?>


          <!----------fin anti csrf---------->

<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mon blog professionnel">
    <meta name="author" content="mialy">
    <link rel="shortcut icon" href="assets/img/ico/ico_w_techno.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>MonBlogPro</title>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix col-md-11 text-right">
                        <ul class="list-inline social-links wow">
                        
                                <li>
                                    <a href="https://twitter.com/?lang=fr"target="_blank"><i class="fa fa-twitter" ></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/rmialy17/"target="_blank"><i class="fa fa-github" ></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/?hl=fr"target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://fr-fr.facebook.com/"target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li> 
                                    <a href="https://fr.linkedin.com/"target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                    </div>

                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie logo logo-light" href="#"><img class="logo-bloghome"src="assets/img/logo/logo_white_large.png"alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="#"><img class="logo-bloghome"src="assets/img/logo/logo_large.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown" >
                            <a href="../templates/bloghome.php" class="dropdown-toggle" data-hover="dropdown">Accueil</span></a>
                                </li>
                                
                        <li class="dropdown">
                            <a href="#quisuisje" class="dropdown-toggle" data-hover="dropdown" >Qui suis-je</a>
                        </li>
                        <li class="dropdown">
                            <a href="#competences" class="dropdown-toggle" data-hover="dropdown">Compétences </a>
                        </li>
                        <li class="dropdown">
                            <a href="#portfolio" class="dropdown-toggle" data-hover="dropdown">Portfolio</a>
                        </li>
                            
                        <li class="dropdown">
                            <a href="#blog" class="dropdown-toggle" data-hover="dropdown">Blog</a>
                        </li>
                        <li class="dropdown">
                            <a href="#contact-tabs" class="dropdown-toggle" data-hover="dropdown">Contact</a>
                        </li>  
                        
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header id="headerwrap" class="backstretched fullheight agency-slider backstretch-overlay-alt">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-left smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Bienvenue sur mon blog</div>
                    <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">La perséverance est <span class="rotate">mère de réussite, la clé du succès, plus forte que le talent</span></div>
                    <a href="#welcome" class="btn btn-primary btn-white mt30 page-scroll" data-wow-delay="0.6s">En savoir plus</a>
                </div>
            </div>
        </header>

        <section id="welcome" >
            <div class="section-inner nopaddingbottom" id="quisuisje">

                <div class="container" >
                    <div class="row"  >
                        <div class="col-lg-12 mb100 wow" >
                            <h2 class="section-heading">Mialy RAZAFINDRABE</h2>
                            <h3 class="section-subheading secondary-font">Développeuse d'applications</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Je m'appelle Mialy, je suis issue d'un parcours scientifique et ai travaillé plusieurs années chez un éditeur de logiciels. J'effectue actuellement un parcours chez openClassRooms pour développer mes compétences en programmation. 

                            <p class="lead">Ut vitae maxime et iure alias ut quaerat sequi. Rem harum nulla et harum pariatur eos blanditiis sequi aut soluta quia id obcaecati voluptas et harum ipsa est dicta maxime.</p>

                            <p class="mt30">
                            <!----------upload protection----->
                            <?php
                                $pattern="#pdf#";
                                $fileName="../document/my_private_doc_m_r_cv_fromblog.pdf";
                                  if(($fileName==="../document/my_private_doc_m_r_cv_fromblog.pdf")&&preg_match($pattern,$fileName,$matches) ){  ?>
                                 <!-- // Accepter l'upload -->
                                    <a href="<?php echo $fileName;?>"class="btn btn-primary btn-theme page-scroll "target="blank">Télécharger mon CV</a>
                                  <?php  }else
                                 echo 'Format du fichier invalide.';
                                ?>
                    
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img src="assets/img/isometric-ipad-white.png" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white-bg"id="competences">
            <div class="section-inner nopadding-bottom" >
                <div class="container">
                    <div class="row">

                       <div class="col-lg-12 mb100 wow">
                            <h2 class="section-heading" >Mes compétences</h2>
                            <h3 class="section-subheading secondary-font">Développeuse d'applications</h3>
                        </div>

                        <div class="col-sm-12 match-height">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/1.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">GENERAL</a></h3>
                                                        <p>Organisation
                                                        <br>Relationnel client
                                                        <br>Bureautique
                                                        <br>Priorisation des tâches</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/2.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Langages</a></h3>
                                                        <p>HTML & CSS
                                                        <br>MySQL
                                                        <br>PHP
                                                        <br>Symfony</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/3.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Outils</a></h3>
                                                        <p>Bootstrap
                                                        <br>Wordpress
                                                        <br>Git
                                                        <br>Github</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/4.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Plus</a></h3>
                                                        <p>Motivation
                                                        <br>Rigueur
                                                        <br>Persévérance
                                                        <br>Veille technologique</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/agency/hero3b.jpg" data-speed="0.7">
            <div class="section-inner">
                <div class="container">
                    <div class="row mb100">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-download"></i>
                                <div class="content-area">
                                    <h3 class="title">HTML & CSS</h3>
                                    <div class="content">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                              <i class="fa-4x pe-7s-tools"></i>
                                <div class="content-area">
                                    <h3 class="title">MySQL</h3>
                                    <div class="content">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-config"></i>
                                <div class="content-area">
                                    <h3 class="title">PHP & Symfony</h3>
                                    <div class="content">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-settings"></i>
                                <div class="content-area">
                                    <h3 class="title">Git & Github</h3>
                                    <div class="content">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-monitor"></i>
                                <div class="content-area">
                                    <h3 class="title">Bootstrap</h3>
                                    <div class="content">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="icon-box-1 match-height mb30">
                                <i class="fa-4x pe-7s-usb"></i>
                                <div class="content-area">
                                    <h3 class="title">Wordpress</h3>
                                    <div class="content">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <section>
            <div class="section-inner" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb100 wow">
                            <h2 class="section-heading" >Portfolio</h2>
                            <h3 class="section-subheading secondary-font">Mes projets récents</h3>
                        </div>
                     
                <div class="container">
                    <div class="col-md-12">
                        <ul class="portfolio-items nopadding-lr isotope list-unstyled">
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr apps isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio1.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Chalets & Caviar</a></h3>
                                            <a href="https://chaletsetcaviar-mialy-rzf.com" title="View Gallery" class="btn btn-primary smoothie" target="_blank">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr apps isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio2.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Les films de plein air</a></h3>
                                            <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr photography isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio3.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Express Food</a></h3>
                                            <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr photography isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio4.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Blog professionnel</a></h3>
                                            <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr design isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio5.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio5.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr photography isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio6.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio6.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr video isotope-item">
                                <div class="hover-item">
                                    <div class="hover-item">
                                        <img src="assets/img/portfolio/portfolio7.jpg" class="img-responsive smoothie" alt="">
                                        <div class="overlay-item-caption smoothie"></div>
                                        <div class="hover-item-caption smoothie">
                                            <div class="vertical-center smoothie">
                                                <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Fullscreen Gallery</a></h3>
                                                <a href="assets/img/portfolio/portfolio7.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                                <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-4 col-xs-12 portfolio-item nopadding-lr design isotope-item">
                                <div class="hover-item">
                                    <img src="assets/img/portfolio/portfolio8.jpg" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project">Fullscreen Gallery</a></h3>
                                            <a href="assets/img/portfolio/portfolio8.jpg" title="View Gallery" class="btn btn-primary lb-link smoothie">Zoom</a>
                                            <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                           
                        </ul>
                        </div>
                    </div>
                </div>
        </section>

        <section class="dark-wrapper">
            <div class="contact-tabs" id="contact-tabs" role="tabpanel">

                <!-- Nav tabs -->
               <ul class="nav nav-justified icon-tabs" id="nav-tabs" role="tablist">
                    <li role="presentation" class="ptb smoothie active">
                        <a href="#contact1" aria-controls="contact1" role="tab" data-toggle="tab">
                            <span class="tabtitle heading-font smoothie text-right">Me contacter</span>
                        </a>
                    </li>
                    <li role="presentation" class="ptb smoothie">
                        <a href="#contact2" aria-controls="contact2" role="tab" data-toggle="tab">
                            <span class="tabtitle heading-font smoothie text-left">| me rencontrer</span>
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
                                            <form method="post" action="contact.php"id="contactform">
                                                <input type="text" class="form-control col-md-4" name="firstname" placeholder="Votre prenom*" id="firstname" required data-validation-required-message="Merci d'indiquer votre prénom." /> 
                                                <input type="text" class="form-control col-md-4" name="name" placeholder="Votre nom*" id="name" required data-validation-required-message="Merci d'indiquer votre nom." /> 
                                                 <input type="hidden" class="form-control col-md-4" name="website" placeholder="Votre nom*" id="website" />
                                                <input type="text" class="form-control col-md-4" name="email" placeholder="votre email *" id="email" required data-validation-required-message="Merci d'indiquer votre adresse email." /> 

                                                <input type="hidden" class="form-control" name="token" id="token" value="<?php
//Le champ caché a pour valeur le jeton
echo $token;
    ?>"/>
                                                <textarea name="comments" class="form-control" id="comments" placeholder="Votre message*" required data-validation-required-message="Merci d'indiquer votre message."></textarea>
                                               
                                                <input class="btn btn-primary mt30 btn-white pull-right" type="submit" name="submit" value="Envoyer" />
                                           </form>
                                           <p>*Champs obligatoires</p>
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="opaqued light-opaqued parallax">
            <div class="section-inner" id="blog">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 mb100 wow">
                            <h2 class="section-heading" >Découvrir les posts</h2>
                            <h3 class="section-subheading secondary-font">Tutoriels, Actualités du secteur de l'informatique </h3>
                        </div>

                        <div class="col-sm-8 col-sm-offset-2">
                            <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-desktop="[1200,4]" data-items-desktop-small="[980,4]" data-items-tablet="[768,3]" data-items-mobile="[479,2]">
                                <li>
                                    <i class="fa-4x pe-7s-tools"class="img-responsive" alt=""></i>
                                </li>
                                <li>
                                    <i class="fa-4x pe-7s-mouse"class="img-responsive" alt=""></i>
                                </li>
                                <li>
                                    <i class="fa-4x pe-7s-config"class="img-responsive" alt=""></i>
                                </li>
                                <li>
                                   <i class="fa-4x pe-7s-usb"class="img-responsive" alt=""></i>
                                </li>
                                <li>
                                    <i class="fa-4x pe-7s-monitor"class="img-responsive" alt=""></i>
                                </li>
                                <li>
                                    <i class="fa-4x pe-7s-mouse"class="img-responsive" alt=""></i>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class="mt30"><a href="../public/index.php?route=home"  class="btn btn-primary btn-theme page-scroll "target="blank">Voir les blog posts</a></p>
                </div>
            </div>
        </section>

       <!----------------------footer-------------------------->
<section>
        <div id="footer-wrapper" class="dark-footer-image-bg">
            <section class="dark-wrapper">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <div class="widget">
                                    <a href="#contact-tabs"><img src="assets/img/enveloppe.png" alt="">
                                </div>                       
                            </div>
                             <div class="widget about-us-widget">
                                    <h4 class="widget-title"><strong>contactez-moi</strong></h4>
                                    <p>mialy.razaf@gmail.com</a></p>
                                </div>
                        </div>
                    </div>
            </section>
    


            <footer class="white-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 text-right">
                            <ul class="list-inline social-links wow">
                                <li>
                                    <a href="https://twitter.com/?lang=fr"target="_blank"><i class="fa fa-twitter" ></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/rmialy17/"target="_blank"><i class="fa fa-github" ></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/?hl=fr"target="_blank"><i class="fa fa-instagram" ></i></a>
                                </li>
                                <li>
                                    <a href="https://fr-fr.facebook.com/"target="_blank"><i class="fa fa-facebook" ></i></a>
                                </li>
                                <li> 
                                    <a href="https://fr.linkedin.com/"target="_blank"><i class="fa fa-linkedin" ></i></a>
                                </li>
                            </ul>
                            
                        </div>

                        <div class="col-md-11 text-right">
                            <span class="copyright">Copyright 2021 © Mialy RAZAFINDRABE</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
</section>

            <!----------------script js-------------->

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        
        <script src="assets/js/init.js"></script>
 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</body>

</html>
