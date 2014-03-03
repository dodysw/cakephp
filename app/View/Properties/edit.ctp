<div class="properties form">
<?php echo $this->Form->create('Property', array(
    'class' => 'form-horizontal', 
    'inputDefaults' => array(
        'div' => array('class' => 'form-group'),
        'label' => array('class' => 'control-label col-sm-2'),
        'class' => 'form-control',
        'between' => '<div class="col-sm-10">',
        'after' => '</div>',
        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
    ))); ?>
	<fieldset>
		<legend><?php echo __('Edit Property'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('parent_property_id');
		echo $this->Form->input('loc_long');
		echo $this->Form->input('loc_lat');
		echo $this->Form->input('created_by');
	?>
	</fieldset>
<?php echo $this->Form->end(array(
            'label' => __('Submit'),
            'div' => array('class' => 'form-group'),
            'class' => 'btn btn-default',
            'before' => '<div class="col-sm-offset-2 col-sm-10">',
            'after' => '</div>'
    )); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Property.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Property.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bpn Certificates'), array('controller' => 'bpn_certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('controller' => 'bpn_certificates', 'action' => 'add')); ?> </li>
	</ul>
</div>
