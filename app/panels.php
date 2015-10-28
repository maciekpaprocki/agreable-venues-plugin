<?php namespace AgreableVenuesPlugin;

use AgreableVenuesPlugin\Helper;
$ns = Helper::get('agreable_namespace');

if( function_exists('register_field_group') ):

register_field_group(array (
  'key' => "options_group_{$ns}",
  'title' => 'Venues Settings',
  'fields' => array (
    array (
      'key' => "{$ns}_plugin_map_slug",
      'label' => 'Venues Map URL prefix',
      'name' => 'venues_map_slug',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'map',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => "{$ns}_plugin_parse_app_id",
      'label' => 'Parse Application ID',
      'name' => 'venues_parse_app_id',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => "{$ns}_plugin_parse_js_key",
      'label' => 'Parse JavaScript Key',
      'name' => 'venues_parse_js_key',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options',
      ),
      array (
        'param' => 'current_user_role',
        'operator' => '==',
        'value' => 'administrator',
      ),
    ),
  ),
  'menu_order' => 1,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
));

endif;
