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
$role= $_SESSION["role"]; // ou false si l'utilisateur n'est pas administrateur

if ($role=='admin') {
    require('headerA.php'); // Inclure l'en-tête pour l'administrateur
} else {
    require('headerU.php'); // Inclure l'en-tête pour l'utilisateur régulier
}

  $idu=$_SESSION["id"];

 require_once('produit.class.php');

 $produit = new Produit();
 $id = $_GET['id'];

 
 echo  $id ;
 $res = $produit->getprod($id);
 if ($row = $res->fetch()) {
 
 ?>
<body class="color-theme-blue mont-font">

<div class="preloader"></div>


<div class="main-wrapper">

    <!-- navigation top-->
    <div class="nav-header bg-white shadow-xs border-0">
        <div class="nav-top">
            <a href="default.html"><i class="feather-zap text-success display1-size me-2 ms-0"></i><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">Sociala. </span> </a>
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
        <a href="default.html" class="p-2 text-center ms-3 menu-icon center-menu-icon"><i class="feather-home font-lg alert-primary btn-round-lg theme-dark-bg text-current "></i></a>
        <a href="default-storie.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i class="feather-zap font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="default-video.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i class="feather-video font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="default-group.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i class="feather-user font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>
        <a href="shop-2.html" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i class="feather-shopping-bag font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500 "></i></a>

        <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="dot-count bg-warning"></span><i class="feather-bell font-xl text-current"></i></a>
        
        <a href="#" class="p-2 text-center ms-3 menu-icon chat-active-btn"><i class="feather-message-square font-xl text-current"></i></a>
        

        <a href="default-settings.html" class="p-0 ms-3 menu-icon"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w40 mt--1"></a>
        
    </div>
    <!-- navigation top -->

    <!-- navigation left -->
    <nav class="navigation scroll-bar">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>
                        <ul class="mb-1 top-content">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="javascript:history.back()" class="nav-content-bttn open-font" ><i class="feather-zap btn-round-md bg-mini-gradiant me-3"></i><span>Products</span></a></li>
                            <li><a href="listecommande.php?id=<?= $idu ?>" class="nav-content-bttn open-font" ><i class="feather-award btn-round-md bg-red-gradiant me-3"></i><span>commande</span></a></li>
                      
                        </ul>
                    </div>

                    
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                        <ul class="mb-1">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="default-settings.html" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings me-3 text-grey-500"></i><span>Settings</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    
        <!-- navigation left -->
        <!-- main content -->
        <div class="main-content right-chat-active">
 
        <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xl-12 mt-3">
                            <div class="row">
                                <div class="col-lg-5 offset-lg-1 mb-4">
                                    <div class="product-slider-3 owl-carousel owl-theme dot-none owl-nav-link edge-link">
                                        
                                        <div class="owl-items pt-lg--10 pb-lg--10 bg-white rounded-3"><img src="images/<?php echo $row['imagep']?>" width="300" height="300"></div>
                                       
                                    </div>                        
                                </div>
                                <div class="col-lg-6  col-md-12 pad-top-lg-200 pad-bottom-lg-100 pad-top-100 pad-bottom-75 ps-md--5">
                                    <h4 class="text-danger font-xssss fw-700 ls-2">Solde</h4>
                                    <h2 class="fw-700 text-grey-900 display1-size lh-3 porduct-title display2-md-size"> <?php echo $row['nom']?></h2>
                                    <div class="star d-block w-100 text-left">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star.png" alt="star" class="w15 float-left">
                                        <img src="images/star-disable.png" alt="star" class="w15 float-left me-2">
                                        <img src="images/star-disable.png" alt="star" class="w15 float-left me-2">

                                    </div>
                                    <p class="review-link font-xssss fw-500 text-grey-500 lh-3"> 8 customer review</p>
                                    <div class="clearfix"></div>
                                    <ul class="product-feature-list mt-5">
                                        <li class="w-50 lh-32 font-xsss text-grey-500 fw-500 float-left"><b class="text-grey-900"> description : <?php echo $row['descp']?> </b></li>
                                       
                                    </ul>

                                    <h6 class="display2-size fw-700 text-current ls-2 mb-2"><span class="font-xl"><br></span><?php echo $row['prix']?> TND<span class="font-xs text-grey-500" style="text-decoration: line-through;"><br> 699 TND</span></h6>
                                    <div class="timer bg-white mt-2 mb-0 w350 rounded-3"><div class="time-count"> </div> </div>
                                    <div class="clearfix"></div>
                                    <form action="#" class="form--action mt-4 mb-3">
                                        <div class="product-action flex-row align-items-center">
                                            
                                            <?php if ($role=='user') {
echo '<a href="commande.php?id=' . $id . '" class="add-to-cart bg-dark text-white fw-700 ps-lg-5 pe-lg-5 text-uppercase font-xssss float-left border-dark border rounded-3 border-size-md d-inline-block mt-0 p-3 text-center ls-3">Commander</a>';
 
                                                }
                                                            ?>
               
                                        </div>  
                                    </form>
                                    
                                </div>
                            </div> 
                        </div>               
                    </div>
                </div>
                 
            </div>            
        </div> <?php
} // Fin du if
?>
       <!-- main content -->

        <!-- right chat -->
        
    </div>


    <script src="js/plugin.js"></script>

    <script src="js/countdown.js"></script>
    <script src="js/scripts.js"></script>


    <script>
        $(document).ready(function(){
          var owl = $('.product-slider-3');
            owl.owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                items: 1,
                center: true,
                nav: true,
                thumbs: true,
                thumbImage: false,
                thumbsPrerendered: true,
                thumbContainerClass: 'owl-thumbs',
                thumbItemClass: 'owl-thumb-item',
                navText: ["<i class='ti-angle-left icon-nav'></i>","<i class='ti-angle-right icon-nav'></i>"],
            });
        });
    </script>  

    <script>
        
    </script>
    
</body>
    
</html>