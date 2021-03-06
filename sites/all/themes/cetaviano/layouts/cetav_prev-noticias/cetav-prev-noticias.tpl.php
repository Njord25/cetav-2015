<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a prev-noticias for CETAV panel display layout.
 */
?>
<div class="panel-cetav-prev-noticias">
  <?php if ($content['wide']): ?>
    <div class="panel-header">
      <?php print $content['wide']; ?>
    </div>
  <?php endif ?>
  <div class="section-wide">
    <div class="grid-width">
      <div class="panel-left-column container-news-prev">
        <?php print $content['left']; ?>
      </div>
      <div class="panel-right-column aside">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>
</div>

