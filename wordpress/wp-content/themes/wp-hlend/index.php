<?php get_header(); ?>



            <div class="section">
    <div class="page-container">
              <article>
    <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

      </article>
    </div>
    </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
