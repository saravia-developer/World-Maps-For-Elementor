<?php

/**
 * The plugin bootstrap file
 *
 * Plugin created for extends Elementor widgets
 * 
 * @since             1.0.3
 * @package           Kit Widgets for Elementor
 *
 * @wordpress-plugin
 * Plugin Name: Kit Widgets for Elementor
 * Description: Project that add widgets at elementor editor for confort maximus
 * Version: 1.0.3
 * Author: Luis Saravia
 * Requires PHP: 8.0
 */

if( !did_action('elementor/loaded') ) {
  return;
}

define('PLUGIN_VERSION', '1.0.0');
define('PLUGIN_DIRECTORY', plugin_dir_path(__FILE__));
define('PLUGIN_DIRECTORY_COMPONENTS', plugin_dir_path(__FILE__) . 'components/');

define('PLUGIN_DIRECTORY_URI', plugin_dir_url( __FILE__ ));

if (!function_exists('is_plugin_active')) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

// Comprueba si Elementor está ACTIVO (aunque sus clases aún no estén cargadas)
if (!is_plugin_active('elementor/elementor.php')) {
	deactivate_plugins(plugin_basename(__FILE__));

	wp_die(
		'Este plugin requiere que Elementor esté activo. Por favor, actívalo primero.',
		'Dependencia faltante',
		['back_link' => true]
	);
}


class World_Maps
{
  public function __construct() {
    $this->init();
  }

  public function init() {
    $this->register_widgets();
    $this->run_elementor_extends();
  }
  
  public function register_widgets()
  {
    add_action('elementor/widgets/register', function ($widgets_manager)
    {

      foreach(glob(PLUGIN_DIRECTORY . "widgets/*/*.php") as $widget) {
        require_once $widget;
      };
    
      $new_widgets = [
        new \Map_peru_widget(),
        new \Map_chile_widget(),
        new \Map_argentina_widget(),
        new \Map_brazil_widget(),
        new \Map_colombia_widget(),
        new \Map_ecuador_widget(),
        new \Map_venezuela_widget(),
        new \Map_bolivia_widget(),
        new \Map_paraguay_widget(),
        new \Map_uruguay_widget(),
      ];
    
      foreach ($new_widgets as $widget) {
        $widgets_manager->register($widget);
      }
    
    });
  }

  public function run_elementor_extends()
  {

    require_once PLUGIN_DIRECTORY . 'includes/class-elementor-extends.php';

    $plugin = new Class_Elementor_Extends();
    $plugin->run();

  }
}

new World_Maps();