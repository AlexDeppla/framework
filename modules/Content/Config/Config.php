<?php

/*
|--------------------------------------------------------------------------
| Module Configuration
|--------------------------------------------------------------------------
|
| Here is where you can register all of the Configuration for the module.
*/

return array(

    /*
    |--------------------------------------------------------------------------
    | The Frontpage Name
    |--------------------------------------------------------------------------
    |
    */

    'frontpage' => null,

    /*
    |--------------------------------------------------------------------------
    | The Attachments Configuration
    |--------------------------------------------------------------------------
    |
    */

    'attachments' => array(
        // Where the uploaded files are stored.
        'path'      => base_path('assets/files'),

        // Where the (generated) thumbnails are stored.
        'thumbPath' => base_path('assets/files/thumbnails'),
    ),

    /*
    |--------------------------------------------------------------------------
    | Registered Shortcodes
    |--------------------------------------------------------------------------
    |
    */

    'shortcodes' => array(
//        'foo' => App\Shortcodes\FooShortcode::class,
    ),

    /*
    |--------------------------------------------------------------------------
    | The Translated Names of the Post Types and Statuses
    |--------------------------------------------------------------------------
    |
    */

    'labels' => array(

        // Posts.
        'post' => array(
            'name'  => __d('content', 'Post'),
            'title' => __d('content', 'Posts'),
        ),
        'page' => array(
            'name'  => __d('content', 'Page'),
            'title' => __d('content', 'Pages'),
        ),
        'block' => array(
            'name'  => __d('content', 'Block'),
            'title' => __d('content', 'Blocks'),
        ),

        // Taxonomies.
        'category' => array(
            'name'  => __d('content', 'Category'),
            'title' => __d('content', 'Categories'),
        ),
        'tag' => array(
            'name'  => __d('content', 'Tag'),
            'title' => __d('content', 'Tags'),
        ),

        // Custom Link
        'custom' => array(
            'name'  => __d('content', 'Custom Link'),
            'title' => __d('content', 'Custom Links'),
        ),
    ),

    'statuses' => array(
        'draft'           => __d('content', 'Draft'),
        'publish'         => __d('content', 'Published'),
        'password'        => __d('content', 'Password protected'),
        'private'         => __d('content', 'Private'),
        'private-draft'   => __d('content', 'Draft'),
        'private-review'  => __d('content', 'Pending Review'),
        'review'          => __d('content', 'Pending Review'),
    ),

);
