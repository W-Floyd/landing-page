<?php
    include_once('header.php');
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

        $id = 0;

        while ($row = $sites->fetchArray()) {
            $extension = $row['extension'];
            $id++;
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
                echo '<h1 class="image-title textcenter" id="title-' . $id . '">' . nl2br($fullname) . '</h1><br>';
                echo '<h2 class="image-description textcenter" id="description-' . $id . '">' . nl2br($description) . '</h2>';
                echo '</div>';
                echo '</div>';
                echo '<script type="text/javascript">';
                    echo 'fitText(document.getElementById("title-' . $id . '"), 1.0);';
                    echo 'fitText(document.getElementById("description-' . $id . '"), 1.8);';
                echo '</script>';

            }
        }

    ?>

    </div>

</div>

<?php
    include_once('footer.php');
?>
