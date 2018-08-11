<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 *
 * @ingroup views_templates
 */
?>
<div <?php if ($classes): ?> class="<?php print $classes; ?>"<?php endif ?><?php print $attributes; ?>>
   <?php if (!empty($title) || !empty($caption)): ?>
     <div><?php print $caption . $title; ?></div>
  <?php endif; ?>
  <div>
    <?php foreach ($rows as $row_count => $row): ?>
    <div <?php if ($row_classes[$row_count]): ?> class="member-container <?php print implode(' ', $row_classes[$row_count]); ?>"<?php endif; ?>>
      <div class="member-information-container row">
        <div class="small-6 medium-3 columns fed-image member-photo">
          <div class="fed-header"><?php print $header['field_image']; ?></div>
          <?php print $rows[$row_count]['field_image']; ?>
        </div>
        <div class="small-6 medium-9 columns fed-contact-info">
          <div class="fed-header"><?php print $header['field_email']; ?></div>
          <?php print $rows[$row_count]['field_email']; ?>
        </div>
        <div class="small-12 medium-9 columns fed-expert-areas">
          <div class="fed-header strong"><?php print $header['field_expert_areas']; ?></div>
          <?php print $rows[$row_count]['field_expert_areas']; ?>
        </div>
      </div> 
      <div class="fed-related-articles m-t-15">
        <?php if (!empty($rows[$row_count]['news_count'])): ?>
          <div class="fed-related-news">
            <div class="fed-header"><?php print $header['title_field']; ?></div>
            <?php print $rows[$row_count]['title_field']; ?>
            <div><?php print $rows[$row_count]['view_all']; ?></div>
          </div>
        <?php endif; ?>
        <?php if (!empty($rows[$row_count]['in_the_news_count'])): ?>  
        <div class="fed-related-in-the-news">
          <div class="fed-header"><?php print $header['field_link']; ?></div>
          <?php print $rows[$row_count]['field_link']; ?>
          <div><?php print $rows[$row_count]['view_all_news']; ?></div>
        </div>
        <?php endif; ?>
      </div>  
    </div>
    <?php endforeach; ?>
  </div>
</div>
