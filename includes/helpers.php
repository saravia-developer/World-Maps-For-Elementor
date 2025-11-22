<?php

class Helpers {

  public static function list_css_files(string $path) {

    $css_archive = glob(plugin_dir_path( $path ) . "*.css");

    return (bool) count($css_archive)
      ? array_map( 
      function($element) {
          $name_file = explode('.cs', basename($element))[0];
          return "kwfe-{$name_file}";
        }, $css_archive
      )
      : [];
  }

  public static function list_js_files( string $path ) {
    $js_archive = glob(plugin_dir_path( $path ) . "js/*.js");

    return (bool) count($js_archive)
      ? array_map( 
      function($element) {
          $name_file = explode('.j', basename($element))[0];
          return "kwfe-{$name_file}";
        }, $js_archive
      )
      : [];
  }
}