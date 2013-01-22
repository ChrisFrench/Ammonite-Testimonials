<?php
/**
* @package		Testimonials
* @copyright	Copyright (C) 2009 DT Design Inc. All rights reserved.
* @license		GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
* @link 		http://www.dioscouri.com
*/

/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );

class TestimonialsControllerTestimonials extends TestimonialsController 
{
	
	
	/**
	 * constructor
	 */
	function __construct() 
	{
		parent::__construct();
		
		$this->set('suffix', 'testimonials');
	    $this->registerTask( 'enabled.enable', 'boolean' );
        $this->registerTask( 'enabled.disable', 'boolean' );
		
	}
	
	function _setModelState()
    {
    	$state = parent::_setModelState();   	
		$app = JFactory::getApplication();
		$model = $this->getModel( $this->get('suffix') );
    	$ns = $this->getNamespace();

    	$state['filter_name']   = $app->getUserStateFromRequest($ns.'name', 'filter_name', '', '');
		$state['filter_id_from']   = $app->getUserStateFromRequest($ns.'id_from', 'filter_id_from', '', '');
		$state['filter_id_to']   = $app->getUserStateFromRequest($ns.'id_to', 'filter_id_to', '', '');
		$state['filter_user_id'] 	= $app->getUserStateFromRequest($ns.'user_id', 'filter_user_id', '', '');
		$state['filter_user_name'] 	= $app->getUserStateFromRequest($ns.'user_name', 'filter_user_name', '', '');
		$state['filter_category_id'] 	= $app->getUserStateFromRequest($ns.'category_id', 'filter_category_id', '', '');
		$state['filter_rating'] 	= $app->getUserStateFromRequest($ns.'rating', 'filter_rating', '', '');
		$state['filter_city'] 	= $app->getUserStateFromRequest($ns.'city', 'filter_city', '', '');
		$state['filter_state'] 	= $app->getUserStateFromRequest($ns.'state', 'filter_state', '', '');
		$state['filter_zip'] 	= $app->getUserStateFromRequest($ns.'zip', 'filter_zip', '', '');
		$state['filter_country'] 	= $app->getUserStateFromRequest($ns.'country', 'filter_country', '', '');
		$state['filter_enabled'] 	= $app->getUserStateFromRequest($ns.'enabled', 'filter_enabled', '', '');
      	
    	foreach (@$state as $key=>$value)
		{
			$model->setState( $key, $value );	
		}
  		return $state;
    }
	
	
	
}