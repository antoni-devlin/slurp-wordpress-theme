<?php get_header(); ?>
<main class="main-content">
  <div class='cat-recently-added'>
    <?php
    $recently_added = new WP_Query(
      array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC'
      )
    );
    if ($recently_added->have_posts()) : ?>
      <span class="category-heading">
        <h1>Recently Added</h1>
      </span>
      <?php
      while ($recently_added->have_posts()) :
        $recently_added->the_post(); ?>

        <article onclick="location.href='<?php the_permalink(); ?>'" class="recipe-card">
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <?php } else { ?>
            <img src="https://i.picsum.photos/id/826/400/500.jpg?hmac=q3ZCuylWRDrInYxbqomN4WmimItkCHU9m-P1ZvLHDkw">
          <?php } ?>
          <h1> <?php the_title(); ?> </h1>
        </article>
        <?php get_footer(); ?>
    <?php endwhile;
    endif; ?>
  </div>
  <div class='cat-mains'>
    <?php
    $mains_posts = new WP_Query(
      array(
        'posts_per_page' => 4,
        'category_name' => 'mains',
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC'
      )
    );
    if ($mains_posts->have_posts()) : ?>
      <span class="category-heading">
        <h1>Mains</h1>
      </span>
      <?php
      while ($mains_posts->have_posts()) :
        $mains_posts->the_post(); ?>

        <article onclick="location.href='<?php the_permalink(); ?>'" class="recipe-card">
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <?php } else { ?>
            <img src="https://i.picsum.photos/id/826/400/500.jpg?hmac=q3ZCuylWRDrInYxbqomN4WmimItkCHU9m-P1ZvLHDkw">
          <?php } ?>
          <h1> <?php the_title(); ?> </h1>
        </article>
        <?php get_footer(); ?>
    <?php endwhile;
    endif; ?>
  </div>
  <div class='cat-untested'>
    <?php
    $untested_posts = new WP_Query(
      array(
        'posts_per_page' => 4,
        'category_name' => 'untested',
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC'
      )
    );
    if ($untested_posts->have_posts()) : ?>
      <span class="category-heading">
        <h1>Untested</h1>
      </span>
      <?php while ($untested_posts->have_posts()) :
        $untested_posts->the_post(); ?>

        <article onclick="location.href='<?php the_permalink(); ?>'" class="recipe-card">
          <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <?php } else { ?>
            <img src="https://i.picsum.photos/id/826/400/500.jpg?hmac=q3ZCuylWRDrInYxbqomN4WmimItkCHU9m-P1ZvLHDkw">
          <?php } ?>
          <h1> <?php the_title(); ?> </h1>
        </article>
        <?php get_footer(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</main>
</body>

</html>