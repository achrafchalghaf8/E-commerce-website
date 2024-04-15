    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Eshop </title>

        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/feather.css">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <?php 




require('headerA.php');
    require_once('produit.class.php');
    $idu=$_SESSION["id"];
    $us = new Produit();
    $id= $_GET['id'];
    $res = $us->getprod($_GET['id']);
    $data = $res->fetchAll(PDO::FETCH_ASSOC);

    $nom = $data[0]["nom"];
    $descp = $data[0]["descp"];
    $prix= $data[0]["prix"];
    $id= $_GET['id'];
    $imagep = $data[0]["imagep"];

    /* récupération des données du formulaire */


    ?>





    ?>
    <body class="color-theme-blue mont-font">

        <div class="preloader"></div>

        
        <div class="main-wrapper">

            <!-- navigation top-->
            <!-- navigation left -->
            <nav class="navigation scroll-bar">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Dashboard</div>
                        <ul class="mb-1 top-content">
                            <li class="logo d-none d-xl-block d-lg-block"></li>

                            <li><a href="shopAdmin.php" class="nav-content-bttn open-font" ><i class="feather-zap btn-round-md bg-mini-gradiant me-3"></i><span>Products</span></a></li>
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
            <div class="main-content bg-lightblue theme-dark-bg right-chat-active">
            <form action="modifier.php" method="post" enctype="multipart/form-data">
                <div class="middle-sidebar-bottom">
                    <div class="middle-sidebar-left">
                        <div class="middle-wrap">
                            <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            
                            
                            
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                    <a href="default-settings.html" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                    <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Modifier votre Produit</h4>
                                </div>
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 text-center">
                                        <figure class="avatar ms-auto me-auto mb-0 mt-2 w180"><img src="images/<?php echo $imagep ?>" alt="image" class="shadow-sm rounded-3 w-100"></figure>
                                        <h2 class="fw-700 font-sm text-grey-900 mt-3"><?php echo $nom ?></h2>
                                        <h4 class="text-grey-500 fw-500 mb-3 font-xsss mb-4"><?php echo $prix ?> TND</h4>    
                                        <!-- <a href="#" class="p-3 alert-primary text-primary font-xsss fw-500 mt-2 rounded-3">Upload New Photo</a> -->
                                    </div>
                                </div>
                                
                                <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Id</label>
                                                <input type="text" value="<?php echo $id ?>" name="id" class="form-control" readonly>
                                            </div>        
                                        </div>


                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Nom</label>
                                                <input type="text" value="<?php echo $nom ?>" name="nom" class="form-control">
                                            </div>        
                                        </div>

                                        
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="mont-font fw-600 font-xsss">Description</label>
                                        <input type="textarea" class="form-control mb-0 p-3 h100 bg-greylight lh-16" value="<?php echo $descp ?>" name="descp" id="descp" rows="5"  >
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Prix </label> en  TND
                                                <input type="number" name="prix" value="<?php echo $prix ?>" class="form-control"> 
                                            </div>        
                                        </div>

                                        

                                        <div class="form-group icon-input mb-3">
                                    <input type="file" name="imagep" id="imagep" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="image">
                                    <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                                        </div>

                                        

                                        <div class="col-lg-12">
                                            <input type="submit" value="save" class="bg-current  text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block text-center ">
                                        </div>
                                    </div>

                                
                                </div>
                            </div>
                            <!-- <div class="card w-100 border-0 p-2"></div> -->
                        </div>
                    </div>
                    
                </div>            
            </form> </div>
            <!-- main content -->

                    <!-- right chat -->
            <div class="right-chat nav-wrap mt-2 right-scroll-bar">
                <div class="middle-sidebar-right-content bg-white shadow-xss rounded-xxl">

                    <!-- loader wrapper -->
                    <div class="preloader-wrap p-3">
                        <div class="box shimmer">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                        <div class="box shimmer mb-3">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                        <div class="box shimmer">
                            <div class="lines">
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                                <div class="line s_shimmer"></div>
                            </div>
                        </div>
                    </div>
                    <!-- loader wrapper -->

                    

                </div>
            </div>

            
            <!-- right chat -->
            
            <div class="app-footer border-0 shadow-lg bg-primary-gradiant">
                <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
                <a href="default-video.html" class="nav-content-bttn"><i class="feather-package"></i></a>
                <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
                <a href="shop-2.html" class="nav-content-bttn"><i class="feather-layers"></i></a>
                <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
            </div>

            <div class="app-header-search">
                <form class="search-form">
                    <div class="form-group searchbox mb-0 border-0 p-1">
                        <input type="text" class="form-control border-0" placeholder="Search...">
                        <i class="input-icon">
                            <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                        </i>
                        <a href="#" class="ms-1 mt-1 d-inline-block close searchbox-close">
                            <i class="ti-close font-xs"></i>
                        </a>
                    </div>
                </form>
            </div>

        </div> 


        <script src="js/plugin.js"></script>
        <script src="js/scripts.js"></script>
        
    </body>

    </html>