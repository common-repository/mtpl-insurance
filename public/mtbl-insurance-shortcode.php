<?php
/**
 * Register Shortcodes for the plugin
 *
 * @link       https://www.artargus.in.ua/insurancePlugin
 * @since      1.0.0
 *
 * @package    Mtpl_Insurance
 * @subpackage Mtpl_Insurance/public
 */

	function shortcode_MtplI() {
		ob_start();
        include plugin_dir_path( __FILE__ ) . 'partials/mtpl-insurance-public-display.php';
        return ob_get_clean();
	}

	add_shortcode('sljar_mtplI_box', 'shortcode_MtplI');