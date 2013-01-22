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
defined( '_JEXEC' ) or die( 'Restricted access' );

class TestimonialsTableTestimonials extends DSCTable 
{
	public function TestimonialsTableTestimonials( &$db ) 
	{
		$tbl_key 	= 'testimonial_id';
		$tbl_suffix = 'testimonials';
		$this->set( '_suffix', $tbl_suffix );
		$name 		= "testimonials";
		
		parent::__construct( "#__{$name}_{$tbl_suffix}", $tbl_key, $db );	
	}

	function check( )
	{
		$db = $this->getDBO( );
		$date = JFactory::getDate( );
		$nullDate = $db->getNullDate( );
		if ( empty( $this->datecreated ) || $this->datecreated == $nullDate )
		{
			$this->datecreated = $date->toMysql( );
		}

		if(empty($this->title )) {
			$this->setError( JText::_('title required') );
				return false;
		}


		$this->datemodified = $date->toMysql( );


		return true;
	} 

}