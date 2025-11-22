<?php

require_once PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once PLUGIN_DIRECTORY . "includes/helpers.php";

class Map_brazil_widget extends Basic_Config_Elementor_Widget
{

  public function __construct($data = [], $args = null)
  {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/map-brazil-control.php";

    parent::__construct(
      "map-brazil",
      "Brazil",
      'eicon-map',
      ['basic', 'world-maps'],
      ['map','brazil'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  public function render() {

    $path = __DIR__ . "/template/template-map-brazil.php";
    $template = file_get_contents($path);

    echo $template;
  }

}