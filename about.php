<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Artist's Background- Code In Art</title>
        <meta name="description" content="Background information about Angela Pang." />
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

                <div class="col-xs-12 col-sm-12 col-md-12">
                    
                    <div class="row">
                        <div id="aboutHeader" class="col-md-4">
                            <h1>About Angela</h1>
                        </div>
                        <div class="col-md-8"></div>
                    </div><!--aboutHeader-->

                    <div class ="aboutRow row">
                        <!-- About Angela Information -->
                        <div id="aboutArtist" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <p>
                                I'm Angela Pang, a student at the University of Guelph 
                                in my final year of the Software Engineering program. 
                                I never really thought that I'll end up in the computing 
                                field as I was a visual arts student in high school. 
                                When selecting my program for first year university, 
                                Guelph's program gave me the option to combine the arts 
                                and computing program. I had taken a couple of programming 
                                courses back in high school and thought it'll be interesting 
                                to try to apply the arts into more challenging programs.
                            </p>
                        </div><!--aboutArist-->

                        <!-- Artist Image  -->
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div id="artistImgDiamond">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                            <img src="img/self.png" />
                                    </div><!--diamond-box-inner-->
                                </div><!--diamond-box-->
                            </div><!--artImgDiamond-->
                        </div><!--col-->
                    </div><!--aboutRow-->
                </div>

                <script src="js/bootstrap.js"></script>
                `<!-- Javascript -->

                <!-- Footer -->
                <?php include 'components/footer.php' ?>
            </div>
        </div>
    </body>
</html> 