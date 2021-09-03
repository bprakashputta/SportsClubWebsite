<?php 

    require_once "pdo.php";

// mysql_connect($host,$user,$password);
// mysql_select_db($db);

$failure=false;

if(isset($_POST['username']))
{
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = $pdo->query("SELECT * FROM sportsclub.loginform WHERE Username ='".$uname."' AND Password ='".$password."' LIMIT 1");
    $result =   $sql->fetch(PDO::FETCH_ASSOC);

    if($result==TRUE)
    {
        header("Location: admin/index.php?name=".urlencode($_POST['username']));
        return;
    }
    else{
        $failure = "Incorrect Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="css/login_styles.css">
    <title>SportsClub</title>
</head>
<body>
<header>
    <!-- style="background: url('img/back.jpg')no-repeat; width:100%;" -->
        <div class="w3-container">
            <nav class="w3-panel w3-metro-white">  
                <ul class="navbar-links" style="text-align: center;">
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="news.php">News</a></li>
                    <li ><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li ><a href="about.php">About</a></li>
                    <li ><a href="contact.php">Contact</a></li>
                    <li><a href="https://www.iiitm.ac.in/index.php/en/">IIITM Website</a></li>                    
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>       

    <main class="container">
        <div class="row login-card">
            <h4>Login</h4>
            <div>
                <form method="POST">
                    <div>
                        <label>username :    </label>
                        <input type="text" size="40" placeholder="username" name="username"><br>
                    </div>
                    <div>
                        <label>password  : </label>
                        <input type="password" size="40" placeholder="****" name="password">
                    </div>
                    <?php
                        echo($failure);
                    ?>
                    <div>
                        <input type="submit" value="Log In">
                        <input type="submit" name="cancel" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </main>

<!-- Footer -->
<footer class="footer" style="background: #706e6e">
        <div class="container-fluid">
            <div class="foo-det row">
                <section class="col col col-sm-3 col-md-3">
                    <h2>Connect With Us</h2>
                    <p>
                    ABV-Indian Institute of Information Technology and Management Gwalior, Morena Link Road, Gwalior, Madhya Pradesh, India,474015
                    </p>
                    <p><a style="color:#ffffff; " href="mailto: sports@iiitm.ac.in"><i class="fa fa-envelope"></i> sports@iiitm.ac.in</a></p>
                    <ul class="social-icons">
                        <li><a style="color:#ffffff; display: inline-block;" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a style="color:#ffffff; display: inline-block;" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a style="color:#ffffff; display: inline-block;" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        <li><a style="color:#ffffff; display: inline-block;" href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </section>
                <section class="col col-sm-3 col-md-3">
                    <h2>Events</h2>
                    <ul>
                        <li><a style="color:#ffffff;" href="#">URJA</a></li>
                        <li><a style="color:#ffffff;" href="#">TWARAN</a></li>
                        <li><a style="color:#ffffff;" href="#">FORMULA</a></li>
                        <li><a style="color:#ffffff;" href="#">OTHERS</a></li>
                    </ul>
                </section>
                <section class="col col-sm-6 col-md-3">
                    <h2>Navigation</h2>
                    <ul>
                        <li class="nv-item active"><a style="color:#ffffff;"  href="index.php">Home</a></li>
                        <li class="nv-item"><a style="color:#ffffff;"  href="community.php">Community</a></li>
                        <li class="nv-item"><a style="color:#ffffff;"  href="events.php">Events</a></li>
                        <li class="nv-item"><a style="color:#ffffff;"  href="about.php">About</a></li>
                        <li class="nv-item "><a style="color:#ffffff;"  href="contact.php">Contact</a></li>
                    </ul>
                </section>
                <section class="col col-sm col-md">
                    <h2>NewsLetter</h2>
                    <p>Enter your email and we'll send more notifications and latest info.</p>
                    <p>
                        <form method="post">
                            <input type="email" style="display:block; box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);" size="20" placeholder="Your Email..">
                            <input class="button btn fa-btn" type="submit" size="20" style="background: blue; color:antiquewhite" name="Subscribe" value="Subscribe">
                            <!-- <button type="submit" style="background: blue">Subscribe</button> -->
                        </form>
                    </p>
                </section>
            </div>
            <hr>  
            <div class="bottom">
                <p>© COPYRIGHT IIITM GWALIOR 2020. DEVELOPMENT BY PUTTA BHANU PRAKASH,SUMMER PROJECT</p>
            </div>        
        </div>    
    </footer>
    <!-- JavaScript -->
    <script src="js/myslideshow.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/74d41fd08b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>