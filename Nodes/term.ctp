<div class="nodes grid_16">

	<!-- start latestword -->
	<div id="latestword" class="grid_11">

		<div class="nodes">
		    <?php
		        if (count($nodes) == 0) {
		            __('No items found.');
		        } else {
		            foreach ($this->params['named'] AS $nn => $nv) {
		                $this->Paginator->options['url'][$nn] = $nv;
		            }
		        }
		    ?>

		   	<?php
		        foreach ($nodes AS $node) {
		            $this->Layout->setNode($node);
		    ?>
		    <div id="node-<?php echo $this->Layout->node('id'); ?>" class="node node-type-<?php echo $this->Layout->node('type'); ?>">
		        <h2><?php echo $this->Html->link($this->Layout->node('title'), $this->Layout->node('url')); ?></h2>
		        <?php
		            echo $this->Layout->nodeInfo();
		            if ($this->Layout->node('type') == 'blog') {
		            	echo $this->Layout->nodeExcerpt();
		            	echo $this->Html->tag('div', 
		            		$this->Html->link('Continue Reading &raquo;', 
		            			$this->Layout->node('url'), 
		            			array('escape' => false)), array('class' => 'continue-link')
		            	); 
		            } else {
		            	echo $this->Layout->nodeBody();
		            }	
		            echo $this->Layout->nodeMoreInfo();
		        ?>
		    </div>
		    <?php
		        }
		    ?>

			<div class="paging">
				<?php if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()): ?>

				<span class="format">
					<?php echo $this->Paginator->counter(array('format' => "Page %page% of %pages%")); ?>
				</span>

				<?php echo $this->Paginator->numbers(array('class' => 'number', 'separator' => false)); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- end latestword -->

	<div id="sidebar" class="grid_5">
		<?php echo $this->Layout->blocks('right'); ?>
	</div>
</div>