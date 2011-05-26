<?php

/**
 * Description: Adds your attendee list from your eventbrite RSS feed.
 * Adapted from Eventbrite Attendees Shortcode by Austin "Frosty" Passy
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

function eventbrite_attendees( $feed_url ) {
	
	$limit = 75;
	
	$feed = new SimplePie();
	$feed->set_feed_url( $feed_url );
	$feed->enable_cache( false );
	$feed->init();
	$feed->handle_content_type();

	$items = $feed->get_item();
		
	$out = '<div id="eventbrite-attendees-list">';
	
	if ( empty( $items ) ) 
	{
		$out .= '<ul>';		
		$out .= '<li>No items to display, please check your eventbrite list.</li>';		
		$out .= '</ul>';
	}
	else
	{
		$out .= '<ul>';			

		foreach( $feed->get_items( 0 ) as $item ) 
		{
			$out .= '<li>';
			$out .= $item->get_description();
			$out .= '</li>';
			
			if (--$limit == 0) break;
		}
		
		//$rss_html .= $item[ 'content' ][ 'encoded' ];	   
		$out .= '</ul>';
	}
	
	$out .= '</div>';
	
	return $out;
}
