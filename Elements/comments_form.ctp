<div class="comment-form">
	<h3><?php __('Add new comment'); ?></h3>
	<?php
		$type = $types_for_layout[$node['Node']['type']];

		if ($this->params['controller'] == 'comments') {
			$nodeLink = $this->Html->link(__('Go back to original post', true) . ': ' . $node['Node']['title'], $node['Node']['url']);
			echo $this->Html->tag('p', $nodeLink, array('class' => 'back'));
		}

		$this->FormUrl = array(
			'controller' => 'comments',
			'action' => 'add',
			$node['Node']['id'],
		);
		if (isset($parentId) && $parentId != null) {
			$this->FormUrl[] = $parentId;
		}

		echo $this->Form->create('Comment', array('url' => $this->FormUrl));
			if ($this->Session->check('Auth.User.id')) {
				echo $this->Form->input('Comment.name', array(
					'label' => __('Name', true),
					'value' => $this->Session->read('Auth.User.name'),
					'readonly' => 'readonly',
					'title' => 'Enter your name'
				));
				echo $this->Form->input('Comment.email', array(
					'label' => __('Email', true),
					'value' => $this->Session->read('Auth.User.email'),
					'readonly' => 'readonly',
					'title' => 'Enter your email'
				));
				echo $this->Form->input('Comment.website', array(
					'label' => __('Website', true),
					'value' => $this->Session->read('Auth.User.website'),
					'readonly' => 'readonly',
					'title' => 'Enter your website'
				));
				echo $this->Form->input('Comment.body', array('label' => false, 'title' => 'Enter your comment'));
			} else {
				echo $this->Form->input('Comment.name', array('label' => __('Name', true), 'title' => 'Enter your name'));
				echo $this->Form->input('Comment.email', array('label' => __('Email', true),'title' => 'Enter your email'));
				echo $this->Form->input('Comment.website', array('label' => __('Website', true), 'title' => 'Enter your website'));
				echo $this->Form->input('Comment.body', array('label' => false, 'title' => 'Enter your comment'));
			}

			if ($type['Type']['comment_captcha']) {
				echo $this->Recaptcha->display_form();
			}
		echo $this->Form->end(__('Post comment', true));
	?>
</div>