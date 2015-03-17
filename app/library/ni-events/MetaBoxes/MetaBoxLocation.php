<?php

class NI_Events_MetaBoxLocation extends NI_Events_MetaBoxBase implements NI_Events_MetaBoxInterface {
    
        
    /**
     * Create a new post type for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function display( $post, $args ) {

        wp_nonce_field( 'event-location-nonce', 'event-location-nonce' );
        
        $loc = get_post_meta( $post->ID, 'event-location', true );
        
        echo "<input type='text' name='event-location' id='event-location' value='" . esc_attr( $loc ) . "' />";
        
    }
    
    public function save( $id ) {
        
        if( !self::validate( $id, $_POST['event-location-nonce'], 'event-location-nonce' ) )
            return;
        
        $loc = sanitize_text_field( $_POST['event-location'] );

        update_post_meta( $id, 'event-location', $loc );
        
        
    }
    
}