<?php
$page_title = 'competitors';
require('../../myb4g-connect.php');
require('./library.php');
require('./classes/Competitor.php');
$competitor = new Competitor($connection);
?>
<?php require('./includes/header.inc.php') ?>
<?php require('./Views/_competitor.inc.php') ?>
<?php require('./includes/footer.inc.php') ?>
