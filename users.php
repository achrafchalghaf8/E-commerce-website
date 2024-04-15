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
require_once('utilisateur.class.php');
$idu=$_SESSION["id"];
$us=new Utilisateur();
$res=$us->listeutilisateur();






?>

<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation top-->
        <!-- navigation top -->

        <!-- navigation left -->
        <nav class="navigation scroll-bar">
            <div class="container ps-0 pe-0">
                <div class="nav-content">
                    <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                        <div class="nav-caption fw-600 font-xssss text-grey-500"><span>Dashboard</div>
                        <ul class="mb-1 top-content">
                            <li class="logo d-none d-xl-block d-lg-block"></li>

                            <li><a href="javascript:history.back()" class="nav-content-bttn open-font" ><i class="feather-zap btn-round-md bg-mini-gradiant me-3"></i><span>Products</span></a></li>
                            <li><a href="#" class="nav-content-bttn open-font"><i class="feather-user btn-round-md bg-primary-gradiant me-3"></i><span>Users</span></a></li>   
                     
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
        <div class="main-content right-chat-active">
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left pe-0">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card shadow-xss w-100 d-block d-flex border-0 p-4 mb-3 bg-grey">
                                <div class="card-body d-flex align-items-center p-0">
                                    <h2 class="fw-700 mb-0 mt-0 font-md text-grey-900">Users</h2>
                                    <div class="search-form-2 ms-auto">
                                        <a  class="fw-700 text-white font-xssss text-uppercase ls-3 lh-32 rounded-3 mt-3 text-center d-inline-block p-2 bg-current w150" href="ajouterUser.php" > Add User</a>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="row ps-2 pe-1">
                        <?php foreach ($res as $row){?>
                                <div class="col-md-4 col-sm-6 pe-2 ps-2">
                                    <div class="card d-block border-0 shadow-xss rounded-3 overflow-hidden mb-3">
                                        <div class="card-body d-block w-100 p-4 text-center">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w90 z-index-1"><img src="images/<?php echo $row['photo']?>" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 font-xss mt-3 mb-0"><?php echo $row['prenom']?> <?php echo $row['nom']?> </h4>
                                            <p class="fw-500 font-xssss text-grey-500 mt-0 mb-3"><?php echo $row['email']?></p>
                                            <div>
                                            <a  href="modifieruser.php?id=<?= $row['id'];?>"  class="mt-4 p-0 btn p-2 lh-24 w120 ms-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">Modifier</a> 
                                            <a href="supprimerU.php?id=<?= $row['id'];?>" class="mt-4 p-0 btn p-2 lh-24 w120 ms-1 ls-3 d-inline-block rounded-xl bg-danger font-xsssss fw-700 ls-lg text-white">Supprimer</a> 
                                        </div>
                                    </div>
                                </div> 
                            </div><?php }?>
                        </div>     
                     </div>               
                </div>
            </div>
                 
            </div>            
        </div>
        
        <!-- main content -->

       
                <!-- loader wrapper -->

                
        <!-- right chat -->
        

    </div> 

    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>