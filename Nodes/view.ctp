<div class="grid_16">

	<div class="grid_11">
		<?php  $this->Layout->setNode($node); ?>
		<div id="node-<?php echo $this->Layout->node('id'); ?>" class="node node-type-<?php echo $this->Layout->node('type'); ?>">
			
		    <h2><?php echo $this->Layout->node('title'); ?></h2>
		    <?php
		    	
		        echo $this->Layout->nodeInfo();
		        if ($this->Layout->node('type') == 'blog') {
		        	echo $this->Layout->nodeExcerpt();
		        }
		        echo $this->Layout->nodeBody();
		        echo $this->Layout->nodeMoreInfo();
		    ?>
		</div>
		<div id="comments" class="node-comments">
		<?php
		    $type = $types_for_layout[$this->Layout->node('type')];

		    if ($type['Type']['comment_status'] > 0 && $this->Layout->node('comment_status') > 0) {
		        echo $this->element('comments');
		    }

		    if ($type['Type']['comment_status'] == 2 && $this->Layout->node('comment_status') == 2) {
		        echo $this->element('comments_form');
		    }
		?>
		</div>
	</div>

	<div id="sidebar" class="grid_5">
		<?php echo $this->Layout->blocks('right'); ?>
	</div>
</div>