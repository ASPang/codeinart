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

                <h1>Portfolio</h1>
                <?php include 'components/modal.php' ?>


                <div class="col-md-4">
                    <div class="portHeader row">
                        <h2>Sculpture</h2>
                    </div>
                </div>
                <div class="col-md-8"></div>
                <div class="row">
                </div>
                <?php include 'sculpture.php'; ?>

                <div class="col-md-4">
                    <div class="portHeader row">
                        <h2>Print Making</h2>
                    </div>
                </div>
                <div class="col-md-8"></div>
                <div class="row">
                </div>
                <?php include 'prints.php'; ?>

                <div class="col-md-4">
                    <div class="portHeader row">
                        <h2>Graphics</h2>
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