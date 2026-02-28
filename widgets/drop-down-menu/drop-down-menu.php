<?php

require_once KWFE_PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once KWFE_PLUGIN_DIRECTORY . "includes/helpers.php";

class Drop_Down_Menu_widget extends Basic_Config_Elementor_Widget
{

  public function __construct(
    $data = [],
    $args = null
  ) {

    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/drop-down-menu-controls.php";
    
    parent::__construct(
      'drop-down-menu',
      'Drop Down Menu',
      'eicon-arrow-left',
      ['basic', 'custom-widgets'],
      ['drop-down-menu'],
      $style_file,
      $js_files,
      $data,
      $args,
      // Formas de como pasar un método a una clase
      // function() { $this->register_controls_2(); }
      // [$this, 'register_controls_2']
      $controls
    );
  }

  public function render()
  {
    // $settings = $this->get_settings_for_display()

    ?>
    <div class="container-tabs-children-page">
      <a href="/acuicultura/potencial-acuicola/monitoreo-hidrobiologico"
        class="element-container tabs-for-brothers-page-tematics">
        <div class="tab-brother">
          <div class="figura">
            <span class="texto-figura">Monitoreo hidrobiológico</span>
            <div class="triangle" style="border-top-width: 31px; border-bottom-width: 31px; border-left-width: 24px;"></div>
          </div>
          <div class="titulo">Monitoreo hidrobiológico</div>
        </div>
      </a>

      <a href="/acuicultura/potencial-acuicola/modulos-de-produccion-de-trucha"
        class="element-container tabs-for-brothers-page-tematics">
        <div class="tab-brother">
          <div class="figura">
            <span class="texto-figura">Módulos de producción de trucha</span>
            <div class="triangle" style="border-top-width: 31px; border-bottom-width: 31px; border-left-width: 24px;"></div>
          </div>
          <div class="titulo">Módulos de producción de trucha
          </div>
        </div>
      </a>
    </div>
    <?php
  }

  public function content_template(): void
  {
    
  }
}