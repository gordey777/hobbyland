<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
 <?php woocommerce_content(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
