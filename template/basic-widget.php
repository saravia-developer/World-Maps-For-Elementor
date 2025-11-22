<?php
class Basic_Config_Elementor_Widget extends \Elementor\Widget_Base
{

  private $name;
  private $title;
  private $icon;
  private $categories;
  private $keywords;
  private $style_sheet;
  private $js_files;
  private $controls;


  public function __construct(
    string $name,
    string $title,
    string $icon,
    array $categories,
    array $keywords,
    array $style_sheet,
    array $js_files,
    array $data = [],
    ?array $args = null,
    array $controls = []
  ) {

    $this->name = $name;
    $this->title = $title;
    $this->icon = $icon;
    $this->categories = $categories;
    $this->keywords = $keywords;
    $this->style_sheet = $style_sheet;
    $this->js_files = $js_files;
    $this->controls = $controls;
    

    parent::__construct(
      $data,
      $args
    );
  }

  public function get_name(): string
  {
    return $this->name;
  }

  public function get_style_depends()
  {
    return $this->style_sheet;
  }

  public function get_script_depends()
  {
    return $this->js_files;
  }

  public function get_title(): string
  {
    return esc_html__($this->title, 'elementor-addon');
  }

  public function get_icon(): string
  {
    return $this->icon;
  }

  public function get_categories(): array
  {
    return $this->categories;
  }

  public function get_keywords(): array
  {
    return $this->keywords;
  }

  public function register_controls(): void {

    if( empty($this->controls) ) return;
    
    foreach($this->controls as $control) {
      $start_control = $control[0];
      $control_parts = $control[1];

      $this->start_controls_section (
        $start_control['section_id'],
        $start_control['args']
      );

      foreach($control_parts as $ctrl) {
        
        if(isset($ctrl['start_controls_tabs'])) {
          list(
            'name' => $name,
            'args' => $args
          ) = $ctrl['start_controls_tabs'];

          $this->start_controls_tabs($name, $args);
          continue;
        }


        if(isset($ctrl['start_controls_tab'])) {
          list(
            'name' => $name,
            'args' => $args
          ) = $ctrl['start_controls_tab'];

          $this->start_controls_tab($name, $args);
          continue;
        }


        if(isset($ctrl['end_controls_tab'])) {
          $this->end_controls_tab();
          continue;
        }


        if(isset($ctrl['end_controls_tabs'])) {
          $this->end_controls_tabs();
          continue;
        }
        
        if(isset($ctrl['add_group_control'])) {
          list(
            'name' => $name,
            'args' => $args
          ) = $ctrl['add_group_control'];

          $this->add_group_control($name, $args);
          continue;
        }


        $this->add_control($ctrl['id'], $ctrl['args']);
      }

      $this->end_controls_section();
    }
  }
}