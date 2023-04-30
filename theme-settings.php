<?php

/**
 * @file
 * Theme settings form for newTheme theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function newtheme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['newtheme'] = [
    '#type' => 'details',
    '#title' => t('newTheme'),
    '#open' => TRUE,
  ];

  $form['newtheme']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
