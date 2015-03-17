<?php

class NI_Events_InstallController extends NI_Events_BaseController {
    
    
    /**
     * Prepare our Installation Options
     *
     * @return null
     * @added 2.0
     */
    
    public function __construct() {
        
        
        register_activation_hook( __FILE__, array( &$this, 'install' ) );
        
        
    }
    
        
    /**
     * Sets our initial default options when menu
     * is first installed
     *
     * @return null
     * @added 1.0
     */
    
    public function install() {

        flush_rewrite_rules();
        
        add_option( 'NI_Events_Ver', NI_Events_Registry::get( 'config', 'current_version' ) );

        
    }
    
    
}