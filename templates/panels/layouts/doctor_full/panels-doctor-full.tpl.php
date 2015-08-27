<div class="panel-display panel-department clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="department-main-content clearfix">
    <div class="department-left-column"><?php print $content['left']; ?>
    <div class="doctor-info clearfix">
      <div class="doctor-info-left-column">
        <?php print $content['doc_image']; ?>
      </div>
      <div class="doctor-info-right-column">
        <?php print $content['doc_info']; ?>
      </div>
    </div>
    </div>
    <div class="department-right-column"><?php print $content['right']; ?></div>
  </div>

  <div class="department-fullwidth-border">

  </div>

  <?php if ($content['prices']): ?>
  <div class="department-fullwidth-border">
    <div class="department-main-content">
      <?php print $content['prices']; ?>
    </div>
  </div>
  <?php endif; ?>
</div>
