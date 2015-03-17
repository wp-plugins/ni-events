<?php


class NI_Events {
    
    
    /**
     * Main Construct for the Whole Application
     * Sets Registry and Default Values (if none present)
     *
     * @return null
     * @added 2.0
     */
    
    public function __construct() {
        
        
        if( !get_option( 'NI_Events_Ver' ) ) :
                add_option( 'NI_Events_Ver', NI_Events_Registry::get( 'config', 'current_version' ) );
        endif;
        
        NI_Events_Registry::set( 'version', get_option( 'NI_Events_Ver' ) );

        
    }
    
        
    /**
     * The main application run function, this sets up all the magic and grunt
     * work of the application, firing off all the different controllers.
     *
     * @return null
     * @added 2.0
     */
    
    public function run() {
         
        new NI_Events_InstallController;
        new NI_Events_UpgradeController;
        new NI_Events_GlobalController;
        new NI_Events_AdminController;
        new NI_Events_PostTypeFactory( new NI_Events_PostType );
        new NI_Events_Shortcodes();

     
    }
    
    public function getEvents( $data ) {
        
        $count = isset( $data['count'] ) ? intval( $data['count'] ) : null;

        $posts_args = array( 
            'posts_per_page' => -1, 
            'post_type' => 'events' 
            ); 

        $posts = get_posts( $posts_args );
        $future = self::getFutureEvents( $posts );
        usort( $future, array( "NI_Events", "sortEvents" ) );
        $events = self::getAmountOfEvents( $future, $count );
        
        return $events;
        
    }
    
    public static function getFutureEvents( $events ) {
        
        $future = [];

        foreach( $events as $event ) :

            $from_date = strtotime( get_post_meta( $event->ID, 'event-date-from', true ) );

            if( $from_date > time() )
                $future[] = $event;

        endforeach;
        
        return $future;
        
    }
    
    public static function sortEvents( $a, $b ) {
        
        $aTime = strtotime( get_post_meta( $a->ID, 'event-date-from', true ) );
        $bTime = strtotime( get_post_meta( $b->ID, 'event-date-from', true ) );
        
        if( $aTime == $bTime )
            return 0;
        
       if( $aTime > $bTime )
            return -1;
        
       return 1;
       
    }
    
    public static function getAmountOfEvents( $events, $total ) {
        
        return array_slice( $events, 0, $total );
        
    }
    
}