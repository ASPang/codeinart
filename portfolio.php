<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Art Project Completed - Code In Art</title>
        <meta name="description" content="Portfolio of the projects completed for Studio Arts course as a minor by Angela Pang." />
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

                
                <h1 id="portfolioHeader">Portfolio</h1>
                
                <?php include 'components/modal.php' ?>

                <div class="row">
                    <div class="col-md-4">
                        <a class="portHeaderImg" href="#sculptureHeader">
                            <img src="img/portHeader/sculpture.png" />
                            <div class="carousel-caption"> 
                                <h1>Sculpture</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="portHeaderImg" href="#printHeader">
                            <img src="img/portHeader/print.png" />
                            <div class="carousel-caption"> 
                                <h1>Print Making</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="portHeaderImg" href="#graphicHeader">                            
                            <img src="img/portHeader/graphic.png" />
                            <div class="carousel-caption"> 
                                <h1>Graphics</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <br>

                <div class="col-md-4">
                    <div class="portHeader row">
                        <h2 id="sculptureHeader">Sculpture</h2>
                    </div>
                </div>
                <div class="col-md-8"></div>
                <div class="row">
                </div>
                <?php include 'sculpture.php'; ?>

                <div class="col-md-4">
                    <div class="portHeader row">
                        <h2 id="printHeader">Print Making</h2>
                    </div>
                </div>
                <div class="col-md-8"></div>
                <div class="row">
                </div>
                <?php include 'prints.php'; ?>

                <div class="col-md-4">
                    <div class="portHeader row">
                        <h2 id="graphicHeader">Graphics</h2>
                    </div>
                </div>
                <div class="col-md-8"></div>
                <div class="row">
                </div>
                <?php include 'sculpture.php'; ?>


                <script src="js/bootstrap.js"></script>
                `<!-- Javascript -->

                <!-- Footer -->
                <?php include 'components/footer.php' ?>
            </div>
        </div>

        <!-- Modal Scripts -->
        <script src="js/modal.js"></script>

    </body>
</html> 