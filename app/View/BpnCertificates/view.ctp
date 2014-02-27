<div class="bpnCertificates view">
<h2><?php echo __('Bpn Certificate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cert Num'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['cert_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cert Num Full'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['cert_num_full']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regency'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['regency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Village'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['village']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ownership Type'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['ownership_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner Name'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['owner_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bpnCertificate['BpnCertificate']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bpn Certificate'), array('action' => 'edit', $bpnCertificate['BpnCertificate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bpn Certificate'), array('action' => 'delete', $bpnCertificate['BpnCertificate']['id']), null, __('Are you sure you want to delete # %s?', $bpnCertificate['BpnCertificate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bpn Certificates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bpn Certificate Histories'), array('controller' => 'bpn_certificate_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate History'), array('controller' => 'bpn_certificate_histories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bpn Certificate Histories'); ?></h3>
	<?php if (!empty($bpnCertificate['BpnCertificateHistory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bpn Certificate Id'); ?></th>
		<th><?php echo __('Event Date'); ?></th>
		<th><?php echo __('Event Type'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bpnCertificate['BpnCertificateHistory'] as $bpnCertificateHistory): ?>
		<tr>
			<td><?php echo $bpnCertificateHistory['id']; ?></td>
			<td><?php echo $bpnCertificateHistory['bpn_certificate_id']; ?></td>
			<td><?php echo $bpnCertificateHistory['event_date']; ?></td>
			<td><?php echo $bpnCertificateHistory['event_type']; ?></td>
			<td><?php echo $bpnCertificateHistory['description']; ?></td>
			<td><?php echo $bpnCertificateHistory['created']; ?></td>
			<td><?php echo $bpnCertificateHistory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bpn_certificate_histories', 'action' => 'view', $bpnCertificateHistory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bpn_certificate_histories', 'action' => 'edit', $bpnCertificateHistory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bpn_certificate_histories', 'action' => 'delete', $bpnCertificateHistory['id']), null, __('Are you sure you want to delete # %s?', $bpnCertificateHistory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bpn Certificate History'), array('controller' => 'bpn_certificate_histories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
