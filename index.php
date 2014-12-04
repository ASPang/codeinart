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
                <!-- Hero Bottom Space -->
                <!--div class="heroTriangle arrow-down"></div-->

                <!-- Brief About Site -->



                <!-- Page Updates -->
                <div class="row updateInfo" style="background-color: #fff;">
                    <h1>Recent Uploads</h1>
                    <hr class="featurette-divider">


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <div class="imgRecentThumb">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                        <img src="img/temp.png"  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                            <h2>Latest Update #1</h2>
                            <h4>
                                Nunc auctor tellus nec dictum vestibulum. 
                                Vivamus rhoncus tortor et leo ornare, quis 
                                rutrum elit commodo. Sed a maximus quam, a 
                                sollicitudin neque. 
                                Duis vulputate eros libero, a dignissim lorem 
                                ornare at. Donec non velit ex. Nullam velit 
                                odio, mattis id tempor id, sodales at tortor. 
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <div class="imgRecentThumb">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                        <img src="img/temp.png"  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                            <h2>Latest Update #3</h2>
                            <h4>
                                Nunc auctor tellus nec dictum vestibulum. 
                                Vivamus rhoncus tortor et leo ornare, quis 
                                rutrum elit commodo. Sed a maximus quam, a 
                                sollicitudin neque. 
                                Duis vulputate eros libero, a dignissim lorem 
                                ornare at. Donec non velit ex. Nullam velit 
                                odio, mattis id tempor id, sodales at tortor. 
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <div class="imgRecentThumb">
                                <div class="diamond-box">
                                    <div class="diamond-box-inner">
                                        <img src="img/temp.png"  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                            <h2>Latest Update #3</h2>
                            <h4>
                                Nunc auctor tellus nec dictum vestibulum. 
                                Vivamus rhoncus tortor et leo ornare, quis 
                                rutrum elit commodo. Sed a maximus quam, a 
                                sollicitudin neque. 
                                Duis vulputate eros libero, a dignissim lorem 
                                ornare at. Donec non velit ex. Nullam velit 
                                odio, mattis id tempor id, sodales at tortor. 
                            </h4>
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