<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/nirav4491
 * @since      1.0.0
 *
 * @package    Doorbell_Core
 * @subpackage Doorbell_Core/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Doorbell_Core
 * @subpackage Doorbell_Core/public
 * @author     Concatstring <account@concatstring.com>
 */
class Doorbell_Core_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Doorbell_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Doorbell_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/doorbell-core-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Doorbell_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Doorbell_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/doorbell-core-public.js', array( 'jquery' ), $this->version, false );

	}
	/**
	 * Function to reposition of the place order button for the stripe payment method.
	 * 
	 * @param String $pyament_method_id This Variable holds the value for the payment method id.
	 * @since 1.0.0
	 */
	public function dc_wc_stripe_payment_fields_stripe_callback( $pyament_method_id ) {
		if ( 'stripe' === $pyament_method_id ) {
			$order_button_text = __('Place order', 'woocommerce');
			echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' );
		}
	}
	/**
	 * Function to reposition the paypal place holder buttton.
	 * 
	 * @since 1.0.0
	 */
	public function dc_woocommerce_paypal_payments_checkout_button_renderer_hook_callback() {
		return 'woocommerce_review_order_before_payment';
	}

}
