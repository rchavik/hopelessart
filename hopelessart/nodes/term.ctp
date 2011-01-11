<div class="nodes grid_16">

	<!-- start latestword -->
	<div id="latestword" class="grid_11">

		<div class="nodes">
		    <?php
		        if (count($nodes) == 0) {
		            __('No items found.');
		        } else {
		            foreach ($this->params['named'] AS $nn => $nv) {
		                $paginator->options['url'][$nn] = $nv;
		            }
		        }
		    ?>

		   	<?php
		        foreach ($nodes AS $node) {
		            $layout->setNode($node);
		    ?>
		    <div id="node-<?php echo $layout->node('id'); ?>" class="node node-type-<?php echo $layout->node('type'); ?>">
		        <h2><?php echo $html->link($layout->node('title'), $layout->node('url')); ?></h2>
		        <?php
		            echo $layout->nodeInfo();
		            if ($layout->node('type') == 'blog') {
		            	echo $layout->nodeExcerpt();
		            	echo $html->tag('div', 
		            		$html->link('Continue Reading &raquo;', 
		            			$layout->node('url'), 
		            			array('escape' => false)), array('class' => 'continue-link')
		            	); 
		            } else {
		            	echo $layout->nodeBody();
		            }	
		            echo $layout->nodeMoreInfo();
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