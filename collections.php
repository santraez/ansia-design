<?php

    require 'includes/functions.php';

    addTemplate('header');

?>

<div class="container all-collections">

    <div class="all-collections__show">

        <?php include 'includes/templates/collection-bar.php' ?>
        <?php include 'includes/templates/collection-bar.php' ?>
        <?php include 'includes/templates/collection-bar.php' ?>

    </div>
    <a href="collections/genesis.php">collection</a>

</div>

<?php

    addTemplate('footer-access');

?>