<?php
    include_once('header.php');
    $db_name = "landingpage";

    $db = new SQLite3('landingpage.db');

    $results = $db->query('SELECT extension, description, image, fullname FROM sites ORDER BY fullname');
?>

<center>
<div class="row">

<?php

    while ($row = $results->fetchArray()) {
        $extension = $row[0];
        $description = $row[1];
        $image = $row[2];
        $fullname = $row[3];
        echo '<div class="image-tile col-lg-4 col-sm-5 col-xs-6">';
        echo '<a href="../' . $extension . '"><img class="realimage" src="img/' . $image . '"></a>';
        echo '<h1 id="title-' . $extension . '">' . $fullname . '</h1><br>';
        echo '<h2 id="description-' . $extension . '">' . $description . '</h2>';
        echo '</div>';
        echo '<script type="text/javascript">';
            echo '$("#title-' . $extension . '").fitText();';
            echo '$("#description-' . $extension . '").fitText(1.8);';
        echo '</script>';
    }

?>

</div>
</center>

<?php
    include_once('footer.php');
?>
