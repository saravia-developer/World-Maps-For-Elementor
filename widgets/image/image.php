<?php

require_once PLUGIN_DIRECTORY . "template/basic-widget.php";

class KWFE_Image_widget extends Basic_Config_Elementor_Widget
{

  public function __construct(
    $data = [],
    $args = null
  ) {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/image-control.php";

    parent::__construct(
      'image-custom',
      'Image custom',
      'eicon-image',
      ['basic'],
      ['image'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  protected function render(): void
  {
    $settings = $this->get_settings_for_display();

    if (empty($settings['image'])) {
      return;
    }

    $name_image = $settings['image']['url'];
    print_r($name_image);
    $name_image = basename($name_image);

    ?>
    <img src="<?php echo $settings['image']['url'] ?>" alt="<?php echo $name_image ?>" />
    <?php
  }

  public function content_template(): void
  {
    ?>
    <# if( ''===settings.image) { return; } #>
      <img src="{{ settings.image.url }}" alt="{{ settings.image.url }}" />
      <?php
  }

}