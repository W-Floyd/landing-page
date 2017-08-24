<?php
    include_once('header.php');
    $db_name = "landingpage";

    $db = new SQLite3('landingpage.db');

    $results = $db->query('SELECT extension, description, image, fullname, hidden FROM sites ORDER BY fullname');


?>


<h1 class="textcenter main-title">
    <?php echo nl2br($server_name); ?>
</h1>
<h2 class="textcenter main-description">
    <?php echo nl2br($server_desc); ?>
</h2>


<div class="tiles-container">

    <div class="row">

    <?php

        while ($row = $results->fetchArray()) {
            $extension = $row['extension'];
            $checksum = crc32($extension);
            $description = $row['description'];
            $image = 'img/' . $row['image'];
            $fullname = $row['fullname'];
            $hidden = $row['hidden'];

            if ($hidden == 0) {

                if (file_exists($image)) {
                    $image_use = $image;
                } else {
                    $image_use = 'img/default.svg';
                }

                echo '<div class="image-tile col-lg-3 col-xs-6">';
                echo '<div class="tile-bg">';
                echo '<a href="../' . $extension . '"><img class="realimage" src="' . $image_use . '"></a>';
                echo '<h1 class="image-title textcenter" id="title-' . $checksum . '">' . nl2br($fullname) . '</h1><br>';
                echo '<h2 class="image-description textcenter" id="description-' . $checksum . '">' . nl2br($description) . '</h2>';
                echo '</div>';
                echo '</div>';
                echo '<script type="text/javascript">';
                    echo '$("#title-' . $checksum . '").fitText();';
                    echo '$("#description-' . $checksum . '").fitText(1.8);';
                echo '</script>';

            }
        }

    ?>

    </div>

</div>

<?php
    include_once('footer.php');
?>
