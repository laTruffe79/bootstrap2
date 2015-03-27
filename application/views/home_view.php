<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <title>CERF Formations DPC</title>
        <!--<link href="../assets/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="../assets/css/animate.css" rel="stylesheet">
        <link href="../assets/css/main.css" rel="stylesheet">
        <link href="../assets/css/jquery.fullScreenModal.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/js/AddToHomescreen/style/addtohomescreen.css">

        <!--Icomoon icons-->
        <link href="../assets/css/style.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]--> 
        <!--manifest.json for android mobile web-app-->
        <link rel="manifest" href="manifest.json">

        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->
    <body>
        <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="../assets/images/cerf/CERF-FORMATION_h100.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <!--Si la page en cours est l'index alors le lien est un scroll-->
                        <?php
                        if (preg_match('/home/', $_SERVER['REQUEST_URI'])) {
                            $active_link = "#tiles";
                        } else {
                            $active_link = "index.php";
                        }
                        ?>
                        <li class="active"><a class="scrollTo" href="<?php echo $active_link ?>"><span class="icon-home"></span> Accueil</a></li>
                        <!--<li><a href="about-us.html">Qui sommes nous</a></li>-->
                        <li><a class="scrollTo" href="#main-slider">Qui sommes nous</a></li>
                        <li><a class="scrollTo" href="#lieux-formation">Lieux de formation</a></li>
                        <li><a class="scrollTo" href="#DPC">DPC</a></li>
                        <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="career.html">Career</a></li>
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="registration.html">Registration</a></li>
                                <li class="divider"></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms of Use</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>--> 
                        <li><a class="scrollTo" href="#contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a id="connect" href="javascript:void(0);"><i class="icon-user" style="font-size:20px;margin-right: 5px;"></i>Connexion</a>

                        </li>
                    </ul>
                </div>
            </div>
        </header><!--/header-->

        <section id="tiles" class="tiles">
            <div id="containerTiles" class="container text-center"> 
                <h1>CERF des formations pour tous</h1>
                <p>Depuis 30 ans notre équipe est aux côtés de tous les professionnels pour les aider à se former 
                    tout au long de la vie.</p>
                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <div class="containerHover" data-expand="0">
                            <div class="caption"><a href="#">Médecins</a></div>
                            <div class="img">
                                <img src="../assets/images/stock/mini/18830710_M.jpg" alt="" class="thumbnail img-responsive" />
                            </div>
                            <div class="hoverContent ellipsis">
                                <div>Le Lorem Ipsum est simplement du faux texte employé dans la 
                                    composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte 
                                    standard de l'imprimerie depuis les années 1500 
                                    <a class="readmore" href="/formations-medecins">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>         

                    <div class="col-lg-3 col-sm-3">
                        <div class="containerHover" data-expand="0">
                            <div class="caption"><a href="#">Infirmiers / aides soignants</a></div>
                            <div class="img">
                                <img src="../assets/images/stock/mini/5758207949_b826fb3e4e_o.jpg" alt="" class="thumbnail img-responsive" />
                            </div>
                            <div class="hoverContent ellipsis"><div>Le Lorem Ipsum est simplement du faux texte employé dans la 
                                    composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte 
                                    standard de l'imprimerie depuis les années 1500
                                    <a class="readmore" href="/formations-infirmiere-aide-soignant">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="containerHover" data-expand="0">
                            <div class="caption"><a href="#">Éducation nationale</a></div>
                            <div class="img">
                                <img src="../assets/images/stock/mini/8022944555_0dc9a94769_o.jpg" alt="" class="thumbnail img-responsive" /></a>
                            </div>
                            <div class="hoverContent ellipsis"><div>Le Lorem Ipsum est simplement du faux texte employé dans la 
                                    composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte 
                                    standard de l'imprimerie depuis les années 1500
                                    <a class="readmore" href="/formations-education-nationale">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="containerHover" data-expand="0">
                            <div class="caption"><a href="#">Police nationale</a></div>
                            <div class="img">
                                <img src="../assets/images/stock/mini/6934995549_a003317dd0_o.jpg" alt="" class="thumbnail img-responsive" /></a>
                            </div>
                            <div class="hoverContent ellipsis"><div>Le Lorem Ipsum est simplement du faux texte employé dans la 
                                    composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte 
                                    standard de l'imprimerie depuis les années 1500
                                    <a class="readmore" href="/formations-police-nationale">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="containerHover" data-expand="0">
                            <div class="caption"><a href="#">Aides aux persones âgées</a></div>
                            <div class="img">
                                <img src="../assets/images/stock/mini/5678629299_0805e654cb_o.jpg" alt="" class="thumbnail img-responsive" /></a>
                            </div>
                            <div class="hoverContent ellipsis"><div>Le Lorem Ipsum est simplement du faux texte employé dans la 
                                    composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte 
                                    standard de l'imprimerie depuis les années 1500
                                    <a class="readmore" href="/formations-personnes-agees">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="containerHover" data-expand="0">
                            <div class="caption"><a href="#">Travailleurs sociaux</a></div>
                            <div class="img">
                                <img src="../assets/images/stock/mini/7087162819_bd39c4a6f9_o.jpg" alt="" class="thumbnail img-responsive" /></a>
                            </div>
                            <div class="hoverContent ellipsis"><div>Le Lorem Ipsum est simplement du faux texte employé dans la 
                                    composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte 
                                    standard de l'imprimerie depuis les années 1500
                                    <a class="readmore" href="/formations-travailleurs-sociaux">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="main-slider" class="no-margin">
            <div class="carousel slide wet-asphalt">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- -->
                    <div id="carouselItem1" class="item active" style="background-image: url(../assets/images/cerf/team_slider.jpg)"> 
                        <div class="container centpercent">
                            <div class="row">
                                <div class="col-lg-3 col-md-2 col-xs-1 center nopadding">

                                </div>
                                <div class="col-lg-6 col-md-8 col-xs-10">
                                    <div id="contentJumbotronCarouselItem1" class="carousel-content jumbotron justifyed responsive ">
                                        <div class="row">
                                            <div class="col-sm-12 center">
                                                <h2 class="animation animated-item-1">Une équipe centrée autour de votre projet.</h2>
                                            </div>
                                        </div>
                                        <div id="exceptionRow" class="row">

                                            <div class="col-md-6" style="padding-bottom: 15px;">
                                                <img class="img-responsive img-rounded thumbnail" style="max-height: 100%;" src="../assets/images/cerf/b-dufourcq.jpg" alt=""/>
                                            </div>
                                            <div class="col-md-6">
                                                <p class=""><span class="icomoon-quotes-left"></span> Depuis plus de 30 ans, CERF est au service de la formation pour les secteurs de
                                                    la santé, médico-social, social, éducatif et des collectivités. <span class="icomoon-quotes-right"></span>
                                                <div class="row">
                                                    <div class="col-md-3 center" style="padding-top: 5px;">
                                                        <span class="icomoon-quill" style="font-size:28px;"></span>
                                                    </div>
                                                    <div class="col-md-9" style="line-height: 20px;padding: 0px;margin-bottom: 0px;">
                                                        <small>Bertrand Dufourcq<br />Président de<br /> CERF Formation.</small>
                                                    </div>
                                                </div>

                                                </p>

                                            </div>


                                        </div>  
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-2 col-xs-1"></div>

                            </div>
                        </div>
                    </div>
                    <!--/.item-->
                    <div id="carouselItem2" class="item" style="background-image: url(../assets/images/stock/niortaerien.jpg)"> 
                        <div class="carousel-content center">     
                            <div  class="row">
                                <div class="col-sm-3"></div>

                                <div id="containerSlider1-2" class="col-sm-6 center">
                                    <div class="row">
                                        <div  class="col-sm-12 caption2">
                                            <h2 class="">Chaque année CERF c'est : </h2>
                                            <div>
                                                <p class="lead text-left animation animated-item-1">
                                                    <span class="icomoon-book"></span> - Plus <strong>400</strong> formations proposées.
                                                </p>

                                                <p class="lead text-left animation animated-item-2">
                                                    <span class="icomoon-users"></span> - Plus <strong>4 000</strong> stagiaires à travers la France.
                                                </p>
                                                <p class="lead text-left animation animated-item-3">
                                                    <span class="icomoon-happy"></span> - <strong>97%</strong> de stagiaires satisfaits des connaissances apportées.
                                                </p>
                                                <p class="lead text-left animation animated-item-4">
                                                    <span class="icomoon-map"></span> - Des sessions intra-entreprises partout en France et inter <a class="scrollTo" href="#lieux-formation">dans les villes suivantes</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">

                                </div>
                            </div>
                        </div>


                    </div><!--/.item-->
                    <div id="carouselItem3" class="item" style="background-image: url(../assets/images/stock/blended_learning_img1.jpg)">
                        <div id="carouselItem3Container" class="container center centpercent">
                            <div class="row">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-5" id="carouselContent3-1">
                                    <div  class="carousel-content caption2" >
                                        <h2 class="animation animated-item-1">Un organisme qui porte des valeurs humaines <br /></h2>
                                        <h2><span class="icomoon-accessibility"></span></h2>
                                        <p class="animation animated-item-2 lead text-left">Le respect et l'écoute dans l'approche pédagogique.</p>
                                        <p class="animation animated-item-3 lead text-left">l'éthique et la responsabilité dans notre démarche de transmission des savoirs et savoir-faire.</p>
                                        <!--<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>-->
                                    </div>
                                </div>

                                <div id="containerEmbed" class="col-sm-5 hidden-xs animation animated-item-4">
                                    <div class="embed-container">
                                        <iframe id="carouselContent3-2" width="560" height="350" src="https://www.youtube.com/embed/Q_kqplOxytU?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                                        <!--<iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                    </div>

                                </div>
                                <div class="col-sm-1"></div>

                            </div>
                        </div>
                    </div><!--/.item-->
                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="icon-angle-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="icon-angle-right"></i>
            </a>
        </section><!--/#main-slider-->

        <section id="lieux-formation">
            <div id="containerLieux" class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 center">
                        <h1><span class="icomoon-location"></span> Nos lieux de formations (Inter-entreprises)</h1>
                    </div>
                </div>
                <div class="row center">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="text-left" id="controls"></div>
                        <div id="gmap1"></div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>

        <section id="DPC">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 blogShort">
                        <div class="center">
                            <h1>Habilitation DPC</h1>
                        </div>

                        <img src="../assets/images/cerf/DPC.jpg" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin20">
                        <article>
                            <p class="lead"><strong>Le Développement professionnel continu (DPC)</strong></p>
                            <p><strong>Le DPC</strong> : de quoi s'agit-il ? Depuis le 1er janvier 2013, tous les professionnels de santé ont l'obligation de suivre chaque année un programme de développement professionnel continu (DPC).</p><p><strong>Objectifs du DPC</strong> : le DPC a pour objectif de réformer, pour les personnels médicaux et paramédicaux (notamment infirmiers et aides-soignants), les dispositifs de perfectionnement des connaissances et d'évaluation des pratiques professionnelles dans le but d'améliorer la qualité et la sécurité des soins.
                            </p>

                        </article>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 center">
                        <button class="btn btn-large btn-primary" role="button"><a href="formation-dpc.html">En savoir plus</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-twitter icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Twitter Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-facebook icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Facebook Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-google-plus icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Google Plus Marketing</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="contact">
        <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1">Contactez nous</h1>
                        <small>
                            Du Lundi au Jeudi : 8h15-12h / 13h45-17h30<br />
                            Le Vendredi : 8h15-12h / 13h45-16h30<br />
                            <button class="btn btn-primary"><a href="tel:+33549283200"><span class="icon-phone"></span> 05 49 28 32 00</a></button>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required" placeholder="Nom et prénom">
                                        </div>
                                        <!--                                        <div class="form-group">
                                                                                    <input type="text" class="form-control" required="required" placeholder="Last Name">
                                                                                </div>-->
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required" placeholder="E-mail">
                                        </div>

                                    </div>
                                    <div class="col-sm-7">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
                <div class="col-md-4">
                    <form>
                        <legend><span class="glyphicon glyphicon-globe"></span> Siège social</legend>
                        <address>
                            <strong>CERF FORMATION</strong><br>
                            7 rue du 14 Juillet<br>
                            BP 253<br>
                            79008 Niort Cédex<br>
                            France<br>
                            <abbr title="Phone">
                                P:</abbr>
                            (+33) 05 49 28 32 00
                        </address>
                        <address>
                            <strong>Courriel</strong><br>
                            <a href="mailto:cerf@cerf.fr">cerf@cerf.fr</a>
                        </address>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!--    <section id="recent-works" title="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Latest Project</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="../assets/images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="../assets/images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="../assets/images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>/.row
                            </div>/.item
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="../assets/images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="../assets/images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="../assets/images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>/.item
                        </div>
                    </div>
                </div>
            </div>/.row
        </div>
    </section>/#recent-works-->

<!--    <section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>What our clients say</h2>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>/#testimonial-->

<!--    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <p>Pellentesque habitant morbi tristique senectus.</p>
                </div>/.col-md-3

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">Company Overview</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Our Awesome Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                            <li><a href="#">Conatct Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>/.col-md-3

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="../assets/images/blog/thumb1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="../assets/images/blog/thumb2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="../assets/images/blog/thumb3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 11 Jul 2013</small>
                            </div>
                        </div>
                    </div>  
                </div>/.col-md-3

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <h4>Newsletter</h4>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div> /.col-md-3
            </div>
        </div>
    </section>/#bottom-->

    <footer class="midnight-blue">
        <section id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer-left center">
                            <span title="site compatible smartphone" class="icon-mobile-phone"></span> 
                            <span title="site compatible tablette" class="icon-tablet"></span> 
                            <span title="site compatible Firefox/Chrome/Safari/Internet Explorer 9+" class="icon-desktop"></span>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="center">
                            <address>
                                CERF Formation S.A.S. | Formations inter et intra-établissements<br />
                                7 rue du 14 Juillet - 79008 Niort Cédex<br />
                                <span class="icon-phone"></span> 05 49 28 32 00 | <span class="icon-print"></span> 05 49 28 32 02
                            </address>
                            <div class="social">
                                <a href="#" title="CERF Formation sur Twitter"><span class="icon-twitter"></span></a>
                                <a href="#" title="CERF Formation sur LinkedIn"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a href="#">Mentions légales</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                        </ul><br/>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--/#footer-->

    <!--JS-->
    <!--Jquery scripts-->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.prettyPhoto.js"></script>
    <script src="../assets/js/jquery.hover.delay.js"></script>
    <script src="../assets/js/jquery.dotdotdot.min.js"></script>
    <script src="../assets/js/screenfull.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/jquery.fullScreenModal.js"></script>
    <script src="../assets/js/jQueryRotateCompressed.js"></script>

    <script src="../assets/js/AddToHomescreen/src/addtohomescreen.min.js"></script>
    <!--/Jquery scripts-->
    <script src="../assets/js/main.js"></script>
    <script type="text/javascript" src="../assets/js/functions.js"></script>

    <!--Gmap js-->
    <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
    <script src="../assets/js/jquery.maplace-0.1.3.js"></script>

    <script type="text/javascript">
        var controller = 'c_loginform/';
        var base_url = '<?php 
        echo site_url(); //you have to load the "url_helper" to use this function  
        ?>';
        /* Fullscreen login form */
        $("#connect").fullScreenModal({
            backgroundImage: "../assets/images/loginPict/6.jpg",
            offsetMarginTop: 0,
            direction: "left",
            closeTag: '<a class="loginFormLink" href="javascript:void(0);">Fermer</a>',
            ajaxContent: base_url+controller
                    //callbackOpen: function(){alert('callback1');},
                    //callbackClosed: function(){alert('callback2');}
        });
    </script>

    <!--/JS-->
</body>
</html>
<!-- @todo
- bug need twice touchstart on tiles
- invite "add to homesceen" on mobile devices
-->