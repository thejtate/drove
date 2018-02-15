<?php
/**
 * @file Portal documets folders tempalte
 *
 * $parent_link
 * $folder_name
 */
?>
<div class="portal-folders">
<?php if(!empty($parent_link)): ?>
  <div class="btn-wrap back-button-wrapper">
    <?php print render($parent_link);?>
  </div>
<?php endif; ?>
<?php if(!empty($folder_name)): ?>
  <h2><?php print 'Folder: ' . render($folder_name);?></h2>
<?php endif; ?>
  <div class="b-links style-a">
    <?php if(!empty($folders_links)): ?>
    <div class="row">
      <?php foreach($folders_links as $link): ?>
        <div class="col col-sm-3">
          <div class="btn-wrap">
            <?php print render($link);?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</div>