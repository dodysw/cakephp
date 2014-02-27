<div class="bpnCertificates index">
	<h2><?php echo __('Bpn Certificates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cert_num'); ?></th>
			<th><?php echo $this->Paginator->sort('cert_num_full'); ?></th>
			<th><?php echo $this->Paginator->sort('province'); ?></th>
			<th><?php echo $this->Paginator->sort('regency'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('village'); ?></th>
			<th><?php echo $this->Paginator->sort('ownership_type'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bpnCertificates as $bpnCertificate): ?>
	<tr>
		<td><?php echo h($bpnCertificate['BpnCertificate']['id']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['cert_num']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['cert_num_full']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['province']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['regency']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['district']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['village']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['ownership_type']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['area']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['owner_name']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['created']); ?>&nbsp;</td>
		<td><?php echo h($bpnCertificate['BpnCertificate']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bpnCertificate['BpnCertificate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bpnCertificate['BpnCertificate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bpnCertificate['BpnCertificate']['id']), null, __('Are you sure you want to delete # %s?', $bpnCertificate['BpnCertificate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bpn Certificate Histories'), array('controller' => 'bpn_certificate_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate History'), array('controller' => 'bpn_certificate_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
