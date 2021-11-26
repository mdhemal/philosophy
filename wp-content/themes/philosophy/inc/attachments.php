<?php

define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance


 if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
    $post_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    if(!$post_id || get_post_format($post_id) !== 'gallery') {
		return;
	}
}


function philosophy_attachments_slider($attachments) {
	  $fields         = array(
	    array(
	      'name'      => 'gallery_title',                         // unique field name
	      'type'      => 'text',                          // registered field type
	      'label'     => __( 'Title', 'attachments' ),    // label to display
	      'default'   => 'title',                         // default value upon selection
	    )
	  );
	 $args = array(
    'label'         => 'Gallery',
    'post_type'     => array( 'post'),
    'priority'      => 'high',
    'button_text'   => __( 'Attach Gallery', 'attachments' ),
    'fields'        => $fields,
  );
 $attachments->register( 'gallery', $args ); // unique instance name
}
add_action( 'attachments_register', 'philosophy_attachments_slider' );

