<?php
/*
Plugin Name: Cleanup Starter Content
*/

register_activation_hook(__FILE__, function () {
    $query = new WP_Query([
        'post_type'      => 'any',
        'posts_per_page' => -1,
        'post_status'    => 'any',
    ]);

    foreach ($query->posts as $post) {
        wp_delete_post($post->ID, true);
    }
});
