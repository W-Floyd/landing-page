<?php
    include_once('header.php');
?>

<div class="topmatter">

    <h1 id="title" class="textcenter main-title">
        <?php echo nl2br($server_name); ?>
    </h1>
    <script type="text/javascript">
        fitText(document.getElementById('title'), 2)
    </script>

    <h2 id="subtitle" class="textcenter main-description">
        <?php echo nl2br($server_desc); ?>
    </h2>
    <script type="text/javascript">
        fitText(document.getElementById('subtitle'), 4)
    </script>

</div>

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

                echo '<div class="image-tile col-lg-2 col-md-3 col-sm-4 col-xs-6">';
                    echo '<a href="../' . $extension . '">'
                    echo '<div class="tile-bg">';
                        echo '<img class="realimage" src="' . $image_use . '">';
                        echo '<h1 class="image-title textcenter" id="title-' . $id . '">' . nl2br($fullname) . '</h1><br>';
                        echo '<h2 class="image-description textcenter" id="description-' . $id . '">' . nl2br($description) . '</h2>';
                    echo '</div>';
                    echo '</a>';
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
