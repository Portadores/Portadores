<?php
/*
Template Name: Landing
*/

get_header(); ?>

<section id="experiencia">
            <div class="container">
                <div class="row">
                    <h1 id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-2015.jpg" class="img-responsive"></h1>
                    <h2>¡AHORA EL PROTAGONISTA ERES TÚ!</h2>
                    <p>Comparte a <strong>todo el mundo</strong> lo que el Señor ha hecho en ti en el congreso. Es la oportunidad para que todos ahora sepan que tú eres un <strong>portador</strong>:</p>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="23" title="Experiencias"]' ); ?>
            </div>
        </section>
<section id="hashtag">
        	<div class="container">
                <div class="row">
                	<p>También puedes compartir tu experiencia con fotos, videos o texto vía <strong>hashtag</strong>:</p>
                </div>
                <div class="row">
                	<div class="col-md-2">
                    </div>
                	<div class="col-md-4">
                    	<h3 id="texto-hashtag">#YoSoyUnPortador</h3>
                    </div>
                    <div class="col-md-4">
                    	<ul id="redes">
                        	<li>
                            	<a target="_blank" href="https://www.facebook.com/hashtag/yosoyunportador?fref=ts"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-facebook.jpg" class="img-responsive"></a>
                            </li>
                            <li>
                            	<a target="_blank" href="https://twitter.com/hashtag/YoSoyUnPortador?src=hash"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-twitter.jpg" class="img-responsive"></a>
                            </li>
                            <li>
                            	<a target="_blank" href="http://www.gramfeed.com/instagram/tags/#yosoyunportador"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-instagram.jpg" class="img-responsive"></a>
                            </li>
                            <li>
                            	<a target="_blank" href="https://vine.co/tags/YosoyUnPortador"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-vimeo.jpg" class="img-responsive"></a>
                            </li>
                        </ul>
                        <p>(Haz clic en la red donde quieres compartir el contenido)</p>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </section> 
<section id="cabezote">
    <div class="container">
    	<div class="row">
        	<img src="<?php echo get_template_directory_uri(); ?>/img/landing-cabezote.jpg" class="img-responsive">
        </div>
    </div>
</section>
<section id="conteo">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>
<section id="formulario">
    <div class="container">
    </div>  
</section>
<section id="programacion">
        	<div class="container">
            	<div class="row">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/programacion.jpg" class="img-responsive">
                </div>
            </div>
        </section>

<?php get_footer(); ?>