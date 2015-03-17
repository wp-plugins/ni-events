<?php

class NI_Events_PostTypeFactory {
    
    public $postTypeCreator;
    
    public function __construct( $postType ) {
        
        $this->postTypeCreator = $postType;
        
        add_action( 'init', array( &$this, 'createAll' ) );


    }
    
    /**
     * Create all post types
     *
     * @return null
     * @added 1.0
     */
    
    public function createAll() {

        $this->postTypeCreator->create( 'events', array( 
            
            'labels' => array( 
                 
                    'name' => 'Events' ,
                    'singular_name' => 'Event',
                    'add_new_item' => 'Add New Event',
                    'edit_item' => 'Edit Event',
                    'new_item' => 'New Event',
                    'view_item' => 'View Event',
                    'search_items' => 'Search Events',
                    'not_found' => 'No Events Found',
                    'not_found_in_trash' => 'No Events Found in the bin',
                    
                ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => NI_Events_Registry::get( 'config', 'plugin_uri' ) . 'public/imgs/icon.png', 
            'rewrite' => array( 
                            'with_front' => false
                ),
            'register_meta_box_cb' => new NI_Events_MetaBoxFactory( new NI_Events_MetaBox )

            ) 
                
        );

    }
    
    
}