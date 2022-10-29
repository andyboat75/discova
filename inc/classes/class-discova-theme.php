<?php

/**
 * Bootstraps the Theme.
 *
 * @package Discova
 */

namespace DISCOVA_THEME\Inc;

use DISCOVA_THEME\Inc\Traits\Singleton;

class DISCOVA_THEME
{
	use Singleton;

    protected function __construct()
	{

		// load class.
		Assets::get_instance();
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{
		/**
		 * Actions.
		 */
	}
}
