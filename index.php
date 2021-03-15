<?php get_header(); ?>
<main class="main-content">
  <?php
  $frontpage_sections = array("recently-added", "mains", "untested")
  ?>
  <?php foreach ($frontpage_sections as $section) {
    $post_query = new WP_Query(
      array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
      )
    );
    switch ($section) {
      case 'recently-added':
        $category_heading = "Recently Added";
        break;
      case 'mains':
        $post_query->set('category_name', 'mains');
        $category_heading = "Mains";
        break;
      case 'untested':
        $post_query->set('category_name', 'untested');
        $category_heading = "Untested";
        break;
      default:
        # Nothing default case not needed?
        break;
    } ?>
    <div class='<?php echo "cat-$section" ?>'>
      <span class="category-heading">
        <h1><?php echo "$category_heading" ?></h1>
      </span>
      <?php

      while ($post_query->have_posts()) :
        $post_query->the_post(); ?>
        <article onclick=" location.href='<?php the_permalink(); ?>'" class=" recipe-card">
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <?php } else { ?>
            <img src="https://via.placeholder.com/960x540">
          <?php } ?>
          <h1> <?php the_title(); ?> </h1>
        </article>
      <?php endwhile; ?>
    </div>
  <?php } ?>
</main>
</body>

</html>