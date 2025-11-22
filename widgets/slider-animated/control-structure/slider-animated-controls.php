<?php

return [
  [
    [
      'section_id' => 'slider_animated_list_content',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('List', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'slider_animated_list',
        'args' => [
          'type' => \Elementor\Controls_Manager::REPEATER,
          'label' => esc_html__('Slider Content', 'textdomain'),
          'fields' => [
            [
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'name' => 'slider_animated_list_title',
              'label' => esc_html__('List Title', 'textdomain'),
              // 'default' => esc_html__('Title #1', 'textdomain'),
              // 'label_block' => true,
            ],
            [
              'type' => \Elementor\Controls_Manager::MEDIA,
              'name' => 'slider_animated_list_imagen',
              'label' => esc_html__('Image', 'textdomain'),
              'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
              ],
            ],
            [
              'type' => \Elementor\Controls_Manager::WYSIWYG,
              'name' => 'slider_animated_list_content',
              'label' => esc_html__('Content', 'textdomain'),
              // 'default' => esc_html__('List Content', 'textdomain'),
              // 'show_label' => false,
            ],
            [
              'type' => \Elementor\Controls_Manager::TEXT,
              'name' => 'slider_animated_list_text_button',
              'label' => esc_html__('Text button', 'textdomain'),
              'default' => esc_html__('See More', 'textdomain')
            ]
          ],
          'default' => [
            [
              'slider_animated_list_title' => esc_html__('First title', 'textdomain'),
              'slider_animated_list_content' => esc_html__('Item content', 'textdomain')
            ],
            [
              'slider_animated_list_title' => esc_html__('Second title', 'textdomain'),
              'slider_animated_list_content' => esc_html__('Item content', 'textdomain')
            ],
          ]
        ]
      ]
    ]
  ],
  [
    [
      'section_id' => 'slider_animated_icon_section',
      'args' => [
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'label' => esc_html__('Icon', 'textdomain'),
      ]
    ],
    [
      [
        'id' => 'slider_animated_icon_previous',
        'args' => [
          'type' => \Elementor\Controls_Manager::ICONS,
          'label' => esc_html__('Icon previous', 'textdomain'),
          'default' => [
            'value' => 'fas fa-arrow-left',
            'library' => 'fa-solid'
          ]
        ]
      ],
      [
        'id' => 'slider_animated_icon_next',
        'args' => [
          'type' => \Elementor\Controls_Manager::ICONS,
          'label' => esc_html__('Icon next', 'textdomain'),
          'default' => [
            'value' => 'fas fa-arrow-right',
            'library' => 'fa-solid'
          ]
        ]
      ],
    ]
  ]
];