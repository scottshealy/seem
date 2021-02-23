<?php 
    /**
     * php/theme/templates/loops/content.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!-- LOOP | CONTENT -->
<?php 
    while (have_posts()):
        the_post();
        get_template_part("/php/theme/templates/parts/content", "page");
    endwhile;
?>