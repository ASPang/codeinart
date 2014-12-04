<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<br>
<div class="row">
    <!-- Logo -->
    <div class="logoDiv col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <a href="index.php">
            <img src="img/logo.png" alt="CODEINART" />
        </a>
    </div>
    <div class="col-xs-4 col-sm-10 col-md-10 col-lg-10">
        <!-- Social Media Icons -->
        <div class="row">
            <div class="socialMediaDiv">
                <a href="https://www.facebook.com/angela.pang.501">
                    <img src="img/social/facebookIcon.png" alt="facebook" />
                </a>
                <a href="http://ca.linkedin.com/pub/angela-pang/48/708/4a8/">
                    <img src="img/social/linkedinIcon.png" alt="linkedin" />
                </a>
            </div> 
        </div>
        
        <!-- Navigation -->
        <div class="row">
            <nav class="navbar navbar-default navbar-inverse row-fluid" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">

                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li <?php if ($page == 'index.php') { ?> class="active" <?php } ?>><a href="index.php">Home</a></li>
                            <li <?php if ($page == 'portfolio.php') { ?> class="active" <?php } ?>><a href="portfolio.php">Portfolio</a></li>
                            <li <?php if ($page == 'contact.php') { ?> class="active" <?php } ?>><a href="contact.php">Contact</a></li>
                            <li <?php if ($page == 'about.php') { ?> class="active" <?php } ?>><a href="about.php">About</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div><!--row-->
    </div><!--col-->
</div><!--row-->

<noscript>Please Enable Javascript</noscript>

