<div class="bpnCertificates form">
<?php echo $this->Form->create('BpnCertificate'); ?>
	<fieldset>
		<legend><?php echo __('Add Bpn Certificate'); ?></legend>
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
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bpn Certificates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bpn Certificate Histories'), array('controller' => 'bpn_certificate_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate History'), array('controller' => 'bpn_certificate_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
