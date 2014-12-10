<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link              http://www.logichub.co.uk/
 * @since             1.0.0
 * @package           urdu-fonts-support
 * @subpackage        urdu-fonts-support/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two hooks to enqueue the 
 * dashboard-specific stylesheet and JavaScript.
 *
 * @package           urdu-fonts-support
 * @subpackage        urdu-fonts-support/includes
 * @author            Kashif Rafique <kashif@logichub.co.uk>
 */
class LH_Urdu_Fonts_Support_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $urdu_font_support    The ID of this plugin.
	 */
	private $urdu_font_support;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $urdu_font_support       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $urdu_font_support, $version ) {

		$this->urdu_font_support = $urdu_font_support;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * An instance of this class should be passed to the run() function
		 * defined in LH_Urdu_Fonts_Support_Public_Loader as all of the hooks 
		 * are defined in that particular class.
		 *
		 * The LH_Urdu_Fonts_Support_Public_Loader will then create the 
		 * relationship between the defined hooks and the functions defined 
		 * in this class.
		 */

		wp_enqueue_style( $this->urdu_font_support, plugin_dir_url( __FILE__ ) . 'css/lh-styles.css', array(), $this->version, 'all' );

	}

}
