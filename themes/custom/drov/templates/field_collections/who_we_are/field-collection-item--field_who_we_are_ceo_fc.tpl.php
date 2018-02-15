<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="bg"></div>

<div class="container">
  <div class="row">

    <div class="img">
      <?php print render($content['field_contact_ceo_image']); ?>
    </div>
    
    <?php if (!empty($content['field_contact_ceo_mobile_img'])): ?>
      <div class="img-mobile-only">
        <?php print render($content['field_contact_ceo_mobile_img']); ?>
      </div>
    <?php endif; ?>

    <div class="col col-md-6 col-1">

      <?php if ($zebra == 'even' && !empty(trim(render($content['field_contact_ceo_text'])))): ?>
        <a href="#" class="btn-accordion"></a>
      <?php endif; ?>
      <span class="name">
       <?php print render($content['field_contact_ceo_name_txt']); ?>
      </span>
      <span class="function">
        <?php print render($content['field_contact_ceo_position_title']); ?>
      </span>

      <?php if ($zebra == 'odd' && !empty(trim(render($content['field_contact_ceo_text'])))): ?>
        <a href="#" class="btn-accordion"></a>
      <?php endif; ?>

      <?php if (!empty($content['field_contact_first_fc_tel_txt']) || !empty($content['field_contact_first_fc_email'])): ?>
        <p><?php print render($content['field_contact_first_fc_tel_txt']); ?></p>
        <p><?php print render($content['field_contact_first_fc_email']); ?></p>
      <?php endif; ?>

    </div>
    <div class="col col-md-6 col-2">
      <div class="text">
        <?php print render($content['field_contact_ceo_text']); ?>
      </div>
    </div>
  </div>
</div>
