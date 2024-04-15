
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
require('headerA.php');
$idu=$_SESSION["id"];
if(isset($_SESSION['admin'])) {
    echo "hola";
    $username = $_SESSION["admin"]; // Récupère le nom de l'administrateur depuis la session
    echo "Bonjour, $username !"; 
} else {
    header("location:404.html");
}
require('utilisateur.class.php');

require_once('produit.class.php');
$pd=new Produit();
$res=$pd->listeproduit();

?>

<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

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
                            <li><a href="users.php" class="nav-content-bttn open-font"><i class="feather-user btn-round-md bg-primary-gradiant me-3"></i><span>Users</span></a></li>   
                     
                        </ul>
                    </div>

                    
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                        <ul class="mb-1">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="modifieruser.php?id=<?= $idu ?>" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings me-3 text-grey-500"></i><span>Settings</span></a></li>

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
                    <a   href="modifproduit.php?id=<?= $row['id'];?>"  class="btn btn-success">Modifier</a>
                    <a  onclick="return confirm('etes vous  sur de supprimer ce produit ?')"    href="delete.php?id=<?= $row['id'];?>" class="btn btn-danger" >Supprimer</a>
                </div>
                
            </div>
        </div>
        
    <?php endforeach; ?>
    
</div>
<div class="col-lg-12 mt-3 mb-5 text-center"><a href="account-information.php" class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150">Ajouter</a></div>



              
        <!-- main content -->


        
        <!-- right chat -->
       

    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>



</html>

