<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exploring Different Art Mediums- Code In Art</title>
        <meta name="description" content="Works of art created through Studio Arts course as a minor by Angela Pang." />

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
                Hello World!

                <!-- Hero Bottom Space -->
                <div class="heroTriangle arrow-down"></div>

                <!-- Brief About Site -->



                <!-- Page Updates -->
                <div class="row">
                    <h1>Recent Uploads</h1>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                            <img class="riangle">
                        </div>
                    </div>
                </div>

                <!-- Facebook Comment Component -->
                <div class="fb-comments" data-href="http://codeinart.com/commenttest.php" data-numposts="5" data-colorscheme="light"></div>

                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>                

                `<!-- Javascript -->
                <script src="js/bootstrap.js"></script>

                <!-- Footer -->
                <?php include 'components/footer.php' ?>

            </div>



        </div>


    </body>

</html> 