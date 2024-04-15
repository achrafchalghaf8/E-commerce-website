<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sociala - Social Network App HTML Template </title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/feather.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>
<?php

require_once "utilisateur.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $et = new Utilisateur();

    // Check if all required fields are set
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_FILES['photo'])&& isset($_POST['role'])) {
        $et->nom = $_POST['nom'];
        $et->prenom = $_POST['prenom'];
        $et->role = $_POST['role'];
        $et->email = $_POST['email'];
        $et->pwd = $_POST['pwd'];
        $et->photo = $_FILES['photo']['name'];
        $fichierTemp = $_FILES['photo']['tmp_name'];

        // Move the uploaded file to the desired location
        $uploadDirectory = 'images/';
        if (move_uploaded_file($fichierTemp, $uploadDirectory . $_FILES['photo']['name'])) {
            // If file upload is successful, insert user into the database
            $et->insertUser();
            header('Location: users.php');
            exit; // Stop further execution
        } else {
            // Handle file upload failure
            echo "File upload failed!";
        }
    } else {
        // Handle missing required fields
        echo "All fields are required!";
    }
}

?>

<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

        <!-- navigation top-->
        
        <!-- navigation left -->
        <!-- main content -->
        <div class="main-content bg-lightblue theme-dark-bg right-chat-active">
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                <a href="default-settings.html" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2"> Ajouter user </h4>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                            

                            <form action="ajouterUser.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Nom</label>
                                            <input type="text" name="nom" id="nom" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">prenom</label>
                                            <input type="text" name="prenom" id="prenom" class="form-control">
                                        </div>        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Email</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">mot de pass</label>
                                            <input type="text" name="pwd" id="pwd"class="form-control">
                                        </div>        
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                            <select name="role" id="role"> 
                                            <option value="user">Utilisateur</option>
                                            <option value="admin">Admin</option>
  
                                            </select>
                                            </div>        
                                        </div>

                                

                                   
                                </div>

                                <div class="row">
                                   

                                <div class="form-group icon-input mb-3">
                                <input type="file" name="photo" id="photo" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="photo">
                                <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                            </div>

                                    

                                    
                                </div>
                                <div class="form-group mb-1"><input type="submit"  class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 "value="Ajouter"></div>
                            </form>
                            </div>
                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>
                 
            </div>            
        </div>
        <!-- main content -->

           


    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>