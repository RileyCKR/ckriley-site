<div id="sidebar">
  <?php 
    if ( is_home() ) { 
      dynamic_sidebar( 'Sidebar_Home' );
    }
    else {
      dynamic_sidebar( 'Sidebar' );
    }
  ?>
</div><!--sidebar-->