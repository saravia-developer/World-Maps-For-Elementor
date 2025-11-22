<?php

require_once plugin_dir_path(__FILE__) . "loader.php";

class Class_Elementor_Extends {

  protected $loader;

  public function __construct() {

    $this->loader = new Elementor_Extends_Loader();

    $this->load_dependencies();
  }

  public function load_dependencies() {
    $this->loader->add_action('elementor/elements/categories_registered', $this, 'kwfe_add_categories_custom');
    // $this->kwfe_enqueue_styles();
    // $this->kwfe_enqueue_scripts();

    $this->loader->add_action('elementor/frontend/after_register_scripts', $this, 'kwfe_enqueue_styles');

    $this->loader->add_action('elementor/frontend/after_register_scripts', $this, 'kwfe_enqueue_scripts');
  }

  public function kwfe_enqueue_styles() {

    $path_widgets = PLUGIN_DIRECTORY . "widgets/"; 
    $styles_files = glob($path_widgets . '*/*.css');

    foreach($styles_files as $style_file) {
      $widget_name = explode( '.cs', basename($style_file))[0];
      $handle = "kwfe-{$widget_name}";

      wp_register_style(
        $handle, 
        plugin_dir_url( $style_file ) . basename( $style_file ), 
        array(), 
        filemtime($style_file)
      );
    }
  }

  public function kwfe_enqueue_scripts() {

    $path_widgets = PLUGIN_DIRECTORY . "widgets/"; 
    $js_files = glob($path_widgets . '*/js/*.js');

    foreach($js_files as $file) {
      $widget_name = explode('.j', basename($file))[0];
      $handle = "kwfe-{$widget_name}";

      wp_register_script(
        $handle,
        plugin_dir_url($file) . basename($file),
        array(),
        filemtime($file),
        array(
          'in_footer' => true
        )
      );
    }
  }

  public function kwfe_add_categories_custom( $elements_manager ) {
    require_once PLUGIN_DIRECTORY . "includes/widget_categories.php";

    add_categories_in_elementor(
      $elements_manager, 
      [
        [
          "name-category" => 'custom-widgets',
          "options" =>  [
            'title' => esc_html__('Custom Widget', 'textdomain'),
            'icon' => 'fa fa-plug'
          ]
        ],
        [
          "name-category" => 'world-maps',
          "options" =>  [
            'title' => esc_html__('World Maps', 'textdomain'),
            'icon' => 'fa fa-maps'
          ]
        ]
      ]
    );
  }

  public function run() {
    $this->loader->run();
  }
}