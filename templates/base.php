<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mon blog professionnel">
    <meta name="author" content="mialy">


<!------------------Font----------->

<link rel="shortcut icon" href="../templates/assets/img/ico/ico_w_techno.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../templates/assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../templates/assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../templates/assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../templates/assets/img/ico/apple-touch-icon-57x57.png">

     <title><?= $title ?></title>

     <!-- Bootstrap Core CSS -->
    <link href="../templates/assets/css/bootstrap.min.css" rel="stylesheet"type="text/css">
    <link href="../templates/assets/css/animate.css" rel="stylesheet"type="text/css">
    <link href="../templates/assets/css/plugins.css" rel="stylesheet"type="text/css">

<!-- Custom CSS -->
    <link href="../templates/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="../templates/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../templates/assets/css/pe-icons.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

       
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
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

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <div><i class="fa fa-envelope-o"></i> mialy.razaf.com</div>
                                </li>
                                <li>
                                    <div class="meta-item">
                                </li>
                                <li>
                                    <div class="meta-item">
                                </li>
                                <li>
                                    <div class="meta-item"></div>
                                </li>
                            </ul>
                        </div>
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
                    <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="assets/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="../public/index.php" class="dropdown-toggle" >Accueil</a>
                        </li>
                        <li class="dropdown">
                            <a href="../templates/bloghome.php#quisuisje" class="dropdown-toggle" data-hover="dropdown" >Qui suis-je </a>
                        </li>
                        <li class="dropdown">
                            <a href="../templates/bloghome.php#competences" class="dropdown-toggle" data-hover="dropdown" >Compétences</a>
                        </li>
                        <li class="dropdown">
                            <a href="../templates/bloghome.php#portfolio" class="dropdown-toggle" >Portfolio </a>
                        </li>
                        <li class="dropdown">
                            <a href="../templates/bloghome.php#contact-tabs" class="dropdown-toggle" >Contact</a> 
                        </li>
                        <li class="dropdown">
                            <a href="../public/index.php?route=login" class="dropdown-toggle" >Blog</a>
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
           <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 mt30 wow">
                                
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div> 

        </section>
<!-----------------------------fin header------------->
  
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
                            <p class="lead">Lorem ipsum dolor sit amet. 33 quam rerum hic quod odio id magni enim. Sit impedit enim aut ipsam labore et fugiat excepturi est laboriosam beatae quo provident quae ut vero distinctio ut voluptatem minima.</p>
                            <p class="lead">Ut vitae maxime et iure alias ut quaerat sequi. Rem harum nulla et harum pariatur eos blanditiis sequi aut soluta quia id obcaecati voluptas et harum ipsa est dicta maxime.</p>
                            <p class="mt30"><a href="../document/CV.pdf"  class="btn btn-primary btn-theme page-scroll "target="blank">Télécharger mon CV</a></p>
                        </div>

                        <div class="col-md-6">
                            <img src="../templates/assets/img/isometric-ipad-white.png" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="">
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
                                            <img class="widget-img" src="../templates/assets/img/widget/widget1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post A</a></span>
                                            <small class="muted">Posted 14 April 2015</small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="../templates/assets/img/widget/widget2.jpg" alt="">
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

     
     <script src="../templates/assets/js/bootstrap.min.js"></script>
     <script src="../templates/assets/js/jquery.js" type="text/javascript"></script>
     <!-- <script src="other_lib.js"></script> -->
<!-- <script src="jquery.js"></script> -->
<script>
$.noConflict();
// Code that uses other library's $ can follow here.
</script>
    <script src="../templates/assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src=../templates/assets/js/init.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries <!-- -->
   <!--  WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->


</body>
</html> 