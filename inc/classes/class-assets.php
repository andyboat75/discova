<?php
/**
 * Enqueue theme assets
 * 
 * @package Discova
 */

 namespace DISCOVA_THEME\Inc;

use DISCOVA_THEME\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct()
	{

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{
		/**
		 * Actions.
		 */
		add_action('wp_enqueue_scripts', [$this, 'register_styles']);
		add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
	}

	public function register_styles()
	{
		// register styles
		wp_register_style('discova-css', DISCOVA_DIR_URI, array(), filemtime(DISCOVA_DIR_PATH . '/style.css'), 'all');
		wp_register_style(
			'bootstrap-css',
			DISCOVA_DIR_URI . '/assets/src/library/css/bootstrap.min.css',
			array(),
			filemtime(DISCOVA_DIR_PATH . '/assets/src/library/css/bootstrap.min.css'),
			'all'
		);

		// enqueue the styles
		wp_enqueue_style('bootstrap-css');
		wp_enqueue_style('discova-css');
	}

	public function register_scripts()
	{
		// register scripts
		wp_register_script(
			'discova-js',
			DISCOVA_DIR_URI . '/assets/main.js',
			array(),
			'5.2',
			true
		);

		wp_register_script(
			'bootstrap-js',
			DISCOVA_DIR_URI . '/assets/src/library/js/bootstrap.min.js',
			array('jquery'),
			'5.2',
			true
		);


		// enqueue scripts
		wp_enqueue_script('bootstrap-js');
		wp_enqueue_script('discova-js');
	}
 }