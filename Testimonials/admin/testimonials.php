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

// Check the registry to see if our Testimonials class has been overridden
if ( !class_exists('Testimonials') ) 
    JLoader::register( "Testimonials", JPATH_ADMINISTRATOR."/components/com_testimonials/defines.php" );

// before executing any tasks, check the integrity of the installation
Testimonials::getClass( 'TestimonialsHelperDiagnostics', 'helpers.diagnostics' )->checkInstallation();

// Require the base controller
Testimonials::load( 'TestimonialsController', 'controller' );

// Require specific controller if requested
$controller = JRequest::getWord('controller', JRequest::getVar( 'view' ) );
if (!Testimonials::load( 'TestimonialsController'.$controller, "controllers.$controller" ))
    $controller = '';

if (empty($controller))
{
    // redirect to default
	$default_controller = new TestimonialsController();
	$redirect = "index.php?option=com_testimonials&view=" . $default_controller->default_view;
    $redirect = JRoute::_( $redirect, false );
    JFactory::getApplication()->redirect( $redirect );
}

DSC::loadBootstrap();

JHTML::_('stylesheet', 'common.css', 'media/dioscouri/css/');
JHTML::_('stylesheet', 'admin.css', 'media/com_testimonials/css/');

$doc = JFactory::getDocument();
$uri = JURI::getInstance();
$js = "var com_testimonials = {};\n";
$js.= "com_testimonials.jbase = '".$uri->root()."';\n";
$doc->addScriptDeclaration($js);

$parentPath = JPATH_ADMINISTRATOR . '/components/com_testimonials/helpers';
DSCLoader::discover('TestimonialsHelper', $parentPath, true);

$parentPath = JPATH_ADMINISTRATOR . '/components/com_testimonials/library';
DSCLoader::discover('Testimonials', $parentPath, true);

// load the plugins
JPluginHelper::importPlugin( 'testimonials' );

// Create the controller
$classname = 'TestimonialsController'.$controller;
$controller = Testimonials::getClass( $classname );
    
// ensure a valid task exists
$task = JRequest::getVar('task');
if (empty($task))
{
    $task = 'display';
    JRequest::setVar( 'layout', 'default' );
}
JRequest::setVar( 'task', $task );

// Perform the requested task
$controller->execute( $task );

// Redirect if set by the controller
$controller->redirect();
?>