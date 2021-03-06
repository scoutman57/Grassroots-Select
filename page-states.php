<?php
  /* Template Name: States */
  get_header();
  $taxonomyTerms = get_terms('state', array(
    'orderby' => 'name',
    'order' => 'asc',
    'hide_empty' => false
  ));
?>

<?php foreach ($taxonomyTerms as $term): ?>
  <div>
    <h2><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></h2>
  </div>
<?php endforeach; ?>

<?php get_footer(); ?>
