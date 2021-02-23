<?php 
    /**
     * php/theme/templates/page.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!-- TEMPLATE | PAGE -->
<main id="<?php global $post; $post_slug = $post -> post_name; echo $post_slug; ?>">
    <?php include(get_template_directory()."/php/theme/templates/loops/content.php"); ?>
</main>