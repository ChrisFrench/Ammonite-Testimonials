<?php
/**
 * @package    Testimonials
 * @author     Dioscouri Design
 * @link     http://www.dioscouri.com
 * @copyright Copyright (C) 2007 Dioscouri Design. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

Testimonials::load('TestimonialsViewBase','views.base');

class TestimonialsViewTestimonials extends TestimonialsViewBase
{
    function _defaultToolbar()
	{
	
        JToolBarHelper::publishList( 'enabled.enable' );
        JToolBarHelper::unpublishList( 'enabled.disable' );
		
		parent::_defaultToolbar();
	}
}