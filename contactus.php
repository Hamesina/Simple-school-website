<?php 
include "DB_connectio.php";
include "data/setting.php";
$setting = getSetting($conn);

if ($setting != 0) {

 ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel=" stylesheet" href="style6.css" type="text/css" />
</head>
<body>
    <!--header section-->
    <header class="header">
        <section class=" flex">
            <a href=" #home" class=" logo"> <img src="z.png" width="180" height="77" /> </a>
            <nav class=" navba">
                <a href="edhome.html">Home</a>
                <a href="edabout.html">About</a>
                <a href="edcourse.html">Courses</a>
                <a href="contactus.php">Contact</a>
                <a href="login.php">Sign In</a>
                <!--<a href=" #home">contacts</a>-->
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>

        </section>

    </header>
    <!--header section ends-->

    <!-- contact section begins babyyyy-->
    <section class="contact" id="contact">
        <h3 class="heading"><span>CONTACT</span> Us</h3>
        <div class="row">
            <div class="image">
                <img src= "imgs/undraw_emails_re_cqen.svg" alt="" />
            </div>
            <form action="req/contact.php" method="post">
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
                <span>Your Name</span><br />
                <input type="text" required placeholder="Full name" class="box" maxlength="50" name="full_name" /><br />
                <span>Your Email</span><br />
                <input type="text" required placeholder="Email" class="box" maxlength="50" name="email" /><br />
                <span> Feedback</span><br />
                <textarea name = "message" rows="5" class="box"></textarea><br />
                

                <input type="submit" value="send message" class="btn-c" name="send" />

            </form>
        </div>
    </section>











    <!--footer section bgins-->
    <footer>
        <div class=" row-f">
            <div class=" col-f">
                <img src="z.png" width="150" height="64" class="logo-f" />
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









    <!-- home section ends -->
    <!--js link-->
    <script src="Script1.js"></script>
</body>
</html>
<?php }else {
    header("Location: login.php");
    exit;
}  ?>