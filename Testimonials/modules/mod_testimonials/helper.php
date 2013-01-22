<?php
/**
* @package		Testimonials
* @copyright	Copyright (C) 2009 DT Design Inc. All rights reserved.
* @license		GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
* @link 		http://www.dioscouri.com
*/

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

if ( !class_exists('Testimonials') ) 
             JLoader::register( "Testimonials", JPATH_ADMINISTRATOR."/components/com_messagebottle/defines.php" );


class ModTestimonialsHelper {

	function getList() {

        
        JTable::addIncludePath( JPATH_ADMINISTRATOR . '/components/com_testimonials/tables' );
    	JModel::addIncludePath( JPATH_ADMINISTRATOR . '/components/com_testimonials/models' );

    	$model = JModel::getInstance( 'Testimonials', 'TestimonialsModel' );
     
       
    	
    	$model->setState( 'limit', $this->params->get('limit', '1' ) );
    	$model->setState( 'order', 'tbl.datecreated' );

       	$items = $model->getItems();


	}

}
?>         