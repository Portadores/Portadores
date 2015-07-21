<?php
/**
 * The template for displaying search results pages.
 *
 */

get_header(); ?>

	<section id="contenido">
    <div class="container">

		<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php printf( __( 'Resultados para: %s', 'governanceconsultants' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'partials/resultados' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'partials/no-resultados' );

		endif;
		?>

    </div>
    </section>

<?php get_footer(); ?>
