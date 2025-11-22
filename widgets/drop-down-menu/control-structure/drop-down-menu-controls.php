<?php

return [
  [
    [
      'section_id' => 'drop_down_menu_list_content',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('List', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'drop_down_menu_list',
        'args' => [
          'type' => \Elementor\Controls_Manager::REPEATER,
          'label' => esc_html__('Accordion Content', 'textdomain'),
          'fields' => [
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
            ],
            // [
            //   'name' => 'list_color',
            //   'label' => esc_html__('Color', 'textdomain'),
            //   'type' => \Elementor\Controls_Manager::COLOR,
            //   'selectors' => [
            //     '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
            //   ],
            // ]
          ],
        ]
      ]
    ],
  ],
  [
    [
      'section_id' => 'drop_down_menu_title_style',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Title', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'drop_down_menu_title_style_color',
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
        'id' => 'drop_down_menu_title_style_alignment',
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
          'default' => 'center',
          'toggle' => true,
          'selects' => [
            '{{WRAPPER}} .container-accordion > details > p' => 'text-align: {{VALUE}}'
          ]
        ]
      ],
    ]
  ],
  [
    [
      'section_id' => 'drop_down_menu_text_style',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        'label' => esc_html__('Text', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'drop_down_menu_text_style_color',
        'args' => [
          'type' => \Elementor\Controls_Manager::COLOR,
          'label' => esc_html__('Color', 'textdomain'),
          'default' => '#71B571',
          'selectors' => [
            '{{WRAPPER}} .container-accordion > details p' => 'color: {{VALUE}};'
          ]
        ]
      ],
    ]
  ],
  [
    [
      'section_id' => 'drop_down_menu_title_style',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('Color Title', 'textdomain'),
      ]
    ],
    [
      'id' => 'drop_down_menu_title_style_alignment',
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
        'default' => 'center',
        'toggle' => true,
        'selects' => [
          '{{WRAPPER}} .container-accordion > details > p' => 'text-align: {{VALUE}}'
        ]
      ]
    ],
  ]
];