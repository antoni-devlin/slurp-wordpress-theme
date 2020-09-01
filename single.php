<?php get_header();

while (have_posts()) {
  the_post(); ?>
    <main class="main-content">
        <header>
        </header>
        <div class="wrapper">
            <h1 class="recipe-name"><?php the_title();  ?></h1>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <h2>Ingredients</h2>
            <ul class="ingredients" data-columns="2">
                <li>Ingredient 1</li>
                <li>Ingredient 2</li>
                <li>Ingredient 3</li>
            </ul>
            <div class="method">
                <h2>Method</h2>
                <?php the_content(); ?>
            </div>
        </div>
    </main>
<?php }; 

get_footer();  ?>
