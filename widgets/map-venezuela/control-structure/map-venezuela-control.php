<?php

return [
  [
    [
      'section_id' => 'map_venezuela_content_overall',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('Overall', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'map_venezuela_width',
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
            '{{WRAPPER}} #kwfe-widget-map-venezuela' => 'width: {{SIZE}}{{UNIT}};',
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_height',
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
            '{{WRAPPER}} #kwfe-widget-map-venezuela' => 'height: {{SIZE}}{{UNIT}};',
          ]
        ]
      ],
    ]
  ],
  [
    [
      'section_id' => 'map_venezuela_style_colors',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Colors', 'textdomain')
      ]
    ],
    [
      [
        'start_controls_tabs' => [
          'name' => 'map_venezuela_style_group',
          'args' => []
        ],
      ],
      [
        'start_controls_tab' => [
          'name' => 'tab_map_venezuela_normal',
          'args' => [
            'label' => __('Normal', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_style_background_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Background color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela' => 'background-color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_style_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela g path[name]' => 'fill: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_style_borders_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color de bordes', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela g path[name]' => 'stroke: {{VALUE}};'
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
        'id' => 'map_venezuela_style_hover_background_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Background color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela:hover' => 'background-color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_style_hover_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela g:hover path[name]' => 'fill: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_style_hover_color_per_state',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('per state', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela g path[name]:hover' => 'fill: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'map_venezuela_style_hover_borders_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color de bordes', 'textdomain'),
          'selectors' => [
            '{{WRAPPER}} #kwfe-widget-map-venezuela g path[name]:hover' => 'stroke: {{VALUE}};'
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