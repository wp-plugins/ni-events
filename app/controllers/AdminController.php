<?php


class NI_Events_AdminController extends NI_Events_BaseController {
    
        
    /**
     * Prepare our Global Options
     *
     * @return null
     * @added 1.0
     */
    
    public function __construct() {
        
        
        add_action( 'admin_enqueue_scripts', array( &$this, 'datePicker' ) );

         
    }
    

    /**
     * Makes sure jQuery is added to all pages as it is needed for the
     * system to work
     *
     * @return null
     * @added 1.0
     */
    
    public function datePicker() {
        
        wp_enqueue_script(
                        'datetime',
			NI_Events_Registry::get( 'config', 'plugin_uri' ) . 'public/js/datetimepicker.js', 
                        array( 'jquery', 'jquery-ui-core' ),
			time(),
			true
		);	
                
        wp_enqueue_script(
                        'events-admin',
			NI_Events_Registry::get( 'config', 'plugin_uri' ) . 'public/js/admin.js', 
                        array( 'jquery', 'jquery-ui-core', 'datetime' ),
			time(),
			true
		);
        

        wp_register_style( 
                'ni-events-datepicker', 
                NI_Events_Registry::get( 'config', 'plugin_uri' ) . 'public/css/datetimepicker.css'
                );
        
        wp_enqueue_style( 'ni-events-datepicker' );
        
    }
    
}