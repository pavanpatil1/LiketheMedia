<?php
// function post_published_notification() {
//     global $post;
//     $author = $post->post_author; /* Post author ID. */
//     $name = get_the_author_meta( 'display_name', $author );
//     $email = get_the_author_meta( 'user_email', $author );
//     $title = $post->post_title;
//     $permalink = get_permalink( $post_id );
//     $edit = get_edit_post_link( $post_id, '' );
//     $to[] = sprintf( '%s <%s>', $name, $email );
//     $subject = sprintf( 'Published: %s', $title );
//     $message = sprintf ('Congratulations, %s! Your article "%s" has been published.' . "\n\n", $name, $title );
//     $message .= sprintf( 'View: %s', $permalink );
//     $headers[] = '';
//     wp_mail( $to, $subject, $message, $headers );
// } 
// add_action( 'publish_post', 'post_published_notification');

?>