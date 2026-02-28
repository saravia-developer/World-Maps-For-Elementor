<?php

require_once KWFE_PLUGIN_DIRECTORY . "template/basic-widget.php";

class Counter_widget extends Basic_Config_Elementor_Widget {

  public function __construct(
    array $data = [],
    ?array $args = null
  ) {
		$style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/counter-controls.php";

    parent::__construct(
      'count-widget',
      'Counter Widget',
      'eicon-code',
      ['basic'],
      ['count'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  protected function render(): void {
    $data_counter = $this->get_settings_for_display('image');
    
    if( empty($data_counter) ) {
      return;
    }

    $name_image = $data_counter['url'];
    $name_image = basename($name_image);
    
    ?>
      <img src="<?php echo $data_counter['url'] ?>" alt="<?php echo $name_image ?>" />
    <?php
  }

  public function content_template(): void {
		?>
    <#
      if( '' === settings.image) {
        return;
      }
    #>
      <img src="{{ settings.image.url }}" alt="{{ settings.image.url }}" />
		<?php
	}


}