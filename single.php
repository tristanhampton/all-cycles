<?php get_header() ?>

<main class="single-post">
	<section class="container width--narrow">
		<a class="backto" href="https://allcyclesyeg.ca">Back to home page</a>
		<div class="content">
			<img src="<?php the_field('image')  ?>" alt="Photo from <?php the_field('title') ?>">
			<h2><?php the_field('title') ?></h2>
			<?php the_field('description') ?>
		</div>
	</section>
</main>


<?php get_footer() ?>