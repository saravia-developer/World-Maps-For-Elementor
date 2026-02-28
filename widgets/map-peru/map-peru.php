<?php

require_once PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once PLUGIN_DIRECTORY . "includes/helpers.php";

class Map_peru_widget extends Basic_Config_Elementor_Widget
{

  public function __construct($data = [], $args = null)
  {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/map-peru-control.php";

    parent::__construct(
      "map-peru",
      "Peru",
      'eicon-map',
      ['basic', 'world-maps'],
      ['map', 'peru'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  public function render()
  {
    $path = __DIR__ . "/template/template-map-peru.php";
    $settings = $this->get_settings_for_display();
    $points = $settings['map_peru_repeater'];

    ob_start();
    require_once $path;
    $template = ob_get_clean();
    echo $template;
  }

}