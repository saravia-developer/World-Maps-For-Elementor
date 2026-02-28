<?php

return [
  [
    [
      'section_id' => 'map_paraguay_content_overall',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('Overall', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'map_paraguay_width',
        'args' => [
          'type' => \Elementor\Controls_Manager::SLIDER,
          'label' => esc_html__('Width', 'textdomain'),
          'size_units' => ['px', '%', 'em', 'rem', 'vw', 'custom'],
          'range' => [
            'px' => [
              'min' => 0,
              'max' => 1000,
              'step' => 5
            ],
            '%' => [
              'min' => 0,
              'max' => 100
            ],
            'vw' => [
              'min' => 0,
              'max' => 100
            ],
          ],
          'default' => [
            'unit' => '%',
            'size' => 100,
          ],
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay' => 'width: {{SIZE}}{{UNIT}};',
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_height',
        'args' => [
          'type' => \Elementor\Controls_Manager::SLIDER,
          'label' => esc_html__('Height', 'textdomain'),
          'size_units' => ['px', '%', 'em', 'rem', 'vw', 'custom'],
          'range' => [
            'px' => [
              'min' => 0,
              'max' => 1000,
              'step' => 5
            ],
            '%' => [
              'min' => 0,
              'max' => 100
            ],
            'vw' => [
              'min' => 0,
              'max' => 100
            ],
          ],
          'default' => [
            'unit' => '%',
            'size' => 100,
          ],
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay' => 'height: {{SIZE}}{{UNIT}};',
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_repeater',
        'args' => [
          'label' => esc_html__('Repeater', 'textdomain'),
          'type' => \Elementor\Controls_Manager::REPEATER,
          'fields' => [
            [
              'name' => 'map_paraguay_repeater_title',
              'label' => esc_html__('Título', 'textdomain'),
              'type' => \Elementor\Controls_Manager::TEXT,
              'default' => esc_html__('Título', 'textdomain'),
              'label_block' => true,
            ],
            [
              'name' => 'map_paraguay_repeater_content',
              'label' => esc_html__('Contenido', 'textdomain'),
              'type' => \Elementor\Controls_Manager::WYSIWYG,
              'default' => esc_html__('Contenido', 'textdomain'),
              'show_label' => false,
            ],
            [
              'name' => 'hr',
              'type' => \Elementor\Controls_Manager::DIVIDER,
            ],
            [
              'name' => 'map_paraguay_repeater_fill',
              'label' => esc_html__('Fill', 'textdomain'),
              'type' => \Elementor\Controls_Manager::COLOR,
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'fill: {{VALUE}}'
              ],
            ],
            [
              'name' => 'map_paraguay_repeater_stroke',
              'label' => esc_html__('Stroke', 'textdomain'),
              'type' => \Elementor\Controls_Manager::COLOR,
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'stroke: {{VALUE}}'
              ],
            ],
            [
              'name' => 'hr',
              'type' => \Elementor\Controls_Manager::DIVIDER,
            ],
            [
              'name' => 'map_paraguay_repeater_title_color',
              'label' => esc_html__('Title Color', 'textdomain'),
              'type' => \Elementor\Controls_Manager::COLOR,
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}} .container-message > h3' => 'color: {{VALUE}}'
              ],
            ],
            [
              'name' => 'map_paraguay_repeater_title_size',
              'label' => esc_html__('Title Size', 'textdomain'),
              'type' => \Elementor\Controls_Manager::SLIDER,
              'size_units' => ['px', '%', 'em', 'rem', 'vw', 'custom'],
              'range' => [
                'px' => [
                  'min' => 0,
                  'max' => 100,
                  'step' => 5
                ],
                '%' => [
                  'min' => 0,
                  'max' => 100
                ],
                'vw' => [
                  'min' => 0,
                  'max' => 100
                ],
              ],
              'default' => [
                'unit' => 'px',
                'size' => 22,
              ],
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}} .container-message > h3' => 'font-size: {{SIZE}}{{UNIT}};'
              ],
            ],
            [
              'name' => 'map_paraguay_repeater_background_color_container_message',
              'label' => esc_html__('B. Color contenedor de mensaje', 'textdomain'),
              'type' => \Elementor\Controls_Manager::COLOR,
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}} .container-message' => 'background-color: {{VALUE}}'
              ],
            ],
            [
              'name' => 'hr',
              'type' => \Elementor\Controls_Manager::DIVIDER,
            ],
            [
              'name' => 'map_paraguay_repeater_position_x',
              'type' => \Elementor\Controls_Manager::SLIDER,
              'label' => esc_html__('Posición X', 'textdomain'),
              'size_units' => ['px', '%', 'em', 'rem', 'vw', 'custom'],
              'range' => [
                'px' => [
                  'min' => 0,
                  'max' => 1000,
                  'step' => 5
                ],
                '%' => [
                  'min' => 0,
                  'max' => 100
                ],
                'vw' => [
                  'min' => 0,
                  'max' => 100
                ],
              ],
              'default' => [
                'unit' => '%',
                'size' => 100,
              ],
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'left: {{SIZE}}{{UNIT}};',
              ]
            ],
            [
              'name' => 'map_paraguay_repeater_position_y',
              'type' => \Elementor\Controls_Manager::SLIDER,
              'label' => esc_html__('Posición Y', 'textdomain'),
              'size_units' => ['px', '%', 'em', 'rem', 'vw', 'custom'],
              'range' => [
                'px' => [
                  'min' => 0,
                  'max' => 1000,
                  'step' => 5
                ],
                '%' => [
                  'min' => 0,
                  'max' => 100
                ],
                'vw' => [
                  'min' => 0,
                  'max' => 100
                ],
              ],
              'default' => [
                'unit' => '%',
                'size' => 100,
              ],
              'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
              ]
            ]
          ]
        ]
      ],
    ]
  ],
  [
    [
      'section_id' => 'map_paraguay_style_colors',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Colors', 'textdomain')
      ]
    ],
    [
      [
        'start_controls_tabs' => [
          'name' => 'map_paraguay_style_group',
          'args' => []
        ],
      ],
      [
        'start_controls_tab' => [
          'name' => 'tab_map_paraguay_normal',
          'args' => [
            'label' => __('Normal', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_background_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Background color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay' => 'background-color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay g path[name]' => 'fill: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_borders_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color de bordes', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay g path[name]' => 'stroke: {{VALUE}};'
          ]
        ]
      ],
      [
        'end_controls_tab' => true
      ],
      [
        'start_controls_tab' => [
          'name' => '',
          'args' => [
            'label' => __('Hover', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_hover_background_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Background color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay:hover' => 'background-color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_hover_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay g:hover path[name]' => 'fill: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_hover_color_per_state',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('per state', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay g path[name]:hover' => 'fill: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_paraguay_style_hover_borders_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color de bordes', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-paraguay g path[name]:hover' => 'stroke: {{VALUE}};'
          ]
        ]
      ],
      [
        'end_controls_tab' => true
      ],
      [
        'end_controls_tabs' => true
      ],
    ]
  ]
];