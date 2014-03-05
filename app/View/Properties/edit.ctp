<?php
	$this->Html->addCrumb('Properties', '/properties');
	$property = $this->request->data;
	$this->Html->addCrumb(h($property['Property']['name']), '/properties/view/' . $property['Property']['id']);
	$this->Html->addCrumb(__('Edit'));
?>
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
		echo $this->Form->input('parent_property_id', array('empty' => true));
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
