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

                
                <div class ="contactRow row">
                    <!-- Contact Information -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="contactInfo col-xs-12 col-sm-12 col-md-11 col-lg-11">
                            <h1>Contact Me</h1>
                            <p>Got feedback about my art? Or general questions?</p>
                            <p>Feel free to contact me through either through the
                                contact form or my email: 
                                <a href="mailto:apang@uoguelph.ca">apang@uoguelph.ca</a>
                            </p>
                        </div>
                        <div class="contactTriangle col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <div class="triangle-right-nonResponsive"></div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!--
                        <div class="contactLabel col-md-4">
                            <p>Name:</p>
                        </div>
                        <div class="contactName col-md-8">
                            
                        </div>
                        -->
                        <form id="contactForm" role="form">
                            <div class="form-group">
                                <div class="contactLabel col-md-4">
                                    <label for="userContactName">Name:</label>
                                </div>
                                <div class="contactName col-md-8">
                                    <input type="name" class="form-control" id="userContactName" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="contactLabel col-md-4">
                                    <label for="userContactEmail">Email address:</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="userContactEmail" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="contactLabel col-md-4">
                                    <label for="userContactSubject">Email address:</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="subject" class="form-control" id="userContactSubject" placeholder="Enter subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="contactLabel col-md-4">
                                    <label for="userContactMessage">Message:</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea id="userContactMessage" class="form-control" name="userContactMessage" rows="3"></textarea>
                                    <!--input type="text" class="form-control" id="userContactMessage" placeholder="Enter Message"-->
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                

             

                <script src="js/bootstrap.js"></script>
                `<!-- Javascript -->

                <!-- Footer -->
                <?php include 'components/footer.php' ?>
            </div>
        </div>
    </body>
</html> 