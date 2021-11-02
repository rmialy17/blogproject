<!doctype html>
<html lang="fr" class=" js csstransitions">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../templates/assets/css/style.css" type="text/css">

<!------------------Font----------->

<link rel="shortcut icon" href="../templates/assets/img/ico/ico_w_techno.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../templates/assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../templates/assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../templates/assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="../templates/assets/img/ico/apple-touch-icon-57x57.png">

  <!-- Bootstrap Core CSS -->
    <link href="../templates/assets/css/bootstrap.min.css" rel="stylesheet"type="text/css">
    <link href="../templates/assets/css/animate.css" rel="stylesheet"type="text/css">
    <link href="../templates/assets/css/plugins.css" rel="stylesheet"type="text/css">

<!-- Custom CSS -->
    <link href="../templates/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../templates/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../templates/assets/css/pe-icons.css" rel="stylesheet" type="text/css">

    <!----------Bootstrap link---------->
<!-- 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
 
   <title><?= $title ?></title>

   
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
                                    <div><i class="fa fa-envelope-o"></i> mialy.razaf@gmail.com</div>
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
                    <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="../templates/assets/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="../templates/assets/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="../public/index.php?=bloghome" class="dropdown-toggle" data-toggle="dropdown">Accueil<span class="pe-7s-angle-down"></span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Qui suis-je <span class="pe-7s-angle-down"></span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Compétences <span class="pe-7s-angle-down"></span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <span class="pe-7s-angle-down"></span></a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <span class="pe-7s-angle-down"></span></a>
                           
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="pe-7s-angle-down"></span></a>
                           
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Connexion <span class="pe-7s-angle-down"></span></a>
                            
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
 
  <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="../templates/assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-sm-offset-2 mt30 wow">
                            


  
        <?= $content ?>
 




                           
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


     <script src="../templates/assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="../templates/assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries <!-- -->
   <!--  WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--  [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->


</body>
</html> 