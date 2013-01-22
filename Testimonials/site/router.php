<?php
/**
 * @package Testimonials
 * @author  Dioscouri Design
 * @link    http://www.dioscouri.com
 * @copyright Copyright (C) 2007 Dioscouri Design. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

if ( !class_exists('Testimonials') ) {
    JLoader::register( "Testimonials", JPATH_ADMINISTRATOR."/components/com_testimonials/defines.php" );
}

Testimonials::load( "TestimonialsHelperRoute", 'helpers.route' );

/**
 * Build the route
 * Is just a wrapper for TestimonialsHelperRoute::build()
 * 
 * @param unknown_type $query
 * @return unknown_type
 */
function TestimonialsBuildRoute(&$query)
{
    return TestimonialsHelperRoute::build($query);
}

/**
 * Parse the url segments
 * Is just a wrapper for TestimonialsHelperRoute::parse()
 * 
 * @param unknown_type $segments
 * @return unknown_type
 */
function TestimonialsParseRoute($segments)
{
    return TestimonialsHelperRoute::parse($segments);
}