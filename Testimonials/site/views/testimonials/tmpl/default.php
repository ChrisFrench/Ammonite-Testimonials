<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php 
$state = @$this->state;
$items = @$this->items; 
?>
<div>
<?php foreach ($items as $item) {
var_dump($item);
echo '<hr />';
}
?>


</div>