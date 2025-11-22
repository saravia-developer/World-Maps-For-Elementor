<?php

return [
  [
    [
      'section_id' => 'accordion_list_content',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('List', 'text-domain'),
      ]
    ],
    [
      [
        'id' => 'accordion_list',
        'args' => [
          'type' => \Elementor\Controls_Manager::REPEATER,
          'label' => esc_html__('Accordion Content', 'text-domain'),
          'fields' => 
          [
            [
              'type' => \Elementor\Controls_Manager::TEXT,
              'name' => 'list_title',
              'label' => esc_html__('Title', 'textdomain'),
              'default' => esc_html__('List Title', 'textdomain'),
              'label_block' => true,
            ],
            [
              'type' => \Elementor\Controls_Manager::WYSIWYG,
              'name' => 'list_content',
              'label' => esc_html__('Content', 'textdomain'),
              'default' => esc_html__('List Content', 'textdomain'),
              'show_label' => false,
            ]
          ],
          'default' => 
          [
            [
              'list_title' => esc_html__( 'First title', 'textdomain' ),
              'list_content' => esc_html__( 'Item content', 'textdomain' )
            ],
            [
              'list_title' => esc_html__( 'Second title', 'textdomain' ),
              'list_content' => esc_html__( 'Item content', 'textdomain' )
            ],
          ]
        ]
      ]
    ],
  ],
  [
    [
      'section_id' => 'accordion_icon_section',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('Icon', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'icon',
        'args' => [
          'type' => \Elementor\Controls_Manager::ICONS,
          'label' => esc_html__('Icon', 'textdomain'),
          'default' => [
            'value' => 'fas fa-arrow-right',
            'library' => 'fa-solid'
          ],
          // 'recommend' => [

          // ]
        ]
      ]
    ]
  ],
  [
    [
      'section_id' => 'accordion_title_style',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Title', 'textdomain'),
      ]
    ],
    [
      [
        'start_controls_tabs' => [
          'name' => 'accordion_style_group',
          'args' => []
        ],
      ],
      [
        'start_controls_tab' => [
          'name' => 'tab_accordion_normal',
          'args' => [
            'label' => __('Normal', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'accordion_title_style_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color Title', 'textdomain'),
          'default' => '#000000',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary' => 'color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'accordion_title_style_background_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Background Color', 'textdomain'),
          'default' => '#ffffff',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary' => 'background-color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'accordion_title_style_alignment',
        'args' => [
          'type' => \Elementor\Controls_Manager::CHOOSE,
          'label' => esc_html__('Alignment', 'textdomain'),
          'options' => [
            'left' => [
              'title' => esc_html__('Left', 'textdomain'),
              'icon' => 'eicon-text-align-left'
            ],
            'center' => [
              'title' => esc_html__('Center', 'textdomain'),
              'icon' => 'eicon-text-align-center'
            ],
            'right' => [
              'title' => esc_html__('Right', 'textdomain'),
              'icon' => 'eicon-text-align-right'
            ],
            'justify' => [
              'title' => esc_html__('justify', 'textdomain'),
              'icon' => 'eicon-text-align-justify'
            ]
          ],
          'default' => 'left',
          'toggle' => true,
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary' => 'text-align: {{VALUE}}'
          ]
        ]
      ],
      [
        'end_controls_tab' => true
      ],
      [
        'start_controls_tab' => [
          'name' => 'tab_accordion_hover',
          'args' => [
            'label' => __('Hover', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'accordion_title_style_hover_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color Title', 'textdomain'),
          'default' => '#000000',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary:hover' => 'color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'accordion_title_style_hover_background_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Background Color', 'textdomain'),
          'default' => '#ffffff',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary:hover' => 'background-color: {{VALUE}};'
          ]
        ]
      ],
      [
        'id' => 'accordion_title_style_hover_alignment',
        'args' => [
          'type' => \Elementor\Controls_Manager::CHOOSE,
          'label' => esc_html__('Alignment', 'textdomain'),
          'options' => [
            'left' => [
              'title' => esc_html__('Left', 'textdomain'),
              'icon' => 'eicon-text-align-left'
            ],
            'center' => [
              'title' => esc_html__('Center', 'textdomain'),
              'icon' => 'eicon-text-align-center'
            ],
            'right' => [
              'title' => esc_html__('Right', 'textdomain'),
              'icon' => 'eicon-text-align-right'
            ],
            'justify' => [
              'title' => esc_html__('justify', 'textdomain'),
              'icon' => 'eicon-text-align-justify'
            ]
          ],
          'default' => 'left',
          'toggle' => true,
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary:hover' => 'text-align: {{VALUE}}'
          ]
        ]
      ],
      [
        'end_controls_tab' => true
      ],
      [
        'end_controls_tabs' => true
      ],
      [
        'id' => 'hr',
        'args' => [
          'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
      ],
      [
        'add_group_control' => [
          'name' => \Elementor\Group_Control_Typography::get_type(),
          'args' => [
            'name' => 'title_typography',
            'label' => esc_html__('Typography', 'your-text-domain'),
            'selector' => '{{WRAPPER}} .container-accordion > details > summary',
          ]
        ]
      ]
    ]
  ],
  [
    [
      'section_id' => 'accordion_icon_style',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Icon', 'textdomain'),
      ]
    ],
    [
      [
        'start_controls_tabs' => [
          'name' => 'accordion_icon_style_controls_tabs',
          'args' => []
        ]
      ],
      [
        'start_controls_tab' => [
          'name' => 'accordion_icon_style_controls_tab_normal',
          'args' => [
            'label' => __('Normal', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'accordion_icon_style_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'default' => '#000000',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary > span > i' => 'color: {{VALUE}};'
          ]
        ]
      ],
      [
        'end_controls_tab' => true
      ],
      [
        'start_controls_tab' => [
          'name' => 'accordion_icon_style_controls_tab_hover',
          'args' => [
            'label' => __('Hover', 'textdomain')
          ]
        ]
      ],
      [
        'id' => 'accordion_icon_style_hover_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'default' => '#000000',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > summary:hover > span > i' => 'color: {{VALUE}};'
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
  ],
  [
    [
      'section_id' => 'accordion_text_style',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Text', 'textdomain'),
      ]
    ],
    [
      [
        'add_group_control' => [
          'name' => \Elementor\Group_Control_Typography::get_type(),
          'args' => [
            'name' => 'accordion_text_style_typography',
            'label' => esc_html__('Typography', 'your-text-domain'),
            'selector' => '{{WRAPPER}} .container-accordion > details > p',
          ]
        ]
      ],
      [
        'id' => 'hr-2',
        'args' => [
          'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
      ],
      [
        'id' => 'accordion_text_style_alignment',
        'args' => [
          'type' => \Elementor\Controls_Manager::CHOOSE,
          'label' => esc_html__('Alignment', 'textdomain'),
          'options' => [
            'left' => [
              'title' => esc_html__('Left', 'textdomain'),
              'icon' => 'eicon-text-align-left'
            ],
            'center' => [
              'title' => esc_html__('Center', 'textdomain'),
              'icon' => 'eicon-text-align-center'
            ],
            'right' => [
              'title' => esc_html__('Right', 'textdomain'),
              'icon' => 'eicon-text-align-right'
            ],
            'justify' => [
              'title' => esc_html__('justify', 'textdomain'),
              'icon' => 'eicon-text-align-justify'
            ]
          ],
          'default' => 'left',
          'toggle' => true,
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > p' => 'text-align: {{VALUE}}'
          ]
        ]
      ],
      [
        'id' => 'accordion_text_style_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'default' => '#000000',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details > p' => 'color: {{VALUE}};'
          ]
        ]
      ]
    ]
  ]
];