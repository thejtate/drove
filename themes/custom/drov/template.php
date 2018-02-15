<?php
/**
 * Created by PhpStorm.
 * User: taki
 * Date: 8/16/16
 * Time: 1:14 PM
 */
define('WEBFORM_PRODUCT_REG_NID', '12');
/**
 * Implements template_preprocess_html().
 */
function drov_preprocess_html(&$vars) {
  $node = menu_get_object();
  if (!empty($node)) {
    switch ($node->type) {
      case 'careers':
        $vars['classes_array'][] = 'page-careers';
        break;
      case 'contact':
        $vars['classes_array'][] = 'page-contact';
        break;
      case 'sustainability':
        $vars['classes_array'][] = 'page-sustainability';
        break;
      case 'products_reg':
        $vars['classes_array'][] = 'page-productregistration';
        break;
    }
  }
}

/**
 * Implements hook_preprocess_page().
 */
function drov_preprocess_page(&$vars) {
  if (drupal_is_front_page()) {
    $path = drupal_get_path('theme', 'drov');

    drupal_add_js($path . '/js/ImageRotator.js', array('scope' => 'footer'));
    drupal_add_js($path . '/js/SpinScroll.js', array('scope' => 'footer'));
    drupal_add_js($path . '/js/control.js', array('scope' => 'footer'));
  }

  $node = menu_get_object();
  $vars['content_wrapper'] = '';
  $vars['content_class'] = '';
  if (empty($node)) {
    $vars['content_wrapper'] = "content-wrapper container";
    $vars['content_class'] = "content";
  }

  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__' . $node->type;
  }


  if (!empty($node)) {
    switch ($node->type) {
      case 'who_we_are':
        $vars['title'] = '';
        break;
      case 'products_reg':
        $vars['title'] = '';
        if (!empty($node->field_common_multiline_title_txt)) {
          $vars['multiline_title'] = field_view_field('node', $node, 'field_common_multiline_title_txt', 'default');
        }
        break;
    }
    //page top content for rendering in page template
    if (!empty($node->field_top_image)) {
      $vars['top_image'] = file_create_url($node->field_top_image[LANGUAGE_NONE][0]['uri']);
    }

    if (!empty($node->field_common_top_text)) {
      $vars['top_text'] = field_view_field('node', $node, 'field_common_top_text', 'default');
    }
    if (!empty($node->field_homepage_video_webm_file)) {
      $vars['home_webm_video'] = file_create_url($node->field_homepage_video_webm_file[LANGUAGE_NONE][0]['uri']);
    }
    if (!empty($node->field_homepage_video_mp4_file)) {
      $vars['home_mp4_video'] = file_create_url($node->field_homepage_video_mp4_file[LANGUAGE_NONE][0]['uri']);
    }
    if (!empty($node->field_home_video_poster_image)) {
      $vars['home_poster_video'] = file_create_url($node->field_home_video_poster_image[LANGUAGE_NONE][0]['uri']);
    }
  }
}

function drov_preprocess_node(&$vars) {
  $node = menu_get_object();
  if (!empty($node->field_who_we_are_bottom_image)) {
    $vars['wwa_btm_image'] = file_create_url($node->field_who_we_are_bottom_image[LANGUAGE_NONE][0]['uri']);
  }
  //hide top page elements. We will display it in the page template
  if (!empty($vars['content']['field_top_image'])) {
    hide($vars['content']['field_top_image']);
  }
  if (!empty($vars['content']['field_common_top_text'])) {
    hide($vars['content']['field_common_top_text']);
  }

  if (!empty($vars['content']['field_homepage_video_webm_file'])) {
    hide($vars['content']['field_homepage_video_webm_file']);
  }
  if (!empty($vars['content']['field_homepage_video_mp4_file'])) {
    hide($vars['content']['field_homepage_video_mp4_file']);
  }
  if (!empty($vars['content']['field_home_video_poster_image'])) {
    hide($vars['content']['field_home_video_poster_image']);
  }
  if (!empty($vars['content']['field_who_we_are_bottom_image'])) {
    hide($vars['content']['field_who_we_are_bottom_image']);
  }
}

/**
 * Implements hook_form_alter().
 */
function drov_form_alter(&$form, &$form_state, $form_id) {
  if (strpos($form_id, 'webform_client_form_') !== FALSE) {
    $node = $form['#node'];
    switch ($node->type) {
      case 'products_reg':
        custom_wrap_item($form['submitted']['company_name'], 'form-type-text');
        custom_wrap_item($form['submitted']['company_address'], 'form-type-text');
        custom_wrap_item($form['submitted']['location'], 'row');
        custom_wrap_item($form['submitted']['location']['city'], 'form-type-text col-sm-6');
        custom_wrap_item($form['submitted']['location']['state'], 'form-type-text col-sm-3');
        custom_wrap_item($form['submitted']['location']['zip'], 'form-type-text col-sm-3');
        custom_wrap_item($form['submitted']['contacts'], 'row');
        custom_wrap_item($form['submitted']['contacts']['phone'], 'form-type-text col-sm-6');
        custom_wrap_item($form['submitted']['contacts']['email'], 'form-type-text col-sm-6');
        custom_wrap_item($form['submitted']['product_info']['add']['product_serial_number'], 'form-type-text col-sm-6');
        custom_wrap_item($form['submitted']['product_info']['add']['product_name'], 'form-type-text col-sm-6');
        custom_wrap_item($form['submitted']['where_product_purchase'], 'form-type-text');
        custom_wrap_item($form['submitted']['was_product_installed_at'], 'form-type-radio');
        custom_wrap_item($form['submitted']['required_field'], 'desc');
        custom_wrap_item($form['actions']['submit'], 'btn-wrap style-b');
        $form['actions']['submit']['#attributes']['class'][] = 'btn';
        $form['actions']['#suffix'] = '<div class="desc"> <span class="form-required">*</span>' . 'Required Field' . '</div>';
        break;
      case 'webform':
        $form['submitted']['rga_']['#default_value'] = date('mdy-His');
        $form['submitted']['rga_']['#attributes']['readonly'] = 'readonly';
        $prefix = '<div class="form-type-b">';
        $suffix = '</div>';
        $form['#prefix'] = $form['#prefix'] ? $form['#prefix'] . $prefix : $prefix;
        $form['#suffix'] = $form['#suffix'] ? $form['#suffix'] . $suffix : $suffix;
        break;
    }
  }
}

/**
 * @param $element
 * @param $classes
 * @param string $tag
 *
 * funnel function for theme elements
 */
function custom_wrap_item(&$element, $classes, $tag = 'div') {
  if (!empty($element)) {
    $element['#prefix'] = '<' . $tag . (!empty($classes) ? ' class="' . $classes . '">' : '>') . (array_key_exists('#prefix', $element) ? $element['#prefix'] : '');
    $element['#suffix'] = (array_key_exists('#suffix', $element) ? $element['#suffix'] : '') . '</' . $tag . '>';
  }
}