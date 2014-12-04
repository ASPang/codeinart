<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stay Connected- Code In Art</title>
        <meta name="description" content="Contact page for Angela Pang." />
        <link rel="shortcut icon" href="img/favicon.ico" >
        
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
    </head>

    <body>
        <!-- Website Body -->
        <div class="container-fluid">
            <div class="content">
                <!-- Navigation Bar -->
                <?php include 'components/header.php'; ?>

                
                <div class ="row">
                    <!-- Contact Information -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="contactInfo col-xs-11 col-sm-11 col-md-11 col-lg-11">
                            <h1>Contact Me</h1>
                            <p>Got feedback about my art? Or general questions?</p>
                            <p>Feel free to contact me through either through the
                                contact form or my email: 
                                <br>
                                <div class="socialMediaIcons">
                                    <a href="mailto:apang@uoguelph.ca">
                                        <img src="img/social/mailIcon.png" alt="apang@uoguelph.ca"/>
                                    </a>
                                </div>
                            </p>
                            
                            <br>
                            <p>
                                You can also stay connected with me through the following social networks:
                            </p>
                            <p class="socialMediaIcons">
                                <a href="https://www.facebook.com/angela.pang.501">
                                    <img src="img/social/facebookIcon.png" alt="facebook" />
                                </a>
                                <a href="http://ca.linkedin.com/pub/angela-pang/48/708/4a8/">
                                    <img src="img/social/linkedinIcon.png" alt="linkedin" />
                                </a>
                            </p>
                        </div>
                        <div class="contactTriangle col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <div class="triangle-right-nonResponsive"></div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="contactFormCol col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h4>&numsp;</h4>
                        <div class="col-md-12">
                            <h4>Contact Form</h4>
                            <?php include 'contactPost.php' ?>
                        </div>
                        
                        <form id="contactForm" role="form" method="post" action="contact.php">
                            <div class="form-group">
                                <div class="contactLabel col-md-3">
                                    <label for="userContactName">Name:</label>
                                </div>
                                <div class="contactName col-md-9">
                                    <input name="userContactName" type="name" class="form-control" id="userContactName" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="contactLabel col-md-3">
                                    <label for="userContactEmail">Email address:</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="userContactEmail" type="email" class="form-control" id="userContactEmail" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="contactLabel col-md-3">
                                    <label for="userContactSubject">Subject:</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="userContactSubject" type="subject" class="form-control" id="userContactSubject" placeholder="Enter subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="contactLabel col-md-3">
                                    <label for="userContactMessage">Message:</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea id="userContactMessage" class="form-control" name="userContactMessage" rows="5"></textarea>
                                    <!--input type="text" class="form-control" id="userContactMessage" placeholder="Enter Message"-->
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input name="submit" type="submit" class="btn btn-default" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
              
                `<!-- Javascript -->
                <script src="js/bootstrap.js"></script>
                
                <!-- Footer -->
                <?php include 'components/footer.php' ?>
            </div>
        </div>
    </body>
</html> 