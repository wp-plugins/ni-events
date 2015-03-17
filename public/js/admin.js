jQuery( document ).ready( function( $ ){
       
    $( '#mini-event-date-from, #mini-event-date-to' ).datetimepicker({
        format: 'dS M Y g:ia',
        onChangeDateTime:function( dp, $input ) {
            $( this ).val( $input.val() );
        }
    });	
        
});