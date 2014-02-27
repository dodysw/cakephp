<div class="properties form">
<?php echo $this->Form->create('Property'); ?>
	<fieldset>
		<legend><?php echo __('Add Property'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
        echo $this->Form->input('parent_property_id', array('empty' => true));
		echo $this->Form->input('loc_long');
		echo $this->Form->input('loc_lat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bpn Certificates'), array('controller' => 'bpn_certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('controller' => 'bpn_certificates', 'action' => 'add')); ?> </li>
	</ul>
</div>
