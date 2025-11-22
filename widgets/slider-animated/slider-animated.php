<?php

require_once PLUGIN_DIRECTORY . "template/basic-widget.php";
require_once PLUGIN_DIRECTORY . "includes/helpers.php";

class Slider_Animated_widget extends Basic_Config_Elementor_Widget
{

  public function __construct(
    $data = [],
    $args = null
  ) {

    $style_file = Helpers::list_css_files(__FILE__);
    $js_files = Helpers::list_js_files(__FILE__);
    $controls = require __DIR__ . "/control-structure/slider-animated-controls.php";
  
    parent::__construct(
      'slider-animated',
      'Slider Animated',
      'eicon-arrow-right',
      ['basic', 'custom-widgets'],
      ['slider-animated'],
      $style_file,
      $js_files,
      $data,
      $args,
      $controls
    );
  }

  public function render() {

    $slider_content = $this->get_settings_for_display('slider_animated_list');
    $slider_animated_icon_previous = $this->get_settings_for_display('slider_animated_icon_previous');
    $slider_animated_icon_next = $this->get_settings_for_display('slider_animated_icon_next');
    // print_r($slider_content);
    echo "<script>console.log(". json_encode($slider_content) .");</script>";

    echo "<div class='slider-animated-widget'>";
    echo "<div class='slide'>";
    foreach($slider_content as $slider) {
      
    ?>
    
      
      <!-- <div class="item" style="background: url('https://i.postimg.cc/g0W4qN2y/Switzerland.jpg');"> -->
      <div class="item" style="background: url('<?php echo $slider['slider_animated_list_imagen']['url'] ?>');">
        <div class="content">
          <h2 class="name">
            <?php echo $slider['slider_animated_list_title']; ?>
          </h2>
          <p class="description">
            <?php echo $slider['slider_animated_list_content']; ?>
          </p>
          <button>
            <?php echo $slider['slider_animated_list_text_button']; ?>
          </button>
        </div>
      </div>



      <!-- <div class="item" style="background: url('https://i.postimg.cc/05WWRYVx/Australia.jpg');">
        <div class="content">
          <div class="name">Australia</div>
          <div class="description">Distinguished by its diverse ecosystems, ranging from beaches to bushland</div>
          <button>See More</button>
        </div>
      </div> -->

    <?php
    }
    echo "</div>";
    ?>
    <div class="button">
      <button class="prev">
        <i class="<?php echo $slider_animated_icon_previous['value'] ?>"></i>
      </button>
      
      <button class="next">
        <i class="<?php echo $slider_animated_icon_next['value'] ?>"></i>
      </button>
    </div>
    <?php
    echo "</div>";
  }

  public function content_template() {

  }
}