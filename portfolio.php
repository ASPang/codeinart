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
                
                <h3>Sculpture</h3>
                <?php include 'sculpture.php'; ?>
                
                <h3>Print Making</h3>
                <?php include 'prints.php'; ?>
                
                <h3>Graphics</h3>
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