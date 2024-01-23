<?php

$db= mysqli_connect("localhost","mamp","12345678","student");

?>


<?php if ($db) { ?>

    <div>Connected to database</div>

    <?php }else{ ?>

    <div><?php echo mysqli_connect_error() ?></div>

    <?php } ?>




