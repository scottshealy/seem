<?php 
    /**
     * php/menus/header-secondary.php
     * @package SEEM
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 02/2021
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-2',
            'menu_id' => 'Header-Secondary'
        )
    );
?>