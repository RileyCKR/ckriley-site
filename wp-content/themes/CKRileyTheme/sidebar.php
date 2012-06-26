<div id="sidebar">
	<ul>
    <?php 
      if ( is_home() ) { 
        dynamic_sidebar( 'Sidebar_Home' );
      }
      else {
        dynamic_sidebar( 'Sidebar' );
      }
    ?>
	</ul>
</div><!--sidebar-->