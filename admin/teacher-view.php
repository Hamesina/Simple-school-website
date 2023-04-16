<?php 
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Admin') {
       include "../DB_connectio.php";
       include "data/teacher.php";
       include "data/subject.php";
       include "data/grade.php";
       include "data/section.php";
       include "data/class.php";

       if(isset($_GET['teacher_id'])){

       $teacher_id = $_GET['teacher_id'];

       $teacher = getTeacherById($teacher_id,$conn);    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Teachers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        //include "inc/navbar.php";
        if ($teacher != 0) {
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
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../logout.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
                <div class="col pt-4">
                    <h3>Welcome to your page <?$fname?></h3>
                    <p class="lead">Here you can view the profiles of the teachers in the system.</p>
                    <hr />
     <div class="container mt-5">
         <div class="card" style="width: 22rem;">
          <img src="../img/teacher-<?=$teacher['gender']?>.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">@<?=$teacher['username']?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">First name: <?=$teacher['fname']?></li>
            <li class="list-group-item">Last name: <?=$teacher['lname']?></li>
            <li class="list-group-item">Username: <?=$teacher['username']?></li>

            <li class="list-group-item">Employee number: <?=$teacher['employee_number']?></li>
            <li class="list-group-item">Address: <?=$teacher['address']?></li>
            <li class="list-group-item">Date of birth: <?=$teacher['date_of_birth']?></li>
            <li class="list-group-item">Phone number: <?=$teacher['phone_number']?></li>
            <li class="list-group-item">Qualification: <?=$teacher['qualification']?></li>
            <li class="list-group-item">Email address: <?=$teacher['email_address']?></li>
            <li class="list-group-item">Gender: <?=$teacher['gender']?></li>
            <li class="list-group-item">Date of joined: <?=$teacher['date_of_joined']?></li>

            <li class="list-group-item">Subject: 
                <?php 
                   $s = '';
                   $subjects = str_split(trim($teacher['subjects']));
                   foreach ($subjects as $subject) {
                      $s_temp = getSubjectById($subject, $conn);
                      if ($s_temp != 0) 
                        $s .=$s_temp['subject_code'].', ';
                   }
                   echo $s;
                ?>
            </li>
            <li class="list-group-item">Class: 
                  <?php 
                     $c = '';
                     $classes = str_split(trim($teacher['class']));

                     foreach ($classes as $class_id) {
                         $class = getClassById($class_id, $conn);

                        $c_temp = getGradeById($class['grade'], $conn);
                        $section = getSectioById($class['section'], $conn);
                        if ($c_temp != 0) 
                          $c .=$c_temp['grade_code'].'-'.
                               $c_temp['grade'].$section['section'].', ';
                     }
                     echo $c;

                  ?>
            </li>
            
          </ul>
          <div class="card-body">
            <a href="teacher.php" class="card-link">Go Back</a>
          </div>
        </div>
     </div>
     <?php 
        }else {
          header("Location: teacher.php");
          exit;
        }
     ?>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(2) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 

    }else {
        header("Location: teacher.php");
        exit;
    }

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
    header("Location: ../login.php");
    exit;
} 

?>