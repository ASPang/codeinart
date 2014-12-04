<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<div class="row">
    <div class="logoDiv col-sm-12 col-md-2">
        <img src="img/logo.png" alt="CODEINART" />
    </div>
    <div class="col-sm-12 col-md-10">
        <div class="row">
            <div class="socialMediaDiv">
                <a href="#">
                                    <img src="#" alt="facebook" />
                                </a>
                                <a href="#">
                                    <img src="#" alt="linkedin" />
                                </a>
            </div>   <!-- TESTING!!!! - Temporary height -->
        </div>
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
                            <!--li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Prints</a></li>
                                    <li><a href="#">Sculptures</a></li>
                                    <li><a href="#">Graphics</a></li>
                                </ul>
                            </li-->
                            <li <?php if ($page == 'contact.php') { ?> class="active" <?php } ?>><a href="contact.php">Contact</a></li>
                            <li <?php if ($page == 'about.php') { ?> class="active" <?php } ?>><a href="about.php">About</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>
</div>

    <noscript>Please Enable Javascript</noscript>

