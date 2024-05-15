<?php get_header(); ?>

    <section class="post-content ">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
        <div class="container mx-auto flex justify-center px-2 sm:px-7 lg:px-32">
            <div class="w-11/12 sm:w-10/12 bg-white p-3 sm:p-6 rounded-lg mt-5">
                <div class="post-thumbnail">
                    <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                </div>
                <h2 class="my-5 text-2xl sm:text-4xl lg:text-5xl font-bold">
                <?php the_title(); ?> 
                </h2>
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
            <p> <?php __('No Posts Found'); ?> </p>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>