<?php

class NI_Events_MetaBox {
    
        
    /**
     * Create a new post type for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function create( 
            $id = '', 
            $title = '', 
            $callback = '', 
            $post_type = '', 
            $context = 'advanced', 
            $priority = 'default', 
            $callback_args = null 
            ) 
    {
        
        add_meta_box( $id, $title, $callback, $post_type, $context, $priority, $callback_args );
        
        
    }
    
}