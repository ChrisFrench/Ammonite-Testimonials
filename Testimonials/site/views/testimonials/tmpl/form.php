<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php 
$state = @$this->state;
$items = @$this->items; 
?>

<div>
<form action="<?php echo JRoute::_( @$form['action'] )?>" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
	<input name="title" id="title" value="">
	<input name="body" id="body" value="">
	<input name="user_name" id="user_name" value="">
	<input name="state" id="state" value="">
</form>

</div>
