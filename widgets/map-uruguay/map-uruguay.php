<?php

require_once KWFE_PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once KWFE_PLUGIN_DIRECTORY . "includes/helpers.php";

class Map_uruguay_widget extends Basic_Config_Elementor_Widget
{

  public function __construct($data = [], $args = null)
  {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/map-uruguay-control.php";

    parent::__construct(
      "map-uruguay",
      "Uruguay",
      'eicon-map',
      ['basic', 'world-maps'],
      ['map','uruguay'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  public function render()
  {
    $path = __DIR__ . "/template/template-map-uruguay.php";
    $settings = $this->get_settings_for_display();
    $points = $settings['map_uruguay_repeater'];

    ob_start();
    require_once $path;
    $template = ob_get_clean();
    echo $template;
  }

}