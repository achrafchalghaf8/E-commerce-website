
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eshop</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/feather.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>
<?php
session_start();
$id=$_SESSION['id'];
if(isset($_SESSION['user'])) {
    echo "hola";
    $username = $_SESSION["user"]; // Récupère le nom de l'administrateur depuis la session
    echo "Bonjour, $username !"; 
} else {
    header("location:404.html");
}
require('utilisateur.class.php');
require('headerU.php');
require_once('produit.class.php');
$pd=new Produit();
$res=$pd->listeproduit();

?>


<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation top-->
        <div class="nav-header bg-white shadow-xs border-0">
            <div class="nav-top">
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <button class="nav-menu me-0 ms-2"></button>
            </div>
            
            <form action="#" class="float-left header-search">
                <div class="form-group mb-0 icon-input">
                    <i class="feather-search font-sm text-grey-400"></i>
                    <input type="text" placeholder="Start typing to search.." class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
                </div>
            </form>
            <a href="default.html" class="p-2 text-center ms-3 menu-icon center-menu-icon"><i class="feather-home font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
          
            <a href="default-group.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i class="feather-user font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
            <a href="shop-2.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i class="feather-shopping-bag font-lg alert-primary btn-round-lg theme-dark-bg text-current "></i></a>

            <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="dot-count bg-warning"></span></a>
         
            

            <a href="default-settings.html" class="p-0 ms-3 menu-icon"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w40 mt--1"></a>
            
        </div>
        <!-- navigation top -->

        <!-- navigation left -->
        <nav class="navigation scroll-bar">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Dashboard</div>
                        <ul class="mb-1 top-content">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="#" class="nav-content-bttn open-font" ><i class="feather-zap btn-round-md bg-mini-gradiant me-3"></i><span>Products</span></a></li>
                            <li><a href="listecommande.php?id=<?= $id ?>" class="nav-content-bttn open-font" ><i class="feather-award btn-round-md bg-red-gradiant me-3"></i><span>commande</span></a></li>

                        </ul>
                    </div>

                    
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                        <ul class="mb-1">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="profilmodif.php?id=<?= $id ?>" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings me-3 text-grey-500"></i><span>Settings</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation left -->
        <!-- main content -->
        <div class="main-content bg-white right-chat-active theme-dark-bg">
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left pe-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                <div class="banner-wrapper bg-greylight overflow-hidden rounded-3">
                                        <div class="banner-slider owl-carousel owl-theme dot-style2 owl-nav-link link-style3 overflow-hidden">
                                             <div class="owl-items style1 d-flex align-items-center bg-lightblue" >
                                                <div class="row">
                                                    <div class="col-lg-6 p-lg-5 ps-5 pe-5 pt-4" style="padding-right: 20px !important;">
                                                        <div class="card w-100 border-0 ps-lg-5 ps-0 bg-transparent bg-transparent-card">
                                                        <h1 class="font-xssss text-danger ls-3 fw-700 ms-0 mt-4 mb-3">82.000 TND</h1>
                                                            <h2 class="fw-300 display2-size display2-md-size lh-2 text-grey-900"> Pack  <br> <b class="fw-700">Gaming</b></h2>
                                                            <p class="fw-500 text-grey-500 lh-26 font-xssss pe-lg-5">Ensemble pour gamer Spirit of Gamer PRO-MK5 avec rétroéclairage RGB - clavier filaire semi-mécanique (AZERTY Français), souris filaire optique 6400 dpi, 7 boutons et tapis de souris</p>
                                                            <a href="#" class="fw-700 text-white rounded-xl bg-primary-gradiant font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">Shop Now</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6"><img src="images/pack gaiming.jpg" alt="image" class="img-fluid p-md-5 p-4"></div>
                                                </div>
                                            </div>
                                            <div class="owl-items style1 d-flex align-items-center bg-cyan" >
                                                <div class="row">
                                                    <div class="col-lg-6 p-lg-5 ps-5 pe-5 pt-4" style="padding-right: 20px !important;">
                                                        <div class="card w-100 border-0 ps-lg-5 ps-0 bg-transparent bg-transparent-card">
                                                            <h4 class="font-xssss text-danger ls-3 fw-700 ms-0 mt-4 mb-3">99.000 TND</h4>
                                                            <h2 class="fw-300 display2-size display2-md-size lh-2 text-grey-900">Pack <br> <b class="fw-700">Photographie </b></h2>
                                                            <p class="fw-500 text-grey-100 lh-26 font-xssss pe-lg-5">Parfait pour prendre des photos lors d'une fête d'anniversaire, d'un dîner en famille, d'une fête d'entreprise, d'un camping ou d'une visite. Seulement 0,58 kg, super léger à transporter Pieds de colonne à 3 sections avec verrous à levier à dégagement rapide vous permettant d'ajuster la hauteur de travail de 41 cm à 136 cm en quelques secondes, il est rapide à installer / démonter </p>
                                                            <a href="#" class="fw-700 text-grey-900 rounded-xl bg-white font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">Shop Now</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6"><img src="images/photog.jpg" alt="image" class="img-fluid p-md-5 p-4"></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            
                                                         
<div class="row">
    <?php foreach ($res as $row): ?>
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 mt-4">
                <a href="single-product.php?id=<?= $row['id']; ?>"></a>
                <div class="card-image p-0 text-center bg-greylight rounded-3 mb-2">
                    <a href="single-product.php?id=<?= $row['id']; ?>"></a>
                    <img src="images/<?php echo $row['imagep'] ?>" width="300" height="300">
                </div>
                <div class="card-body p-0 text-center">
                    <div class="star d-block text-left mt-0 text-center">
                    <img src="images/star.png" alt="star" class="w15">
                                                <img src="images/star.png" alt="star" class="w15">
                                                <img src="images/star.png" alt="star" class="w15">
                                                <img src="images/star.png" alt="star" class="w15">
                                                <img src="images/star-disable.png" alt="star" class="w15 me-1 me-2">
                    </div>
                    <h2 class="mt-1 mb-1"><a href="single-product.php?id=<?= $row['id']; ?>" class="text-black fw-700 font-xsss text-dark lh-26"><?php echo $row['nom'] ?></a></h2>
                    <h3 class="font-xsss fw-600 text-grey-500 ls-2"><?php echo $row['descp'] ?> </h3>
                    <h6 class="font-xsss fw-600 text-grey-500 ls-2"><?php echo $row['prix'] ?> TND</h6>
                    <a   href="commande.php?id=<?= $row['id']; ?>"  class="fw-700 text-white rounded-xl bg-primary-gradiant font-xsssss text-uppercase ls-3 lh-30 mt-0 text-center d-inline-block p-2 w150">commander</a>
                </div>
                
            </div>
        </div>
        
    <?php endforeach; ?>
    
</div>


                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                 
            </div>            
        </div>
        <!-- main content -->

        <!-- right chat -->
        


    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>