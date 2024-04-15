
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elomoas - Online Course and LMS HTML Template</title>

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
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_FILES['photo'])) {
        $et->nom = $_POST['nom'];
        $et->prenom = $_POST['prenom'];
        $et->email = $_POST['email'];
        $et->pwd = $_POST['pwd'];
        $et->photo = $_FILES['photo']['name'];
        $fichierTemp = $_FILES['photo']['tmp_name'];

        // Move the uploaded file to the desired location
        $uploadDirectory = 'images/';
        if (move_uploaded_file($fichierTemp, $uploadDirectory . $_FILES['photo']['name'])) {
            // If file upload is successful, insert user into the database
            $et->insertUser();
            header('Location: login.php');
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

<body class="color-theme-blue">

    <div class="preloader"></div>

    <div class="main-wrap">

        <div class="nav-header bg-transparent shadow-none border-0">
            <div class="nav-top w-100">
                <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
                <button class="nav-menu me-0 ms-2"></button>


            </div>
            
            
        </div>

        <div class="row">
            <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url(images/6666912.jpg);"></div>
            <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
                <div class="card shadow-none border-0 ms-auto me-auto login-card">
                    <div class="card-body rounded-0 text-left">
                        <h2 class="fw-700 display1-size display2-md-size mb-4">Create <br>your account</h2>                        
                        <form action="register.php" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-user text-grey-500 pe-0"></i>
                                <input type="text" name="nom" id="nom" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your  first Name"required>                        
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-user text-grey-500 pe-0"></i>
                                <input type="text" name="prenom" id="prenom"class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your last name "required>                        
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-email text-grey-500 pe-0"></i>
                                <input type="email" name="email" id="email"class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your email" required>                        
                            </div>
                           
                            <div class="form-group icon-input mb-3">
                                <input type="Password"name="pwd" id="pwd" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="your Password" required>
                                <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                            </div>
                            <div class="form-group icon-input mb-3">
                                <input type="file" name="photo" id="photo" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" placeholder="photo">
                                <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                            </div>
                            
                            <div class="form-check text-left mb-3">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                <label class="form-check-label font-xsss text-grey-500" for="exampleCheck1">Accept Term and Conditions</label>
                                <!-- <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a> -->
                            </div>
                            <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1"><input type="submit"  class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 "value="register"></div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Already have account <a href="login.php" class="fw-700 ms-1">Login</a></h6>
                        </div>
                        </form>
                         
                        
                    </div>
                </div> 
            </div>
        </div>
    </div>



    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>