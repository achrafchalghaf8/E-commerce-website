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
require('headerU.php');
require_once('produit.class.php');
require_once('commande.class.php');
$idu=$_SESSION["id"];
$us = new Produit();
$uc = new Commande();
$id= $_GET['id'];
$res = $us->getprod($_GET['id']);
$data = $res->fetchAll(PDO::FETCH_ASSOC);
$nom = $data[0]["nom"];
$prix= $data[0]["prix"];
$id= $_GET['id'];
$imagep = $data[0]["imagep"];

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
                            <li><a href="#" class="nav-content-bttn open-font" ><i class="feather-award btn-round-md bg-red-gradiant me-3"></i><span>commande</span></a></li>
                      
                        </ul>
                    </div>

                    
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                        <ul class="mb-1">
                            <li class="logo d-none d-xl-block d-lg-block"></li>
                            <li><a href="profilmodif.php?id=<?= $idu ?>" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i class="font-sm feather-settings me-3 text-grey-500"></i><span>Settings</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation left -->
        <!-- main content -->
        <div class="main-content bg-white right-chat-active">
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xl-12 cart-wrapper mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="card p-md-5 p-4 bg-primary-gradiant rounded-3 shadow-xss bg-pattern border-0 overflow-hidden">
                                        <div class="bg-pattern-div"></div>
                                        <h2 class="display2-size display2-md-size fw-700 text-white mb-0 mt-0">Commande <span class="fw-700 ls-3 text-grey-200 font-xsssss mt-2 d-block">4 PRODUCT FOUND</span></h2>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-8 mb-3">
                                    <div class="table-content table-responsive"> 
                                        <form action="insertcommande.php?id=<?= $id ?>" method="post"  onsubmit="return calculateTotal()" >
                                        <table class="table text-center">
                                            <thead class="bg-greyblue rounded-3">
                                                <tr>
                                                    <th class="border-0 p-4">&nbsp;</th>
                                                    <th class="border-0 p-4 text-left">Product</th>
                                                    <th class="border-0 p-4">Price</th>
                                                    <th class="border-0 p-4">Quantity</th>
                                                    <th class="border-0 p-4">Total</th>
                                                    <th class="border-0 p-4">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    <tr>
        <td class="product-thumbnail text-left ps-0">
            <img src="images/<?php echo htmlspecialchars($imagep); ?>" alt="Product Thumbnail" class="w75 rounded-3">
        </td>
        <td class="product-headline text-left wide-column">
            <h3>
                <input type="text" name="nom" id="nom" class="text-grey-900 fw-600 font-xsss" value="<?php echo htmlspecialchars($nom); ?>" readonly>
            </h3>
        </td>
        <td class="product-p">
            <span class="product-price-wrapper">
                <span class="money text-grey-500 fw-600 font-xsss"><span class="font-xsssss">TND</span><?php echo htmlspecialchars($prix); ?></span>
            </span>
        </td>
        <td class="product-quantity">
            <div class="quantity">
                <input type="number" name="quantite" id="quantite" class="quantity-input open-font fw-600" min="1">
            </div>
        </td> 
        <td class="product-total-price">
            <input type="text" name="prix_total" id="prix_total" class="total-price-input" >
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <button type="submit" class="update-cart bg-dark float-right text-white fw-600 text-uppercase font-xssss border-dark border rounded-3 border-size-md d-inline-block w175 p-3 text-center ls-3">Commander</button>
        </td>
    </tr>
</tbody>

                                        </table> </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>               
                    </div>
                </div>
                 
            </div>            
        </div>

      


    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    


    <script>
function calculateTotal() {
    // Récupération de la valeur de la quantité
    var quantite = document.getElementById('quantite').value;
    
    // Récupération du prix unitaire du produit (vous pouvez obtenir cela à partir de votre PHP)
    var prixUnitaire = <?php echo $prix; ?>;
    
    // Calcul du prix total en multipliant la quantité par le prix unitaire
    var prixTotal = quantite * prixUnitaire;
    
    // Mise à jour du champ de prix total avec le résultat du calcul
    document.getElementById('prix_total').value = prixTotal;
}
</script>



</script>

    
</body>

</html>