<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exploring Different Art Mediums- Code In Art</title>
        <meta name="description" content="Works of art created through Studio Arts course as a minor by Angela Pang." />

        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!--link href="css/styles.css" rel="stylesheet" type="text/css" /-->
        <!--link href="css/test.css" rel="stylesheet" type="text/css" /-->
        
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

                <!--?php 
                // Create connection
       $conn = new mysqli("100.127.246.216", "codeinart", "jLyNBH7Q5GKG3x8XzVzIdrcZ", "codeinart_db");

// Check connection
       if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
       }
       echo "HerE";
       ?-->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="triangle-down-left"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="triangle-down-right"></div>
                    </div>
                </div>
                <div class="triangle-down"><div></div></div>
                
                <div class="triangle-right"><div></div></div>
                <div class="triangle-right-nonResponsive"></div>
                
                <style>
                    .triangle-right-nonResponsive {
                    width: 0;
height: 0;
border-style: solid;
border-width: 450px 0 450px 50px;
border-color: transparent transparent transparent #007bff;
}
                    

.triangle-right {
	width: 0;
	height: 0;
	padding-top: 25%;
	padding-bottom: 25%;
	padding-left: 25%;
	overflow: hidden;
}
.triangle-right div {
	width: 0; 
	height: 0;
	margin-top:-500px;
	margin-left: -500px;
	
	border-top: 500px solid transparent;
	border-bottom: 500px solid transparent;
	border-left: 500px solid #4679BD;
}
                    
.triangle-down{
	width: 25%;
	height: 0;
	padding-left: 25%;
	padding-top: 25%;
	overflow: hidden;
        box-sizing: initial;
}
.triangle-down div {
	width: 0; 
	height: 0;
	margin-left:-500px;
	margin-top:-500px;
	
	border-left: 500px solid #000;
	border-right: 500px solid #000;
	border-top: 500px solid #4679BD;
}

.triangle-down-left {
    width: 25%;
    height: 0;
    padding-bottom: 25%;
    overflow: hidden;
}
.triangle-down-left:after {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-right: 500px solid transparent;
    border-bottom: 500px solid #4679BD;
}

.triangle-down-right {
    /*width: 25%;*/
    height: 0;
    padding-top:25%;
    overflow: hidden;
}
.triangle-down-right:after {
    /*content: "";
    display: block;
    width: 0;
    height: 0;
    margin-top:-500px;
    
    border-top: 500px solid transparent;
    border-right: 500px solid #4679BD;*/
    content: "";
display: block;
width: 0px;
height: 0px;
margin-top: -150px;
border-top: 50px solid transparent;
border-right: 1500px solid #4679BD;
margin-left: -200px;
}
                    </style>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

                `<!-- Javascript -->
                <!--script src="js/bootstrap.js"></script-->

                <!-- Footer -->
                <!--?php include 'components/footer.php' ?-->

            </div>
        </div>


        <!-- Boostrap JS Files -->
      <script src="js/bootstrap.js"></script>
      
      
    </body>

</html> 