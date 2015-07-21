<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

	<section id="contenido">
    	<div class="container">	

			<header>
				<h1><?php _e( 'Página no encontrada', 'governanceconsultants' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Esto es de alguna manera embarazoso...', 'governanceconsultants' ); ?></h2>
					<p><?php _e( 'Parece que no se encontró nada en este lugar. Puede intentarlo de nuevo', 'governanceconsultants' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

	    </div>
    </section>

<?php get_footer(); ?>