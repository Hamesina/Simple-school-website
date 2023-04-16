<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['role'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Y School</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="StyleSheet1.css">

</head>
<body class="body-home">
    <nav>
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="imgs\g2.png">
                    <span class="nav-item"> SSC</span></a>
                </li><hr>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li class = "logout"><a href="#">
                    <i class = "fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
            </ul>
        </nav>
        <div class = "main-item">
<body class="body-home">
      <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-450 p-3 text-center bg-light">
            <small>Role: 
              <b> 
                <?php 
                  if ($_SESSION['role'] == 'Admin') {
                    echo "Admin";
                  }else if ($_SESSION['role'] == 'Teacher'){
                    echo "Teacher";
                  }else {
                    echo "Student";
                  }
                ?>
              </b><br>
              <h3 class="display-4"> <?=$_SESSION['fname']?></h3>
              <a href="logout.php" class="btn btn-warning">
                Logout
              </a>
            </small>
        </div>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
<?php }else {
    header("Location: login.php");
    exit;
} ?>
        hellojkdhfeuih a;uri haruifa;uir fha;iury a;ru fha;ieruy aeuifhr;aieyfap8er7yfa;ieufh;
        
        








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>




