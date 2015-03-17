<?php

class NI_Events_Shortcodes {
    
        
    /**
     * Create new shortcodes for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function __construct() {
        
        
        add_shortcode( 'ni-events', array( &$this, 'niEvents' ) );
        
        
    }
    
    /**
     * Return the appropriate view for our testimonial
     *
     * @param  array  $args
     * @return view
     * @added 1.0
     */
    
    public function niEvents( $args ) {
        
        
        return NI_Events_View::make( 'events', $args );
        
        
    }
    
}