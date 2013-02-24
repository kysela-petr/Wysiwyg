<?php
    $nowHash = md5(date());
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/bootstrap.min.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/bootstrap-wysihtml5.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/wysiwyg-color.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/prettify.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/main.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/textarea.css?<?php echo $nowHash; ?>">
        <link rel="stylesheet" href="css/dropbox.css?<?php echo $nowHash; ?>">
        <script src="js/vendor/modernizr-2.6.2.min.js?<?php echo $nowHash; ?>"></script>
    </head>
    <body>
        

        <div class="wysiwyg-container">
            <h1>wysiwyg</h1>
    
                <form>
    
                    <textarea class="wysiwyg"></textarea>
    
            </form>
        </div>


        <!--  
         JAVASCRIPT   
         ================================================= -->

        <script src="js/wysihtml5-0.3.0.js?<?php echo $nowHash; ?>"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js?<?php echo $nowHash; ?>"></script>
        <script src="js/bootstrap.min.js?<?php echo $nowHash; ?>"></script>
        <script src="js/bootstrap-wysihtml5.js?<?php echo $nowHash; ?>"></script>
        <script src="js/jquery.filedrop.js?<?php echo $nowHash; ?>"></script>
        <script src="js/main.js?<?php echo $nowHash; ?>"></script>
    </body>
</html>
