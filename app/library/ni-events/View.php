<?php

class NI_Events_View {
    
        
    /**
     * Create a new view for display throughout the application
     * Users .phtml files found in the app/views folder
     *
     * @param  string  $page
     * @param mixed $data
     * @return null
     * @added 1.0
     */
    
    static function make( $page, $data ) {  
        
        ob_start();
        
            include NI_Events_Registry::get( 'config', 'plugin_dir' ) . '/app/views/' . str_replace( '.', '/', $page ) . '.phtml';
        
        return ob_get_clean();
        
    }
    
}