<?php

// Hook onto 'eventorganiser_new_booking' to store the booking ID into a WP_Session

add_action( 'eventorganiser_pre_gateway_booking', 'set_confirmation_page_booking_id');

function set_confirmation_page_booking_id($args){

  $booking_id = $args[0];

  
  
}

// Provide a way for the user to get the booking ID

function eo_get_confirmation_page_booking_id(){
  if(isset($wp_session['eo_confirmation_page_booking_id'])){
    return $wp_session['eo_confirmation_page_booking_id'];
  }
  else{
    return null;
  }
}