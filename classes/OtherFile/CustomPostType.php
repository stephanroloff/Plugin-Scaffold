<?php

namespace OtherNamespace;

if(! class_exists('OtherNamespace\CustomPostType')){
    class CustomPostType {

        function __construct(){
            add_action( 'init', array($this, 'custom_post_type_projects') );
        }

        function custom_post_type_projects() {
            // Set UI labels for Custom Post Type
                $labels = array(
                    'name'                => _x( 'Projects', 'Post Type General Name', 'default-theme' ),
                    'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'default-theme' ),
                    'menu_name'           => __( 'Projects', 'default-theme' ),
                    'parent_item_colon'   => __( 'Parent Project', 'default-theme' ),
                    'all_items'           => __( 'All Projects', 'default-theme' ),
                    'view_item'           => __( 'View Project', 'default-theme' ),
                    'add_new_item'        => __( 'Add New Project', 'default-theme' ),
                    'add_new'             => __( 'Add New', 'default-theme' ),
                    'edit_item'           => __( 'Edit Project', 'default-theme' ),
                    'update_item'         => __( 'Update Project', 'default-theme' ),
                    'search_items'        => __( 'Search Project', 'default-theme' ),
                    'not_found'           => __( 'Not Found', 'default-theme' ),
                    'not_found_in_trash'  => __( 'Not found in Trash', 'default-theme' ),
                );
                
            // Set other options for Custom Post Type
                
                $args = array(
                    'label'               => __( 'Projects', 'default-theme' ),
                    'description'         => __( 'Project news and reviews', 'default-theme' ),
                    'labels'              => $labels,
                    // Features this CPT supports in Post Editor
                    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
                    // You can associate this CPT with a taxonomy or custom taxonomy.
                    'taxonomies'          => array( 'genres', 'category' ),
                    /* A hierarchical CPT is like Pages and can have
                    * Parent and child items. A non-hierarchical CPT
                    * is like Posts.
                    */
                    'hierarchical'        => false,
                    'public'              => true,
                    'show_ui'             => true,
                    'show_in_menu'        => true,
                    'show_in_nav_menus'   => true,
                    'show_in_admin_bar'   => true,
                    'menu_position'       => 5,
                    'menu_icon'           => 'dashicons-portfolio',
                    'can_export'          => true,
                    'has_archive'         => true, // Para agregar un archivo archive.html
                    // 'rewrite' => array('slug' => 'projekte'),
                    'exclude_from_search' => false,
                    'publicly_queryable'  => true,
                    'capability_type'     => 'post',
                    'show_in_rest' => true,
                    'template' => array(
                    array( 'core/pattern', array(
                        'slug' => 'theme-slug/el-patron',
                    ) ),
                    )
                );
                
                // Registering your Custom Post Type
                register_post_type( 'Projects', $args );
            
            }
    }
}




