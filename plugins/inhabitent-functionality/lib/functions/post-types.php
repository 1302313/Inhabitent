<?php

/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type

$cpt_label = 'Product';

function inhabitent_cpt_product()
{

    $labels = array(
        'name'                  => 'Products',
        'singular_name'         => 'Product',
        'menu_name'             => 'Products',
        'name_admin_bar'        => 'Product',
        'archives'              => 'Product Archives',
        'attributes'            => 'Product Attributes',
        'parent_item_colon'     => 'Parent Product:',
        'all_items'             => 'All Products',
        'add_new_item'          => 'Add New Product',
        'add_new'               => 'Add New Product',
        'new_item'              => 'New Product',
        'edit_item'             => 'Edit Product',
        'update_item'           => 'Update Product',
        'view_item'             => 'View Product',
        'view_items'            => 'View Products',
        'search_items'          => 'Search Product',
        'not_found'             => 'Product Not found',
        'not_found_in_trash'    => 'Product Not found in Trash',
        'featured_image'        => 'Product Image',
        'set_featured_image'    => 'Set Product image',
        'remove_featured_image' => 'Remove Product image',
        'use_featured_image'    => 'Use as Product image',
        'insert_into_item'      => 'Insert into Product',
        'uploaded_to_this_item' => 'Uploaded to this Product',
        'items_list'            => 'Products list',
        'items_list_navigation' => 'Products list navigation',
        'filter_items_list'     => 'Filter Products list',
    );
    $args = array(
        'label'                 => 'Product',
        'description'           => 'A product post type for hipster camping',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-buddicons-replies',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'template_lock'         => 'all',
        'template' => array(array('core/paragraph', array('placeholder' => 'Add product description here...',)),),
    );
    register_post_type('product', $args);
}
add_action('init', 'inhabitent_cpt_product', 0);
