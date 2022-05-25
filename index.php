<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
<?php include ('php/head.php') ;?>

    <body>
        <div class="content">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include ('php/nav.php');?>

        <div class="mainCanvas">
            <h1 id="title">MOLLY VIAU</h1>
            <h2 id="subTitle">Web Developer</h2>
            <img id="avatar" src="images/pixelIcon.png">
            <?php include ('php/homeCopy.php');?>
            <div class="portfolioContainer">
                <div class="portfolioRow">
                    <div class="portfolioItem"></div>
                    <div class="portfolioItem"></div>
                    <div class="portfolioItem"></div>
                </div>
                <div class="portfolioRow">
                    <div class="portfolioItem"></div>
                    <div class="portfolioItem"></div>
                    <div class="portfolioItem"></div>
                </div>
            </div>


        </div>

    </div>
        <?php include ('php/footer.php');?>

        <script src="js\scripts.js" async defer></script>


    </body>


</html>