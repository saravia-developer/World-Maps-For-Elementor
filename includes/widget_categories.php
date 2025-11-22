<?php

function add_categories_in_elementor(
  $elements_manager,
  array $categories_data
) {

  foreach($categories_data as $category) {
    $elements_manager->add_category(
      $category["name-category"],
      $category["options"]
    );
  }
}


