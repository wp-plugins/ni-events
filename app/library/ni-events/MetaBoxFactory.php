<?php

class NI_Events_MetaBoxFactory {
    
    public $metaBoxCreator;
    
    public function __construct( $postType ) {
        
        $this->metaBoxCreator = $postType;
        
        add_action( 'add_meta_boxes', array( &$this, 'createAll' ) );
        
        add_action( 'save_post', array( 'NI_Events_MetaBoxLocation', 'save' ) );
        add_action( 'save_post', array( 'NI_Events_MetaBoxDateFrom', 'save' ) );
        add_action( 'save_post', array( 'NI_Events_MetaBoxDateTo', 'save' ) );
        add_action( 'save_post', array( 'NI_Events_MetaBoxMap', 'save' ) );

    }
    
    /**
     * Create all post types
     *
     * @return null
     * @added 1.0
     */
    
    public function createAll() {

        $this->metaBoxCreator->create( 
                
                'event-location',
                'Location',
                array( 'NI_Events_MetaBoxLocation', 'display' ),
                'events',
                'side'
                
                );
        
        $this->metaBoxCreator->create( 
                
                'event-date-from',
                'Date From',
                array( 'NI_Events_MetaBoxDateFrom', 'display' ),
                'events',
                'side'
                
                );
        
        $this->metaBoxCreator->create( 
                
                'event-date-to',
                'Date To',
                array( 'NI_Events_MetaBoxDateTo', 'display' ),
                'events',
                'side'
                
                );
        
        $this->metaBoxCreator->create( 
                
                'event-map',
                'Google Map',
                array( 'NI_Events_MetaBoxMap', 'display' ),
                'events'
                
                );


    }
    
    
}