<?php
/**
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function parallax_form_system_theme_settings_alter(&$form, &$form_state) {
 $form['parallax_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Parallax Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
 $form['parallax_settings']['banner'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Banner'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
 $form['parallax_settings']['banner']['banner_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Banner Headline'),
    '#default_value' => theme_get_setting('banner_head','parallax'),
  );
  $form['parallax_settings']['banner']['banner_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Banner Description'),
    '#default_value' => theme_get_setting('banner_desc','parallax'),
  );
  $form['parallax_settings']['banner']['banner_button_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Button label'),
    '#default_value' => theme_get_setting('banner_button_label','parallax'),
  );
  $form['parallax_settings']['banner']['banner_url'] = array(
    '#type' => 'url',
    '#title' => t('Banner URL'),
    '#default_value' => theme_get_setting('banner_url','parallax'),
  );
  $form['parallax_settings']['banner']['bannerimage'] = array(
    '#markup' => t('To change the Banner Images, Replace the banner-image in the images folder of the theme folder.'),
  );
}
