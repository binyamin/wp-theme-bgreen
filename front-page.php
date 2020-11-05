<?php
/**
 * Front page - equivalent to https://binyam.in/index.html
 */
?>
<?php get_header(); ?>
<main class="home">
    <picture>
        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/assets/images/profile/profile@512.webp' ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/profile/profile@512.jpeg' ); ?>" alt="" width="192" height="192">
    </picture>
    <h1 class="home__title">Hi, I&CloseCurlyQuote;m Binyamin</h1>
    <p class="home__lead text--larger">Welcome to my online home</p>
    <div class="home__desc">
        <?php the_content() ?>
    </div>
    <!-- <p class="home__desc">I'm a front-end developer and college student from the US East Coast. Read more <a href="/me">about me</a>.</p> -->
</main>
<?php get_footer(); ?>