<div class="socialicon">
	<?php echo $this->Html->link(
		$this->Html->image('/img/socialmedia/' . $type . '_32x32_bw.png', array('border' => 0, 'title' => 'Follow me via ' . $type)), $link,
		array('escape' => false,
		));
	?>
</div>