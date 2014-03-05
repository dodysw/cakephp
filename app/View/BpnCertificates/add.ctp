<?php
	$this->Html->addCrumb('Properties', '/properties');
	$this->Html->addCrumb(h($property['Property']['name']), '/properties/view/' . $property['Property']['id']);
	$this->Html->addCrumb(__('Add certificate'));
?>
<div class="bpnCertificates form">
<?php echo $this->Form->create('BpnCertificate', array(
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
		<legend><?php echo __('Add Certificate'); ?></legend>
	<?php
		echo $this->Form->input('cert_num');
		echo $this->Form->input('cert_num_full');
		echo $this->Form->input('province');
		echo $this->Form->input('regency');
		echo $this->Form->input('district');
		echo $this->Form->input('village');
		echo $this->Form->input('ownership_type');
		echo $this->Form->input('area');
		echo $this->Form->input('owner_name');
		echo $this->Form->hidden('property_id', array('value' => $property['Property']['id']));
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
