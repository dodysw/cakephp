<div class="propertiesBillings form">
<?php echo $this->Form->create('PropertiesBilling'); ?>
	<fieldset>
		<legend><?php echo __('Add Properties Billing'); ?></legend>
	<?php
		echo $this->Form->input('billing_type');
		echo $this->Form->input('customer_num');
		echo $this->Form->input('period');
		echo $this->Form->input('description');
		echo $this->Form->input('property_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Properties Billings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
