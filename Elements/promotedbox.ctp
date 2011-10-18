<?php
    $b = $block['Block'];
    $class = 'block block-' . $b['alias'];
    if ($block['Block']['class'] != null) {
        $class .= ' ' . $b['class'];
    }
?>
<div id="block-<?php echo $b['id']; ?>"class="promotedbox grid_5 <?php echo $class; ?>">
<?php if ($b['show_title'] == 1) { ?>
    <h3><?php echo $b['title']; ?></h3>
<?php } ?>
    <p>
		<?php echo $this->Layout->filter($b['body']); ?>
    </p>
</div>