<?php

function mine_published_only($views) {
 
  unset($views['all']);
  unset($views['draft']);
  unset($views['pending']);
 
  return $views;
}
 
function only_own_posts_parse_query( $wp_query ) {
    if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false ) {
      global $current_user;
      $wp_query->set( 'author', $current_user->id );
     }
}
 
if (current_user_can('author' or 'contributor') || current_user_can('author')) {
  add_filter('views_edit-post', 'mine_published_only');
  add_filter('parse_query', 'only_own_posts_parse_query' );
}

?>