<?php 
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Admin') {
      
       include "../DB_connectio.php";


       $fname = '';
       $lname = '';
       $uname = '';
       $address = '';
       $en = '';
       $pn = '';
       $qf = '';
       $email = '';

       if (isset($_GET['fname'])) $fname = $_GET['fname'];
       if (isset($_GET['lname'])) $lname = $_GET['lname'];
       if (isset($_GET['uname'])) $uname = $_GET['uname'];
       if (isset($_GET['address'])) $address = $_GET['address'];
       if (isset($_GET['en'])) $en = $_GET['en'];
       if (isset($_GET['pn'])) $pn = $_GET['pn'];
       if (isset($_GET['qf'])) $qf = $_GET['qf'];
       if (isset($_GET['email'])) $email = $_GET['email'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>Admin - Add Registrar Office</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        //include "inc/navbar.php";
     ?>
     <div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">SSC<span class="d-none d-sm-inline"> Page</span></span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link px-sm-0 px-2">
                            <i class="fa fa-home" aria-hidden="true"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="teacher.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-chalkboard-user"></i><span class="ms-1 d-none d-sm-inline">Teachers</span> </a>
                    </li>
                    <li>
                        <a href="student.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-graduation-cap"></i></i><span class="ms-1 d-none d-sm-inline">Students</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-laptop-file"></i><span class="ms-1 d-none d-sm-inline">Class</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="class.php">Class</a></li>
                            <li><a class="dropdown-item" href="section.php">Section</a></li>
                            <li><a class="dropdown-item" href="#">Schedule</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="registrar-office.php">Registrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="course.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-book"></i></i><span class="ms-1 d-none d-sm-inline">Course</span></a>
                    </li>
                    <li>
                        <a href="message.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-message"></i></i><span class="ms-1 d-none d-sm-inline">Message</span> </a>
                    </li>
                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?$fname?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
                <div class="col pt-4">
                    <h3>Welcome to your page <?$fname?></h3>
                    <p class="lead">An example multi-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single menu is be open at a time.</p>
                    <hr />
     <div class="container mt-5">
        <a href="registrar-office.php"
           class="btn btn-dark">Go Back</a>

        <form method="post"
              class="shadow p-3 mt-5 form-w" 
              action="req/registrar-office-add.php">
        <h3>Add New Registrar Office User</h3><hr>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
           <?=$_GET['error']?>
          </div>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
          <div class="alert alert-success" role="alert">
           <?=$_GET['success']?>
          </div>
        <?php } ?>
        <div class="mb-3">
          <label class="form-label">First name</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$fname?>" 
                 name="fname">
        </div>
        <div class="mb-3">
          <label class="form-label">Last name</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$lname?>"
                 name="lname">
        </div>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$uname?>"
                 name="username">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group mb-3">
              <input type="text" 
                     class="form-control"
                     name="pass"
                     id="passInput">
              <button class="btn btn-secondary"
                      id="gBtn">
                      Random</button>
          </div>
          
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$address?>"
                 name="address">
        </div>
        <div class="mb-3">
          <label class="form-label">employee Number</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$en?>"
                 name="employee_number">
        </div>
        <div class="mb-3">
          <label class="form-label">Phone Number</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$pn?>"
                 name="phone_number">
        </div>
        <div class="mb-3">
          <label class="form-label">Qualification</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$qf?>"
                 name="qualification">
        </div>
        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="text" 
                 class="form-control"
                 value="<?=$email?>"
                 name="email_address">
        </div>
        <div class="mb-3">
          <label class="form-label">Gender</label><br>
          <input type="radio"
                 value="Male"
                 checked 
                 name="gender"> Male
                 &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio"
                 value="Female"
                 name="gender"> Female
        </div>
        <div class="mb-3">
          <label class="form-label">Date of Birth</label>
          <input type="date" 
                 class="form-control"
                 value=""
                 name="date_of_birth">
        </div>
      <button type="submit" class="btn btn-primary">Add</button>
     </form>
     </div>
     </div></main></div></div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(7) a").addClass('active');
        });

        function makePass(length) {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for ( var i = 0; i < length; i++ ) {
              result += characters.charAt(Math.floor(Math.random() * 
         charactersLength));

           }
           var passInput = document.getElementById('passInput');
           passInput.value = result;
        }

        var gBtn = document.getElementById('gBtn');
        gBtn.addEventListener('click', function(e){
          e.preventDefault();
          makePass(4);
        });
    </script>

</body>
</html>
<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
    header("Location: ../login.php");
    exit;
} 

?>