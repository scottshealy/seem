<?php 
    /**
     * php/theme/scripts/footer/footer-scripts.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<div id="footer-scripts">

    <!-- WP-FOOTER -->
    <?php wp_footer(); ?>
    
    <!-- THEME -->
    <!-- FRAMEWORK -->
    <?php include(get_template_directory()."/php/theme/scripts/external/bootstrap/footer.php"); ?>

</div>