<?php /* Template Name: List Template */ ?>

<?php get_header(); ?>

<h1>List Page</h1>
<p>This is a sample item list page</p>

<ul>
    <?php wp_list_pages('exclude=10&title_li='); ?>
</ul>

<?php get_sidebar(); ?>
<?php get_footer(); ?>