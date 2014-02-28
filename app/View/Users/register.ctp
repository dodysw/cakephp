<div class="users form">
<?php echo $this->Form->create('User', array(
    'class' => 'form-horizontal', 
    'inputDefaults' => array(
        'div' => array('class' => 'form-group'),
        'label' => array('class' => 'control-label col-sm-2'),
        'class' => 'form-control',
        'between' => '<div class="col-sm-6">',
        'after' => '</div>',
        'error' => array('attributes' => array('wrap' => 'div', 'class' => 'col-sm-4 text-warning'))
    ))); ?>
	<fieldset>
		<legend><?php echo __('Sign up'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('fullname');
		echo $this->Form->input('password');
		echo $this->Form->input('confirm_password', array('div' => array('class' => 'form-group has-error'), 'label' => array('text' => 'Confirm', 'class' => 'control-label col-sm-2')));
        echo $this->Form->submit(__('Submit'), array(
            'div' => array('class' => 'form-group'),
            'class' => 'btn btn-default',
            'before' => '<div class="col-sm-offset-2 col-sm-10">',
            'after' => '</div>'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
