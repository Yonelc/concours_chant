<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Contest_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/contest-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/contest-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function contest_menu(){

		add_menu_page("Gestion des concours","Gestion des concours","manage_options","gestion-concours",array($this,"all_your_contests"));
		add_submenu_page("gestion-concours","Tous vos concours","Tous vos concours","manage_options","gestion-concours",array($this,"all_your_contests"));
		add_submenu_page("gestion-concours","Créer un concours","Créer un concours","manage_options","creer-concours",array($this,"create_your_contest"));
		
	}

	public function all_your_contests(){
		
		$contests = $this->get_all_contests();
		ob_start();

		include_once("partials/template-list-contests.php");

		$template = ob_get_contents();

		ob_end_clean();

		echo $template;
	}

	public function create_your_contest(){

		
		ob_start();

		include_once("partials/template-create-contest.php");

		$template = ob_get_contents();

		ob_end_clean();

		echo $template;
	}

	public function get_all_contests(){

		global $wpdb;

		$contests = $wpdb->get_results(
			$wpdb->prepare("SELECT * from cc_contest where organizer = %d",1)
		);

		return $contests;
	}

	public function add_contest(){

	}

	public function modify_contest(){

	}

	public function delete_contest(){

	}

	/**
	 * Function Ajax handle
	 */
	public function handle_ajax_requests_admin(){

	}

}
