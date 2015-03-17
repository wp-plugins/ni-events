<?php

class NI_Events_MetaBoxDateTo extends NI_Events_MetaBoxBase implements NI_Events_MetaBoxInterface {
    
        
    /**
     * Create a new post type for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function display( $post, $args ) {

        wp_nonce_field( 'event-date-to-nonce', 'event-date-to-nonce' );
        
        $date = get_post_meta( $post->ID, 'event-date-to', true );
        
        echo "<input type='text' 
        name='event-date-to' 
        class='mini-event-date-to'
        id='mini-event-date-to'
        value='" . esc_attr( $date ) . "'
        />";
        
        
    }
    
    public function save( $id ) {
        
        if( !self::validate( $id, $_POST['event-date-to-nonce'], 'event-date-to-nonce' ) )
                return;
        
        $date = sanitize_text_field( $_POST['event-date-to'] );

        update_post_meta( $id, 'event-date-to', $date );
                
    }
    
}