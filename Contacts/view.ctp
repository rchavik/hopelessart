<div class="grid_16">

	<div class="grid_11">
		<div id="contact-<?php echo $contact['Contact']['id']; ?>" class="">
		    <h2><?php echo $contact['Contact']['title']; ?></h2>
		    <div class="contact-body">
		    <?php echo $contact['Contact']['body']; ?>
		    </div>

		    <?php if ($contact['Contact']['message_status']) { ?>
		    <div class="contact-form">
		    <?php
		        echo $this->Form->create('Message', array(
		            'url' => array(
		                'controller' => 'contacts',
		                'action' => 'view',
		                $contact['Contact']['alias'],
		            ),
		        ));
		        echo $this->Form->input('Message.name', array('label' => __('Your name', true), 'title' => 'Enter your name'));
		        echo $this->Form->input('Message.email', array('label' => __('Your email', true), 'title'=> 'Enter your email'));
		        echo $this->Form->input('Message.title', array('label' => __('Subject', true), 'title' => 'Enter the subject'));
		        echo $this->Form->input('Message.body', array('label' => __('Message', true), 'title' => 'Enter your message'));
		        if ($contact['Contact']['message_captcha']) {
		            echo $this->Recaptcha->display_form();
		        }
		        echo $this->Form->end(__('Send', true));
		    ?>
		    </div>
		    <?php } ?>
		</div>
	</div>

	<div id="sidebar" class="grid_5">
		<?php echo $this->Layout->blocks('right'); ?>
	</div>
</div>