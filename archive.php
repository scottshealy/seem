<?php 
    /**
     * archive.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<!DOCTYPE HTML>
<!-- SEEM | SOUTHEAST ENERGY EXCHANGE MARKET -->

<html id="seem" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        <?php include(get_template_directory()."/php/theme/scripts/head/front-page.php"); ?>
    </head>

    <!-- BODY -->
    <body class="page" <?php body_class(); ?>>

        <!-- HEADER -->
        <?php include(get_template_directory()."/header.php"); ?>

        <!-- CONTENT | ARCHIVE.PHP -->
        <?php include(get_template_directory()."/php/theme/templates/archive.php"); ?>

        <!-- FOOTER -->
        <?php include(get_template_directory()."/footer.php"); ?>

        <!-- SCRIPTS -->
        <?php include(get_template_directory()."/php/theme/scripts/footer/footer-scripts.php"); ?>

    </body>

</html>