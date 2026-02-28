<?php

require_once KWFE_PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once KWFE_PLUGIN_DIRECTORY . "includes/helpers.php";

class Map_paraguay_widget extends Basic_Config_Elementor_Widget
{

  public function __construct($data = [], $args = null)
  {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/map-paraguay-control.php";

    parent::__construct(
      "map-paraguay",
      "Paraguay",
      'eicon-map',
      ['basic', 'world-maps'],
      ['map','paraguay'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  public function render()
  {
    $path = __DIR__ . "/template/template-map-paraguay.php";
    $settings = $this->get_settings_for_display();
    $points = $settings['map_paraguay_repeater'];

    ob_start();
    require_once $path;
    $template = ob_get_clean();
    echo $template;
  }

}