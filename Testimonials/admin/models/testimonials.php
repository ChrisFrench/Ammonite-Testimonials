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
        

Testimonials::load('TestimonialsModelBase','models.base');

class TestimonialsModelTestimonials extends TestimonialsModelBase 
{


	protected function _buildQueryWhere(&$query)
    {
        $filter     = $this->getState('filter');
       	$filter_name      = $this->getState('filter_name');
		$filter_id_from = $this->getState('filter_id_from');
        $filter_id_to   = $this->getState('filter_id_to');
        $filter_title    = $this->getState('filter_title');
		$filter_body    = $this->getState('filter_body');
    	$filter_user_id    = $this->getState('filter_user_id');
		$filter_user_name    = $this->getState('filter_user_name');
        $filter_category_id    = $this->getState('filter_category_id');
		$filter_rating   = $this->getState('filter_rating');
        $filter_city   = $this->getState('filter_city');
        $filter_state    = $this->getState('filter_state');
        $filter_zip    = $this->getState('filter_zip');
        $filter_country    = $this->getState('filter_country');
        $filter_datecreated    = $this->getState('filter_datecreated');
        $filter_datemodified    = $this->getState('filter_datemodified');
		$filter_enabled    = $this->getState('filter_enabled');
		
		
		
        if ($filter) 
        {
            $key    = $this->_db->Quote('%'.$this->_db->getEscaped( trim( strtolower( $filter ) ) ).'%');
            $where = array();
            $where[] = 'LOWER(tbl.testimonial_id) LIKE '.$key;
            $where[] = 'LOWER(tbl.title) LIKE '.$key;
            $where[] = 'LOWER(tbl.body) LIKE '.$key;
      
            $query->where('('.implode(' OR ', $where).')');
        }
		if ($filter_name) 
        {
            $key    = $this->_db->Quote('%'.$this->_db->getEscaped( trim( strtolower( $filter_name ) ) ).'%');
            $where = array();
            $where[] = 'LOWER(e.testimonial_id) LIKE '.$key;
            $where[] = 'LOWER(tbl.title) LIKE '.$key;
      
            $query->where('('.implode(' OR ', $where).')');
        }
		
		 if (strlen($filter_id_from))
        {
            if (strlen($filter_id_to))
            {
                $query->where('tbl.testimonial_id >= '.(int) $filter_id_from);  
            }
                else
            {
                $query->where('tbl.testimonial_id = '.(int) $filter_id_from);
            }
        }
        
        if (strlen($filter_id_to))
        {
            $query->where('tbl.testimonial_id <= '.(int) $filter_id_to);
        }
        
    	
		
    	if (strlen($filter_datecreated))
        {
            $query->where("tbl.datecreated = '".$filter_datecreated."'");
        }
        if (strlen($filter_datemodified))
        {
            $query->where("tbl.datemodified = '".$filter_datemodified."'");
        }
          
		    
	    
		if (strlen($filter_enabled))
        {
            $query->where("tbl.enabled = '".$filter_enabled."'");
        }
		
	 
    }

	 protected function _buildQueryGroup(&$query)
    {
    }

	/**
     * Builds JOINS clauses for the query
     */
    protected function _buildQueryJoins(&$query)
    {

	
    }
	/**
	 * Builds SELECT fields list for the query
	 */
	protected function _buildQueryFields(&$query)
	{
		$fields = array();  

        $query -> select($this -> getState('select', 'tbl.*'));
        $query -> select($fields);
	}
	
	
	protected function prepareItem( &$item, $key=0, $refresh=false )
	{
			$item->link = 'index.php?option=com_testimonials&view=testimonials&task=edit&id='.$item->testimonial_id;
			
			parent::prepareItem(&$item, $key, $refresh );
	    
	}


    
	
	
}