<?php

class NI_Events_MetaBoxDateFrom extends NI_Events_MetaBoxBase  implements NI_Events_MetaBoxInterface {
    
        
    /**
     * Create a new post type for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function display( $post, $args ) {

        wp_nonce_field( 'event-date-from-nonce', 'event-date-from-nonce' );
        
        $date = get_post_meta( $post->ID, 'event-date-from', true );
        
        echo "<input type='text' 
        name='event-date-from' 
        class='mini-event-date-from'
        id='mini-event-date-from'
        value='" . esc_attr( $date ) . "'
        />";
        
        
    }
    
    public function save( $id ) {
        
        if( !self::validate( $id, $_POST['event-date-from-nonce'], 'event-date-from-nonce' ) )
                return;
        
        $date = sanitize_text_field( $_POST['event-date-from'] );

        update_post_meta( $id, 'event-date-from', $date );
                
    }
    
}