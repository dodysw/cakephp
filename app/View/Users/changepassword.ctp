<div class="users form">
<?php echo $this->Form->create('User', array(
    'class' => 'form-horizontal', 
    'inputDefaults' => array(
        'div' => array('class' => 'form-group'),
        'label' => array('class' => 'control-label col-sm-3'),
        'class' => 'form-control',
        'between' => '<div class="col-sm-6">',
        'after' => '</div>',
        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
    ))); ?>
	<fieldset>
		<legend><?php echo __('Update your password'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('current_password', array('value' => '', 'type' => 'password'));
		echo $this->Form->input('password', array('value' => '', 'label' => array('text' => 'New password', 'class' => 'control-label col-sm-3')));
		echo $this->Form->input('confirm_password', array('value' => '', 'type' => 'password', 'label' => array('text' => 'Verify password', 'class' => 'control-label col-sm-3')));
        echo $this->Form->submit(__('Submit'), array(
            'div' => array('class' => 'form-group'),
            'class' => 'btn btn-default',
            'before' => '<div class="col-sm-offset-3 col-sm-6">',
            'after' => '</div>'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
