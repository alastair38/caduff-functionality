<?php

/**
 * Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blockhaus-categories-list-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-categories-list';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>


<?php
$categories = get_categories( array(
	'orderby' => 'name',
	'parent'  => 0
) );?>

<div class="grid grid-cols-fill gap-6">
<?php
foreach ( $categories as $category ) {
  $image = get_field('image', 'category_' . $category->term_id);
  ?>

<div class="bg-neutral-light-100 flex flex-col justify-between">
  <div class="p-6 space-y-6">
  <h3 class="col-span-full text-lg font-black"><?php echo esc_html( $category->name );?></h3>
  <hr class="w-full">
  <p>
  <?php echo esc_html( $category->description );?>
  </p>
  
  <a class="rounded-md text-sm inline-block w-fit bg-contrast text-white px-6 py-2 ring-2 ring-offset-2 ring-transparent ring-offset-neutral-light-100 hover:ring-contrast focus:ring-contrast" href="<?php echo esc_url( get_category_link( $category->term_id ) );?>">View Section</a>
  
  </div>
<?php if($image):?>
    <img loading="lazy" class="object-cover object-top bg-primary h-48" width="<?php echo $image['sizes']['landscape-width'];?>" height="<?php echo $image['sizes']['landscape-height'];?>" src="<?php echo $image['sizes']['landscape'];?>" alt="<?php echo $image['alt'];?>">
  <?php 

endif;?>
</div>

<?php }
?></div>
