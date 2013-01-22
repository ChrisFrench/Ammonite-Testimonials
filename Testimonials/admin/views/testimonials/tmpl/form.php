<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php $form = @$this -> form; ?>
<?php $row = @$this -> row; ?>
<?php JHTML::_('behavior.calendar');
	JHtml::_('behavior.formvalidation');

?>
 
<form action="<?php echo JRoute::_( @$form['action'] ) ?>" method="post" class="adminform" name="adminForm" id="adminForm" enctype="multipart/form-data" >

	<fieldset>
		<legend>
			<?php echo JText::_("BASIC INFORMATION"); ?>
		</legend>

		<table class="admintable">
			<tr>
				<td class="key"> <?php echo JText::_('ID'); ?>: </td>
				<td> <?php echo @$row -> testimonial_id; ?> </td>
			</tr>
			
			<tr>
				<td class="key"> <?php echo JText::_('user_id'); ?>: </td>
				<td>
					<input type="text" name="user_id" id="user_id" value="<?php echo @$row -> sender_name; ?> " />
				
				</td>
			</tr>
			<tr>
				<td class="key"> <?php echo JText::_('user_name'); ?>: </td>
				<td>
						<input type="text" name="user_name" id="user_name" value="<?php echo @$row -> user_name; ?> " />
			
				</td>
			</tr>
			<tr>
				<td class="key"> <?php echo JText::_('category_id'); ?>: </td>
				<td>
						<input type="text" name="category_id" id="category_id" value="<?php echo @$row -> category_id; ?> " />
				
				</td>
			</tr>
			<tr>
				<td class="key"> <?php echo JText::_('rating'); ?>: </td>
				<td>
				<input type="text" name="rating" id="rating" value="<?php echo @$row -> rating; ?> " />

				</td>
			</tr>

			<tr>
				<td class="key"> <?php echo JText::_('title'); ?>: </td>
				<td>
				<input type="text" name="title" id="title" value="<?php echo @$row -> title; ?> " />
			
				</td>
			</tr>
			<tr>
				<td class="key"> <?php echo JText::_('body'); ?>: </td>
				<td>
				<input type="text" name="body" id="body" value="<?php echo @$row -> body; ?> " />
			
				</td>
			</tr>
			<tr>
				<td class="key"> <?php echo JText::_('address'); ?>: </td>
				<td>
				<input type="text" name="address" id="address" value="<?php echo @$row -> address; ?> " />
			
				</td>
			</tr>
			
			<tr>
				<td class="key"> <?php echo JText::_('city'); ?>: </td>
				<td>
				<input type="text" name="city" id="city" value="<?php echo @$row -> city; ?> " />
			
				</td>
			</tr>

			<tr>
				<td class="key"> <?php echo JText::_('state'); ?>: </td>
				<td>
				<input type="text" name="state" id="state" value="<?php echo @$row -> state; ?> " />
			
				</td>
			</tr>

			<tr>
				<td class="key"> <?php echo JText::_('zip'); ?>: </td>
				<td>
				<input type="text" name="zip" id="zip" value="<?php echo @$row -> zip; ?> " />
			
				</td>
			</tr>

			<tr>
				<td class="key"> <?php echo JText::_('country'); ?>: </td>
				<td>
				<input type="text" name="country" id="country" value="<?php echo @$row -> country; ?> " />
			
				</td>
			</tr>
			<tr>
				<td class="key"> <?php echo JText::_('datecreated'); ?>: </td>
				<td>
				<input type="text" name="datecreated" id="datecreated" value="<?php echo @$row -> datecreated; ?> " />
			
				</td>
			</tr>
	
			<tr>
                    <td style="width: 100px; text-align: right;" class="key">
                        <?php echo JText::_( 'Enabled' ); ?>:
                    </td>
                    <td>
                        <?php echo  DSCGrid::btbooleanlist('enabled', '', @$row->enabled, 'Enabled', 'Disabled') ; ?>
                      
                    </td>
                </tr>    
			
			
			
		</table>
	</fieldset>
	<div>
		<input type="hidden" name="testimonial_id" id="id" value="<?php echo @$row -> testimonial_id; ?>" />
		<input type="hidden" name="params" id="params" value="" />
		<input type="hidden" name="task" value="" />
	</div>
</form>
