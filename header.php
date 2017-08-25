<?php
    $server_name = "The Server-inator";
    $server_desc = "The most diabolical of machines, dedicated to destroying semiaquatic mammals.";
    $color_bg = "#263238";
    $color_name = "#fff";
    $color_text = "#ccc";
    $image_grad_start = "#2F3D44";
    $image_grad_end = "#29353B";
?>

<html>

    <head>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title><?php echo $server_name; ?></title>
        <link rel=icon href=img/favicon.png>
    </head>

    <style type="text/css">

        body {
            background-color: <?php echo $color_bg; ?>;
        }

        h1 {
            color: <?php echo $color_name; ?>;
        }

        h2 {
            color: <?php echo $color_text; ?>;
        }
        
        .tile-bg {
            /* fallback */
            background-color: <?php echo $image_grad_end; ?>;
            

            /* Safari 4-5, Chrome 1-9 */
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(<?php echo $image_grad_start; ?>), to(<?php echo $image_grad_end; ?>));

            /* Safari 5.1, Chrome 10+ */
            background: -webkit-linear-gradient(top, <?php echo $image_grad_start; ?>, <?php echo $image_grad_end; ?>);

            /* Firefox 3.6+ */
            background: -moz-linear-gradient(top, <?php echo $image_grad_start; ?>, <?php echo $image_grad_end; ?>);

            /* IE 10 */
            background: -ms-linear-gradient(top, <?php echo $image_grad_start; ?>, <?php echo $image_grad_end; ?>);

            /* Opera 11.10+ */
            background: -o-linear-gradient(top, <?php echo $image_grad_start; ?>, <?php echo $image_grad_end; ?>);
            
        }

    </style>

    <body>
