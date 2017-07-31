<?php
    include_once('header.php');
    $db_name = "landingpage";

    $db = new SQLite3('landingpage.db');

    $results = $db->query('SELECT extension, description, image, fullname FROM sites ORDER BY fullname');


?>

<section>
	<h1 id='main-title' class="textcenter main-title">
	    <?php echo $server_name; ?>
	</h1>
	<h2 id='main-description' class="textcenter main-description">
	    <?php echo $server_desc; ?>
    </h2>
    <script type="text/javascript">'
        jQuery("#main-title").fitText();
        jQuery("#main-description").fitText();
    </script>
</section>

<div class="tiles-container">

    <div class="row">

    <?php

        while ($row = $results->fetchArray()) {
            $extension = $row[0];
            $checksum = crc32($extension);
            $description = $row[1];
            $image = 'img/' . $row[2];

            if (file_exists($image)) {
                $image_use = $image;
            } else {
                $image_use = 'img/default.svg';
            }

            $fullname = $row[3];
            echo '<div class="image-tile col-lg-3 col-xs-6">';
            echo '<a href="../' . $extension . '"><img class="realimage" src="' . $image_use . '"></a>';
            echo '<h1 class="image-title textcenter" id="title-' . $checksum . '">' . $fullname . '</h1><br>';
            echo '<h2 class="image-description textcenter" id="description-' . $checksum . '">' . $description . '</h2>';
            echo '</div>';
            echo '<script type="text/javascript">';
                echo '$("#title-' . $checksum . '").fitText();';
                echo '$("#description-' . $checksum . '").fitText(1.8);';
            echo '</script>';
        }

    ?>

    </div>

</div>

<?php
    include_once('footer.php');
?>
