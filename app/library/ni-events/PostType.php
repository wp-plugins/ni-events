<?php

class NI_Events_PostType {
    
        
    /**
     * Create a new post type for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function create( $type, $args ) {
        
        
        register_post_type( $type, $args );
        
        
    }
    
}