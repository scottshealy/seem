<?php 
    /**
     * php/theme/templates/single.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!-- TEMPLATE | SINGLE -->
<main id="<?php global $post; $post_slug = $post -> post_name; echo $post_slug; ?>" class="post">
    <?php include(get_template_directory()."/php/theme/templates/loops/content.php"); ?>
</main>