<div class="restaurants view">
<h2><?php  __('Restaurant');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $restaurant['Restaurant']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $restaurant['Restaurant']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Restaurant', true), array('action' => 'edit', $restaurant['Restaurant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Restaurant', true), array('action' => 'delete', $restaurant['Restaurant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $restaurant['Restaurant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Restaurants', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Restaurant', true), array('action' => 'add')); ?> </li>
		<li>	<?php echo $this->Html->link(__('Random', true), array('action' => 'random')); ?></li>
	</ul>
</div>
