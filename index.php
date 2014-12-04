<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exploring Different Art Mediums- Code In Art</title>
        <meta name="description" content="Home page of works of art created through Studio Arts course as a minor by Angela Pang." />
        <link rel="shortcut icon" href="img/favicon.ico" >
        
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- CSS files -->
        <!--link rel="stylesheet" href="./css/home.css"-->    
    </head>

    <body>
        <!-- Website Body -->
        <div class="container-fluid">
            <div class="content">
                <!-- Navigation Bar -->
                <?php include 'components/header.php'; ?>
                <!-- Hero -->
                <div class=""><div>
                        <?php include 'components/carousel.php'; ?>
                    </div></div>                


                <div class="triangle-down"><div></div></div>
                <div class="heroBottom">
                    <div class="triangle-down-right2" ></div>
                    <div class="triangle-down-right" ></div>
                </div>

                <!-- Page Updates -->
                <div class="row updateInfo" style="background-color: #fff;">
                    <h1>Recent Uploads</h1>
                    <hr class="featurette-divider">


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <div class="imgRecentThumb">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                        <img src="img/hero/portfolioPage.png"  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                            <h2>Portfolio Up</h2>
                            <h4><b>2014-12-04</b></h4>
                            <br>
                            <p>
                                The site is finally up and running, and the 
                                portfolio has been updated with recent artworks.
                            </p>    
                            <p>
                                Feel Free to check it out!                                
                            </p>
                            
                            <a href="portfolio.php" class="btn alert-success" role="button">View Portfolio</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <div class="imgRecentThumb">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                        <img src="img/hero/mailIcon.png"  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                            <h2>Contact Me!</h2>
                            <h4><i>2014-11-11</i></h4>
                            <p>
                                Curious to know the current status of the website? 
                                Did you know that you can contact me through more than just email?
                                <br><br>
                                For more information on how to reach me you can check out the contact page.                                
                            </p>
                            
                            <a href="contact.php" class="btn alert-success" role="button">Contact Angela</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <div class="imgRecentThumb">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                        <img src="img/hero/logo.png"  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                            <h2>CodeInArt Domain Acquired</h2>
                            <h4><i>2014-11-11</i></h4>
                            <p>
                                Domain for CodeInArt has been registered.
                                <br><br>
                                Stay tune for updates in a couple of weeks!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <?php include 'components/footer.php' ?>

            </div>
        </div>


        <!-- Boostrap JS Files -->
        <script src="js/bootstrap.js"></script>
        <script>
            /*Carousel animation*/
            $(document).ready(function() {
                /* Automatically rotates the carousel */
                $('.carousel').carousel({
                    interval: 3000
                });

                /* Navigation control on the carousel */
                $('.carousel-control.left').click(function() {
                    $('.carousel').carousel('prev');
                });

                $('.carousel-control.right').click(function() {
                    $('.carousel').carousel('next');
                });
            });
        </script>

    </body>

</html> 