<?php

/**
 * Adds SEO fields to the Theme options page
 *
 * @package blockhaus
 */

function blockhaus_get_cpts() {
  $args = array(
    'public'   => true,
    '_builtin' => false
   );
  
  $output = 'names'; // 'names' or 'objects' (default: 'names')
  $operator = 'and'; // 'and' or 'or' (default: 'and')
    
  $post_types = get_post_types( $args, $output, $operator );

  return $post_types;
}

add_action('acf/init', 'blockhaus_get_cpts');



function blockhaus_acf_add_seo_field_groups() {

  if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
      'key' => 'group_62b17d61f1a29',
      'title' => 'Content Pages',
      'fields' => array(
        array(
          'key' => 'field_62b19ec8d2bb4',
          'label' => 'Posts / Blog Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17d75c24f9',
          'label' => 'Header',
          'name' => 'post_header',
          'type' => 'image',
          'instructions' => 'Set the image that will display at the top of your main Blog page.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b1a0ba1c8d3',
          'label' => 'Description',
          'name' => 'post_page_description',
          'type' => 'textarea',
          'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("post_page_description", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Add a short description for your Blog/Posts page',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
        array(
          'key' => 'field_62b1a61a126c9',
          'label' => 'Use transparent image layout',
          'name' => 'post_page_transparent_header',
          'type' => 'true_false',
          'instructions' => 'If you are using an image with a transparent background, you can turn this setting on to adapt the layout to show the header background colour behind the image.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
          'ui' => 1,
          'ui_on_text' => '',
          'ui_off_text' => '',
        ),
        array(
          'key' => 'field_62b19e4443072',
          'label' => 'Stories Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17d9a5d6a4',
          'label' => 'Header',
          'name' => 'story_header',
          'type' => 'image',
          'instructions' => 'Set the image that will display at the top of your main Stories page.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b1a13c12c4b',
          'label' => 'Description (copy)',
          'name' => 'story_page_description',
          'type' => 'textarea',
          'instructions' => '<p>Add a short description for your Stories page. To use this in a theme template, use the following code:</p><code>$description = get_field("story_page_description", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Add a short description for your Stories page',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
        array(
          'key' => 'field_62b1a46314e37',
          'label' => 'Use transparent image layout',
          'name' => 'story_page_transparent_header',
          'type' => 'true_false',
          'instructions' => 'If you are using an image with a transparent background, you can turn this setting on to adapt the layout to show the header background colour behind the image.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
          'ui' => 1,
          'ui_on_text' => '',
          'ui_off_text' => '',
        ),
        array(
          'key' => 'field_62b19f27e83e7',
          'label' => 'Projects Page Settings',
          'name' => '',
          'type' => 'accordion',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'open' => 1,
          'multi_expand' => 1,
          'endpoint' => 0,
        ),
        array(
          'key' => 'field_62b17daf5d6a5',
          'label' => 'Header',
          'name' => 'project_header',
          'type' => 'image',
          'instructions' => 'Set the image that will display at the top of your main Projects page.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => 'projects-header',
          ),
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array(
          'key' => 'field_62b1a112d50ae',
          'label' => 'Description',
          'name' => 'project_page_description',
          'type' => 'textarea',
          'instructions' => '<p>Add a short description for your Projects page. To use this in a theme template, use the following code:</p><code>$description = get_field("project_page_description", "options");</code>',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Add a short description for your Projects page',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
        array(
          'key' => 'field_62b1a61e126ca',
          'label' => 'Use transparent image layout',
          'name' => 'project_page_transparent_header',
          'type' => 'true_false',
          'instructions' => 'If you are using an image with a transparent background, you can turn this setting on to adapt the layout to show the header background colour behind the image.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
          'ui' => 1,
          'ui_on_text' => '',
          'ui_off_text' => '',
        ),
      array(
        'key' => 'field_62b19e4450901',
        'label' => 'Resources Page Settings',
        'name' => '',
        'type' => 'accordion',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'open' => 1,
        'multi_expand' => 1,
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_62b17d9a60902',
        'label' => 'Header',
        'name' => 'resource_header',
        'type' => 'image',
        'instructions' => 'Set the image that will display at the top of your main Resources page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_62b1a13c70903',
        'label' => 'Description',
        'name' => 'resource_page_description',
        'type' => 'textarea',
        'instructions' => '<p>Add a short description for your Resources page. To use this in a theme template, use the following code:</p><code>$description = get_field("resource_page_description", "options");</code>',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'Add a short description for your Resources page',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
      array(
        'key' => 'field_62b1a46380904',
        'label' => 'Use transparent image layout',
        'name' => 'resource_page_transparent_header',
        'type' => 'true_false',
        'instructions' => 'If you are using an image with a transparent background, you can turn this setting on to adapt the layout to show the header background colour behind the image.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
    ),
      'location' => array(
        array(
          array(
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'theme-options',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
      'show_in_rest' => 0,
    ));
    
    endif;		
    
// if( function_exists('acf_add_local_field_group') ):

//     // get registered public custom post types
//     // $args = array(
//     //   'public'   => true,
//     //   '_builtin' => false
//     //  );
    
//     // $output = 'names'; // 'names' or 'objects' (default: 'names')
//     // $operator = 'and'; // 'and' or 'or' (default: 'and')
      
//    // $post_types = get_post_types( $args, $output, $operator );

//    $post_types = blockhaus_get_cpts();

//   acf_add_local_field_group(array(
    
// 	'key' => 'group_62ab5d51368f9',
// 	'title' => 'SEO Settings',
// 	'fields' => array(
// 		array(
// 			'key' => 'field_62ab5d5af11a8',
// 			'label' => 'Posts page description',
// 			'name' => 'post_page_description',
// 			'type' => 'textarea',
// 			'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("post_page_description", "options");</code>',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => 'Add a short description for your Blog/Posts page',
// 			'maxlength' => 310,
// 			'rows' => '',
// 			'new_lines' => '',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'options_page',
// 				'operator' => '==',
// 				'value' => 'theme-options',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// 	'show_in_rest' => 0,
//   ));

//   // $field_key_new = uniqid();
//   // acf_add_local_field(array(
//   //   'key' => 'field_' . $field_key_new,
//   //   'label' => 'Blog/posts page description',
//   //   'name' => 'post_page_description',
//   //   'type' => 'textarea',
//   //   'instructions' => '<p>Add a short description for your Blog/Posts page. To use this in a theme template, use the following code:</p><code>$description = get_field("post_page_description", "options");</code>',
//   //   'parent' => 'group_629de8ca1046c',
//   //   'maxlength' => 310,
//   // ));
//   $field_keys = ['field_62ab5d5af11c6', 'field_62ab5d5af11c7', 'field_62ab5d5af11c8', 'field_62ab5d5af11c9'];
//   $i = 0;
//   if ( $post_types ) { // If there are any custom public post types.
//     foreach ( $post_types  as $post_type ) { // loop through
//       $field_key = $field_keys[$i];
//       $instructions = '<p>Add a short description for your ' . ucwords($post_type) . ' page. To use this in a theme template, use the following code:</p><code>$description = get_field("' . $post_type . '_page_description", "options");</code>';
//       acf_add_local_field(array(
//         'key' => $field_key,
//         'label' => ucwords($post_type) . ' page description',
//         'name' => $post_type . '_page_description',
//         'type' => 'textarea',
//         'instructions' => $instructions,
//         'parent' => 'group_62ab5d51368f9',
//         'placeholder' => 'Add a short description for your ' . ucwords($post_type) . ' page',
//         'maxlength' => 310,
//       ));

//       $i++;
//     }
//   }

//   endif;		

}

  add_action('acf/init', 'blockhaus_acf_add_seo_field_groups');