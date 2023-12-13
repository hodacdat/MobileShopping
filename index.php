<?php
ob_start();
// include header.php
include ('Template/header.php')?>
<?php
/* banner area session */
include 'Template/_banner-area.php';
/* banner area */

/* top sale session */
include 'Template/_top-sale.php';
/* top sale */

/* special price session */
include 'Template/_special-price.php';
/* special price */

/* banner ads session */
include 'Template/_banner-ads.php';
/* banner ads */

/* new phones session */
include 'Template/_new-phones.php';
/* new phones */

/* blogs session */
include 'Template/_blogs.php';
/* blogs */

?>
<?php
// include footer.php
include ('Template/footer.php')?>
