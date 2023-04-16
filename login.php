

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Y School</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style7.css" type="text/css">
  <link rel="icon" href="logo.png">
</head>
<body class="body-login">
  <?php
     include "header.php";
  ?>
  <section class=" abou" id=" abou">
        <div class=" row">
            <div class=" image">
                <img src="imgs/undraw_contact_us_re_4qqt.svg" />
            </div>
        <div class=" content">
          <p>
    <div class="black-fill"><br /> <br />
      <div class="d-flex justify-content-center align-items-center flex-column">
      <form class="login" 
            method="post"
            action="req/login.php">
        <h3>LOGIN</h3>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
      </div>
      <?php } ?>
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" 
               class="form-control"
               name="uname">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" 
               class="form-control"
               name="pass">
      </div>

      <div class="mb-3">
        <label class="form-label">Login As</label>
        <select class="form-control"
                name="role">
          <option value="1">Admin</option>
          <option value="2">Student</option>
          <option value="3">Teacher</option>
          <option value="4">Registrar Office</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Login</button>
      <a href="edhome.html" class="text-decoration-none">Home</a>
    </form>
    <?php
        //$pass = 123;
        //$pass = password_hash($pass, PASSWORD_DEFAULT);
        //echo $pass
        ?>
        <br /><br />
        <div class="text-center text-light">
          Copyright &copy; 2022 Y School. All rights reserved.
        </div>

      </div>
    </div>
  </p>
</div>
</div>
</section>

<footer>
        <div class=" row-f">
            <div class=" col-f">
                <img src="z.png" width="150" height="64" class="logo-f"/>
                <p>
                    A pipe is a way to create an input/output stream between two separate processes running on the same computer.
                    This structure allows information to flow from one program directly into another, and
                </p>
            </div>
            <div class=" inner">
            <div class=" col-f">
                <h3>Office</h3>
                <p> Addis Ababa, Ethiopia</p>
                <p> Menelik, 4 KIlo</p>
                <p class=" email-id"> SSCKotebe@gmail.com</p>
                <h4> +251967895409</h4>
            </div>
            <div class=" col-f">
                <h3>Links</h3>
                <ul>
                    <li><a href="edhome.html">Home</a></li>
                    <li><a href="edabout.html">About</a></li>
                    <li><a href=" home.html">Contact</a></li>
                    <li><a href=" home.html">Campus</a></li>
                    <li><a href=" home.html">Register</a></li>
                    <li><a href=" home.html">Events</a></li>
                </ul>
            </div>
            </div>
            <div class=" col-f">
                <h3> Newsletter</h3>
                <form>
                    <i class=" fa-solid fa-envelope"></i>
                    <input type="email" placeholder="yours@gmail.com" required />
                    <button type="submit"><i class=" fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fas fa-envelope"></i>
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>  
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> 
    <script src="Script1.js"></script> 
</body>
</html>
