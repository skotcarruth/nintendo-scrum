<?php
  $about_copy = get_sub_field('text');
  $about_image = get_sub_field('image');
  $about_logo = get_sub_field('logo');
  $image_effects = get_sub_field('image_effects');
  $image_fill = get_sub_field('image_fill');
  $image_position = get_sub_field('image_position');
  $show_button = get_sub_field('show_button');
  $button_link = get_sub_field('link');
?>

<div class="content-block section-<?php echo get_row_layout(); ?>">
  <div class="content-inner">

  <?php
    if ($about_image) :
      printf('<div class="image %s" data-scroll><figure><img src="%s" class="%s" alt="" /></figure></div>',
        'image-' . $image_position,
        $about_image['sizes']['medium'],
        'object-fit-' . $image_fill
      );
    endif;
  ?>

  <?php if ($about_copy) : ?>
    <div class="copy <?php echo 'image-' . $image_position; ?>">
      <?php
        if ($about_logo) :
          printf('<figure class="about-logo"><img src="%s" alt="" /></figure>',
            $about_logo['sizes']['medium']
          );
        endif;

        if ($about_copy['title']) :
          printf(__('<h2>%s</h2>', 'ntsp'), $about_copy['title']);
        endif;

        if ($about_copy['copy']) :
          printf(__('<p>%s</p>', 'ntsp'), $about_copy['copy']);
        endif;

        if ($show_button) :
          printf('<a href="%s" target="%s" class="link">%s</a>',
            $button_link['url'],
            $button_link['target'],
            $button_link['title']
          );
        endif;
      ?>
      <div class="gradient-bg"></div>
    </div>
  <?php endif; ?>

  </div>
</div>
