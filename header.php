<?php
    /* A database? */
    $db = new SQLite3('landingpage.db');

    /* Query the database!? */
    $sites = $db->query('SELECT extension, description, image, fullname, hidden FROM sites ORDER BY fullname');

    /* Behold, the configurator! */
    include_once('config.php');
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
            color: <?php echo $color_title; ?>;
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
