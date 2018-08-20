<?php 
		//define('WP_USE_THEMES', true);
		require( dirname( __FILE__ ) . '/podscape/wp-blog-header.php' );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MFDv4</title>

</head>

<body>
<?php get_header(); ?>

<h1 class="hn">Podcape</h1>

	<section>
	<article>
		<a href="podscape/index.php"><h1><?php echo(bloginfo('name')); ?></h1></a>
		<h2><?php the_title(); ?></h2>
		<h4><?php echo(bloginfo('description')); ?></h4>
	</article>
</section>
	<?php 
		while(have_posts()) {
			the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<hr>
		<?php }
		
		?>	

	ul<li*5
</body>
</html>
