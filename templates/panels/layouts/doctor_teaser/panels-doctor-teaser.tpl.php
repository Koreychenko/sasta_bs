<div class="panel-display panel-doctor-teaser clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="top-title">
    <?php print $content['top']; ?>
  </div>
  <div class="doctor-body clearfix">
    <div class="left-column">
      <?php print $content['left']; ?>
    </div>
    <div class="right-column">
      <?php print $content['right']; ?>
    </div>
  </div>
</div>
