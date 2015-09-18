<?php
  /* Template Name: States */
  get_header();
  $taxonomyTerms = get_terms('state', array(
    'orderby' => 'name',
    'order' => 'asc',
    'hide_empty' => false
  ));
?>

<div id="map" style="width: 100%; height: 600px;"></div>
<style type="text/css">
path {
  stroke-linejoin: round;
  stroke-linecap: round;
}
.states.active path {
  visibility: hidden;
}
.states.active path.active {
  visibility: visible;
}

.districts {
  fill: none;
  stroke: blue;
  stroke-width: 1px;
}
.districts.active path:hover {
  fill: black;
}

.districts.active {
  stroke: white;
}

.states path {
  fill: red;
  stroke: white;
  stroke-width: 1px;
}
.states path:hover {
  fill: yellow;
}
.state-boundaries {
  stroke: red;
  stroke-width: 2px;
  fill: orange;
}
</style>

<?php foreach ($taxonomyTerms as $term): ?>
  <div>
    <h2><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></h2>
  </div>
<?php endforeach; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.19/topojson.min.js"></script>

<?php get_footer(); ?>
