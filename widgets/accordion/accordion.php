<?php

require_once PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once PLUGIN_DIRECTORY . "includes/helpers.php";

class Accordion_widget extends Basic_Config_Elementor_Widget
{

  public function __construct($data = [], $args = null)
  {
    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/accordion-controls.php";

    parent::__construct(
      "accordion",
      "Accordion",
      'eicon-arrow-right',
      ['basic', 'custom-widgets'],
      ['accordion'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  public function render()
  {
    $accordion_content = $this->get_settings_for_display('list');
    $icon_selected = $this->get_settings_for_display('icon');

    echo "<div class='container-accordion'>";
    foreach ($accordion_content as $accordion) {

      ?>

      <details data-icon="'<?php echo $icon_selected; ?>'">
        <summary>
          <span>
            <i class="<?php echo esc_attr($icon_selected['value']); ?>"></i>
          </span>
          <?php echo $accordion['list_title']; ?>
        </summary>
        <?php echo $accordion['list_content']; ?>
      </details>

      <?php
    }
    echo "</div>";

  }

  protected function content_template(): void
  {

    echo "<div class='container-accordion'>";
    ?>
    <# let icon; if( 0 < settings.icon.length ) { icon='' ; } icon=settings.icon; if( settings?.list?.length ) { _.each(
      settings.list, function( item ) { #>

      <details>
        <summary>
          <span>
            <i class="{{ icon.value }}"></i>
          </span>
          {{ item.list_title }}
        </summary>
        {{{ item.list_content }}}
      </details>

      <# }); } #>
        <?php
        echo "</div>";
  }
}