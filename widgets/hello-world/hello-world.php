<?php

require_once KWFE_PLUGIN_DIRECTORY . "template/basic-widget.php";

class KWFE_Hello_World extends Basic_Config_Elementor_Widget {

	  public function __construct(
    $data = [],
    $args = null
  ) {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/hello-world-control.php";
    
    parent::__construct(
      'hello_world',
      'Hello World',
      'eicon-text',
      ['basic'],
      ['hello', 'world'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  // public function register_controls_2() {

  //   // Control of styles

  //   $this->start_controls_section(
  //     'tabs-section-heading',
  //     [
  //       'label' => esc_html__( 'Content', 'textdomain' ),
  //       'tab' => \Elementor\Controls_Manager::TAB_CONTENT
  //     ]
  //   );

  //   $this->add_control(
  //     'text-color',
  //     [
  //       'type' => \Elementor\Controls_Manager::COLOR,
  //       'label' => esc_html__('Text Color', 'textdomain' ),
  //       'default' => '#fefefe'
  //     ]
  //   );

  //   $this->end_controls_section();
  // }



	protected function render(): void {
    // $categories = \Elementor\Plugin::$instance->elements_manager->get_categories();
    // $result = json_decode($categories);
		?>
		<p> Hello World </p>
		<?php
	}

	protected function content_template(): void {
		?>
		<p> Hello World </p>
		<?php
	}
}