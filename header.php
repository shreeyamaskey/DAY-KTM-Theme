<?php
if ( is_active_sidebar( 'in-header-widget-area' ) ) { ?>

<aside class="in-header widget-area right" role="complementary">
 <?php dynamic_sidebar( 'in-header-widget-area' ); ?>
</aside>

<?php } ?>
