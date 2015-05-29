<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
<div class="views-row views-row-2 views-row-even views-row-last">

  <div class="views-field views-field-name">        <span class="field-content"><a href="/taxonomy/term/3" class="vtaf-link" rel="3"><img src="http://alfavit-mebel72.sastasoft.ru/sites/default/files/alpina-3.png"></a></span>  </div>  </div>
