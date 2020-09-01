<?php get_header(); ?>
    <main class="main-content">
      <div class="grid-wrapper">
        <?php
          while (have_posts()) {
            the_post(); ?>
            <article onclick="location.href='<?php the_permalink(); ?>'" class="recipe-card">
            <?php if (has_post_thumbnail()) { ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php } else { ?>
              <img src="https://i.picsum.photos/id/826/400/500.jpg?hmac=q3ZCuylWRDrInYxbqomN4WmimItkCHU9m-P1ZvLHDkw">
           <?php } ?>
                <h1> <?php the_title(); ?> </h1>
                <!-- <time>2h</time> -->
            </article>
          <?php }
            get_footer(); ?>
      </div>
        </main>
</body>

</html>
