<?php 
session_start();
if (isset($_SESSION['student_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Student') {
     include "../DB_connectio.php";
     include "data/score.php";
     include "data/subject.php";


     $student_id = $_SESSION['student_id'];

     $scores = getScoreById($student_id, $conn);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student - Grade Summary</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        //include "inc/navbar.php";
        if ($scores != 0) {

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
                        <a href="grade.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-laptop-file"></i><span class="ms-1 d-none d-sm-inline">Grade Summary</span> </a>
                    </li>
                    <!--<li>
                        <a href="students.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-graduation-cap"></i></i><span class="ms-1 d-none d-sm-inline">Students</span></a>
                    </li>-->
                    <!--<li class="dropdown">
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
                        <a href="student-grade.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-book"></i></i><span class="ms-1 d-none d-sm-inline">Grade</span></a>
                    </li>-->
                    <li>
                        <a href="pass.php" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-message"></i></i><span class="ms-1 d-none d-sm-inline">Change Password</span> </a>
                    </li>
                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?$fname?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        
                        <li><a class="dropdown-item" href="index.php">Profile</a></li>
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
                    <p class="lead">An example multi-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single menu is be open at a time.</p>
                    <hr />
     <div class="d-flex justify-content-center align-items-center flex-column pt-4">
         <?php  
            $check = 0;
            foreach ($scores as $score) { 
              if($score['year'] == $check){
                $check = $score['year'];
                $csubject = getSubjectById($score['subject_id'], $conn);
          ?>
          <tr>
            <td><?=$csubject['subject_code']?></th>
            <td><?=$csubject['subject']?></th>
            <td>
              <?php 
                  $total = 0;
                  $outOf = 0;
                  $results = explode(',', trim($score['results']));
                  foreach ($results as $result) {
                    
                    $temp =  explode(' ', trim($result));
                     $total +=$temp[0]; 
                     $outOf +=$temp[1]; 
               ?>
              <small class="border p-1">
                <?=$temp[0]?> / <?=$temp[1]?>
              </small>&nbsp;
            <?php } ?>
            </th>
            <th><?=$total?> / <?=$outOf?></th>
            <th><?php 
                echo gradeCalc($total);
               ?></th>
            <th><?=$score['semester']?></th>
          </tr>
        <?php }else { 
          $check = $score['year'];

          $csubject = getSubjectById($score['subject_id'], $conn);
        ?>
         <div class="table-responsive " style="width: 90%; max-width: 700px;">
              <table class="table table-bordered mt-1 mb-5 n-table">
                 <caption style="caption-side:top">Year - <?=$score['year']?> </caption>
                <thead>
                  <tr>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Results</th>
                    <th scope="col">Total</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Semester</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
            <td><?=$csubject['subject_code']?></th>
            <td><?=$csubject['subject']?></th>
            <td>
              <?php 
                  $total = 0;
                  $outOf = 0;
                  $results = explode(',', trim($score['results']));
                  foreach ($results as $result) { 
                    $temp =  explode(' ', trim($result));
                    $total += $temp[0];
                    $outOf += $temp[1];
               ?>
              <small class="border p-1">
                <?=$temp[0]?> / <?=$temp[1]?>
              </small>&nbsp;
            <?php } ?>
            </th>
            <th><?=$total?> / <?=$outOf?></th>
            <th><?php 
                echo gradeCalc($total);
               ?></th>
            <th><?=$score['semester']?></th>
          </tr>
        <?php } if($score['year'] != $check){ ?>   
        </tbody>
      </table>
   </div><br />  
  <?php  } } ?>
          
   <?php }else { ?>
     <div class="alert alert-info .w-450 m-5" 
                  role="alert">
                Empty!
     </div>
   </td></td></td></tr></tbody></table></div></td></td></td></tr></div></div></main></div></div></div>
   <?php } ?>
    
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
    header("Location: ../login.php");
    exit;
  } 
}else {
  header("Location: ../login.php");
  exit;
} 

?>