<?php
namespace HealthySmilesSpace\Modules;

use HealthySmilesSpace\Modules\CSS_Vars;
use HealthySmilesSpace\Modules\Gutenberg;
use HealthySmilesSpace\Modules\Swiper;
use HealthySmilesSpace\Modules\Page_Preloader;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme modules.
 *
 * Main class for theme modules.
 */
class Modules {

	/**
	 * Theme modules constructor.
	 *
	 * Run modules for theme.
	 */
	public function __construct() {
		new CSS_Vars();

		new Swiper();

		new Gutenberg();

		new Page_Preloader();
	}

}
