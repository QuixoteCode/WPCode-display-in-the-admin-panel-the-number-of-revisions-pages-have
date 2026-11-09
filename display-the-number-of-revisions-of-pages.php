add_filter('manage_pages_columns', function ($columns) {
    $columns['page_revisions'] = 'Revisions';
    return $columns;
});

add_action('manage_pages_custom_column', function ($column, $post_id) {
    if ($column === 'page_revisions') {
        $revisions = wp_get_post_revisions($post_id);
        echo count($revisions);
    }
}, 10, 2);