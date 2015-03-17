<?php

class NI_Events_MetaBoxBase {
    
    
    public static function validate( $id, $nonce, $nonceName ) {
        
        if( !isset( $nonce ) )
            return false;
        
        if ( !wp_verify_nonce( $nonce, $nonceName ) )
            return false;
        
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
                return false;

        if ( 'events' == $_POST['post_type'] ) {

            if ( !current_user_can( 'edit_page', $id ) )
                return false;
	
        } else {

            if ( ! current_user_can( 'edit_post', $id ) )
                return false;
            
        }
        
        return true;
        
    }

    
}