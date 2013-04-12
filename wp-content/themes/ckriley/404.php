<?php
//If a request had a mixed-case uri, lowercase it and try again
$uri = $_SERVER['REQUEST_URI'];
$lowerUri = strtolower($uri);
if (!($uri === $lowerUri))
{
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://$_SERVER[HTTP_HOST]$lowerUri");
}
?>
<?php get_header(); ?>
<div id="content">
	<div id="error404" class="post">
		<h1><?php _e('Error 404 Not Found'); ?></h1>
		<div class="post-content">
			<p><?php _e('Oops. Fail. The page cannot be found.'); ?></p>
			<p><?php _e('Please check your URL or use the search form below.'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--.post-content-->
	</div><!--#error404 .post-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>