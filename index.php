<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="css/main_styles.css">
    <title>Sportsclub</title>
    <link rel="icon" href="img/spc-logo.png" type="image/x-icon">
</head>
<body>
    <header class="cm-header-card">
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
        <!-- <div>
            <div>
                <img src="img/DSC_6933.JPG" width="100%" class="myslides" alt="">
                <img src="img/DSC_5967.JPG" width="100%" class="myslides" alt="">
                <img src="img/DSC_5996.JPG" width="100%" class="myslides" alt="">
                <img src="img/DSC_6237.JPG" width="100%" class="myslides" alt="">
            </div>
        </div>      -->
    </header>
    <!-- <hr> -->

    <!-- logo -->
    <div class="container cm-fixed-bg-logo">
        <!-- <img src="img/Saraswati-pic.png" alt=""> -->
    </div>

    <!-- <hr> -->
    <main >
        <!-- About -->
        <div class="container cm-about-content">
        <div class="cm-about-title"><h1>ABOUT</h1></div>
        <div class="cm-about-sub-title"><h3>SPORTS CLUB</h3></div>
        <div class="cm-about-text">
            <p>
                INDIAN INSTITUTE OF INFORMATION TECHNOLOGY AND MANAGEMENT(IIITM) IN GWALIOR,
                is an Autonomous Institute set by government of India,Ministry of Human Resource
                Development(MHRD) in 1997. It is an effort by MHRD towards creating 
                professionals in areas of management and information technology from the same
                institute. This Institute was created for facilitating higher education, research 
                and consultancy in areas of informtaion technology(IT) and Business Management. 
            </p>
            <p>
                The Sports Club was formed in the view that the institute should have it's separate
                sports body. Earlier it was a part of the Student Activity Council which was disbanded
                until next year. ALl the sports related events will now be happening under the sports 
                club. The first major event set to take place under the sports club is the TWARAN2K20 in
                April 2020.    
            </p>
        </div>
        <button 
            onclick="window.location.href='about.php'" 
            class="button button-fixed button-outline button-grey button-with-icon button-about" 
            style="margin-top: 30px;font-family: 'Montserrat', sans-serif;color: #9b9385;">
            LEARN MORE&nbsp;
        </button>
        <hr><hr><hr>
        <!-- Gallery -->
        <div>
            <div class="cm-gallery-card">
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="cm-gallery">
                        <a target="_blank" href="gallery.php">
                            <img src="img/DSC_5946.JPG" class="myslideshow" alt="" width="600" height="400">
                        </a>
                        <!-- <div class="desc">Add a description of the image here</div> -->
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="cm-gallery">
                            <a target="_blank" href="gallery.php">
                                <img src="img/DSC_5986.JPG" class="myslideshow" alt="" width="600" height="400">
                            </a>
                            <!-- <div class="desc">Add a description of the image here</div> -->
                        </div>
                    </div>
                </div>    
                <hr>  
                <div class="row">
                    <div class="col col-sm">            
                            <div class="cm-gallery">
                                <a target="_blank" href="gallery.php">
                                    <img src="img/DSC_6058.JPG" alt="Northern Lights" width="600" height="400">
                                </a>
                                <!-- <div class="desc">Add a description of the image here</div> -->
                            </div>
                        </div>
                </div>      
            </div>
        </div>
        <hr><hr>
        <!-- Events -->
        <div class="container cm-events-content">
            <div class="cm-events-title"><h1>Events</h1></div>
            <div class="cm-events-sub-title"><h3>SPORTS CLUB</h3></div>
            <hr>
            <div class="row text-center">
                <div class="col col-sm-5 cm-event-card urja">
                    <h1>URJA</h1>
                    <hr>
                    <p>
                        Urja is the Annual Inter-House Sports Fest of ABV-IIITM, Gwalior.It 
                        takes place in the month of November every year,to introduce the 
                        talent of freshers. It brings them out in the open competing their
                        fellow students and interacting with all the seniors. It brings entire 
                        college at one place. Students take part in various sporting events both indoor and outdoor. 
                    </p>
                    <button 
                        onclick="window.location.href='events.php'" 
                        class="button button-fixed button-outline button-grey button-with-icon button-about" 
                        style="margin-top: 30px;font-family: 'Montserrat', sans-serif;color: #9b9385;">
                        LEARN MORE&nbsp;
                    </button>
                </div>   
                <div class="col col-sm-5 cm-event-card twaran">
                    <h1>TWARAN</h1>
                    <hr>
                    <p>
                        Twaran is the Annual Inter-College Sports Fest of ABV-IIITM, Gwalior.It 
                        takes place in the month of February or April every year. Top colleges  
                        from all over the country come to take part in the cash-rich event. Twaran 
                        brings the entire college at one place. Students take part in 
                        various sporting events both indoor and outdoor. 
                    </p>
                    <button 
                        onclick="window.location.href='events.php'" 
                        class="button button-fixed button-outline button-grey button-with-icon button-about" 
                        style="margin-top: 30px;font-family: 'Montserrat', sans-serif;color: #9b9385;">
                        LEARN MORE&nbsp;
                    </button>
                </div>
            <!-- </div>
            <div class="row"> -->
                <div class="col col-sm-5 cm-event-card formula">
                    <h1>Formula</h1>
                    <hr>
                    <p>
                        Formula is the Annual intra-college Sports Fest of ABV-IIITM Gwalior. It takes 
                        place in the last week of February every year. Students form their teams and take
                        part in the event. This Post Graduation students mostly take part in Formula. And 
                        other interested students take part in it.
                    </p>
                <button 
                        onclick="window.location.href='events.php'" 
                        class="button button-fixed button-outline button-grey button-with-icon button-about" 
                        style="margin-top: 30px;font-family: 'Montserrat', sans-serif;color: #9b9385;">
                        LEARN MORE&nbsp;
                    </button>
                </div>
                <div class="col col-sm-5 cm-event-card others">
                    <h1>Others</h1>
                    <hr>
                    <p>
                        Being one of the oldest IIIT's, ABV-IIITM Gwalior gives so much importance to 
                        sports as well as studies. Not only in the college, but students also take part 
                        in fests of other IIIT's and IIT's. The College takes part in the annual Inter IIIT
                        that takes place for all the IIIT's of the country. The college also has informal events for 
                        Badminton,Table Tennis, Volley ball,Chess.  
                    </p>
                    <button 
                        onclick="window.location.href='events.php'" 
                        class="button button-fixed button-outline button-grey button-with-icon button-about" 
                        style="margin-top: 30px;font-family: 'Montserrat', sans-serif;color: #9b9385;">
                        LEARN MORE&nbsp;
                    </button>
                </div>
            </div>
        </div>
        <!-- NewsLetter -->
        <div class="news">

        </div>
    </main>

<!-- Footer -->
    <footer class="footer" style="background:url('img/back.jpg')no-repeat; background-size:cover;">
        <div class="container-fluid">
            <div class="foo-det row">
                <section class="col col col-sm-3 col-md-3">
                    <h2>Connect With Us</h2>
                    <p>
                    ABV-Indian Institute of Information Technology and Management Gwalior, Morena Link Road, Gwalior, Madhya Pradesh, India,474015
                    </p>
                    <p><a href="mailto: sports@iiitm.ac.in"><i class="fa fa-envelope"></i> sports@iiitm.ac.in</a></p>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </section>
                <section class="col col-sm-3 col-md-3">
                    <h2>Events</h2>
                    <ul>
                        <li><a href="#">URJA</a></li>
                        <li><a href="#">TWARAN</a></li>
                        <li><a href="#">FORMULA</a></li>
                        <li><a href="#">OTHERS</a></li>
                    </ul>
                </section>
                <section class="col col-sm-6 col-md-3">
                    <h2>Navigation</h2>
                    <ul>
                        <li class="nv-item active"><a href="index.php">Home</a></li>
                        <li class="nv-item"><a href="community.php">Community</a></li>
                        <li class="nv-item"><a href="events.php">Events</a></li>
                        <li class="nv-item"><a href="about.php">About</a></li>
                        <li class="nv-item "><a href="contact.php">Contact</a></li>
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
        </div>    
    <div class="bottom">
        <p>©COPYRIGHT IIITM GWALIOR 2020. DEVELOPMENT BY PUTTA BHANU PRAKASH,SUMMER PROJECT</p>
    </div>
    </footer>
    <!-- JavaScript -->
    <script src="js/myslides.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/74d41fd08b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>