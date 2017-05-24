<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Nhà hàng HQ :: nhà hàng Á - Âu</title>
        <meta name="description" content="nhà hàng quân cảng HQ">
        <meta name="keywords" content="Dalat restaurant, nhà hàng Đà Lạt, ẩm thực Á Âu, nông sản sạch, nhà khách quân cảng, nhà hàng HQ, nhà hàng, Dalat food" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="img/favicon.png"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CAlex+Brush%7CPhilosopher:400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lora|Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/theme.css">   
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        
        <!--NAVBAR-->
        <?php include_once("navbar.php"); ?>
        <!--/navbar-->

         <div class="load">
             <div class="load-container">
                 <span class="load-green load-bar"></span>
                 <span class="load-white load-bar"></span>
                 <span class="load-red load-bar"></span>
                 <span class="load-text">Đang tải...</span>
             </div>
         </div>

        <!--HOME--> 
        <?php include_once("home.php"); ?>
        <!--/home-->


        <!--ABOUT-->
        <?php include_once("about.php"); ?>
        <!--/about-->

        <!--MENU SET >100K-->
        <?php include_once("recomendation.php"); ?>
        <!--/menu set >100k-->

        <!--MENU SET >200-->
        <?php include_once("services.php"); ?>
        <!--/menuset >200-->


        <!--MENU-->
        <?php include_once("menu.php"); ?>
        <!--/menu-->


        <!--RESERVATION-->
        <?php include_once("reservation.php"); ?>
        <!--/reservation-->

        
        <!--NEWS-->
        <?php include_once("news.php"); ?>
        <!--/news-->

        
        <!--LOCATIONS-->
        <?php include_once("locations.php"); ?>
        <!--/locations-->
        
        
        <!--CONTACT-->
        <?php include_once("contact.php"); ?>
        <!--/contact-->

        

        <!--FOOTER-->
        <?php include_once("footer.php"); ?>
        <!--/footer-->
      
        <script src="js/vendor/wow.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/swiper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.countTo.js"></script>
        <script src="js/vendor/jquery.inview.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_6m6Glf1-P7jvVdHZ00e3Ue_EoUNe39g"></script>
        <script src="js/main.js"></script> 
    </body>
</html>