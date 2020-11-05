<?php get_header(); ?>
<main>
    <?php
        while ( have_posts() ) : the_post();
    ?>
        <article class="h-entry">
            <header class="post__header">
                <h1 class="post__title p-name"><?php the_title() ?></h1>
                <p class="post__details">Published on
                    <a href="<?php the_permalink() ?>" class="u-url">
                        <time class="dt-published" datetime="<?php the_time('Y-m-d') ?>">
                            <?php the_time('F j, Y') ?>
                        </time>
                    </a>
                    &bull;
                    <span class="post__tags">
                        <?php
                            $terms = get_terms('post_tag');
                            foreach($terms as $term):
                                $name = $term->name;
                                _e(
                                    "<a href=\"/blog?filter={$name}\" class=\"chip\">"
                                    .'<b aria-label="tagged as">#</b>'
                                    .'<span class="p-category">'
                                    .$name
                                    .'</span></a>'
                                );
                            endforeach;
                        ?>
                        <a href="/blog" class="p-category" hidden>article</a>
                    </span>
                </p>
            </header>
            <section class="e-content">
                <?php the_content() ?>
            </section>
            <!-- Webmentions go here -->
            <div class="post-footer">
                <p class="h-card p-author" hidden>
                    <a href="https://binyam.in" class="p-name u-url" rel="author">Binyamin Green</a>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/profile/profile@512.jpeg' ); ?>" class="u-photo">
                </p>
                <a href="#top" class="sr-only">Top</a>
            </div>
        </article>
    <?php endwhile ?>
</main>
<?php get_footer(); ?>