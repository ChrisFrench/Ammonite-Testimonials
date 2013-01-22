<?php
/**
 * @version	1.5
 * @package	Testimonials
 * @author 	Dioscouri Design
 * @link 	http://www.dioscouri.com
 * @copyright Copyright (C) 2007 Dioscouri Design. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

Testimonials::load('TestimonialsModelBase','models.base');

class TestimonialsModelDashboard extends TestimonialsModelBase 
{
	function getTable($name='Config', $prefix='TestimonialsTable', $options = array())
	{
		return parent::getTable($name, $prefix, $options);
	}
}