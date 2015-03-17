<?php

class NI_Events_MetaBoxMap extends NI_Events_MetaBoxBase implements NI_Events_MetaBoxInterface {
    
        
    /**
     * Create a new post type for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function display( $post, $args ) {

        wp_nonce_field( 'event-map-nonce', 'event-map-nonce' );
        
        $date = get_post_meta( $post->ID, 'event-map', true );
        
        echo "Copy over everything after the ? in the google 'Embed Map' URL<br /><br />";
        
        echo "<input type='text' 
        name='event-map' 
        class='mini-event-,ap'
        id='mini-event-map'
        style='width: 100%;'
        value='" . esc_attr( $date ) . "'
        />";
        
        
    }
    
    public function save( $id ) {
        
        if( !self::validate( $id, $_POST['event-map-nonce'], 'event-map-nonce' ) )
                return;
        
        $date = sanitize_text_field( $_POST['event-map'] );

        update_post_meta( $id, 'event-map', $date );
                
    }
    
}