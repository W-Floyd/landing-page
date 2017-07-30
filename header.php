<?php
    $server_name = "The Server-inator";
    $server_desc = "The most diabolical of machines, dedicated to destroying semiaquatic mammals.";
    $color_bg = "#222";
    $color_name = "#fff";
    $color_text = "#ccc";
?>

<html>

    <head>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title><?php echo $server_name; ?></title>
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

    </style>

    <body>
