<?php 
/*
	Template name: plantilla
*/
	?>
	<?php get_header(); ?>

	<div class="plantilla">
		<div class="row">
			<div class="col-sm-12 ">
				<div class="blanco titulo">
					<h1 class="text-center"><?php wp_title(''); ?></h1>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-8">

						<?php query_posts( 'cat='.get_cat_ID( get_the_title() ) ); ?>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="post-item boxed">
							<div class="post-image">
								<a href="" class="" data-rel="" title="Post Image" hidefocus="true" rel="prettyPhoto" style="outline: none;"> 
									<?php the_post_thumbnail(); ?> 
								</a>
							</div>
							<ul class="post-meta-links clearfix">
								<li class="post-meta post-date first"><a href="#" hidefocus="true" style="outline: none;"><span><?php the_date('d / M / Y'); ?></span></a></li>
								<li class="post-meta post-author"><span><?php the_category(' '); ?></span></li>
								<li class="post-meta post-read last"><a class="btn btn-icon-left" href="<?php the_permalink() ?>" hidefocus="true" style="outline: none; opacity: 0.8;"><span>Ver más</span></a></li>
							</ul>
							<div class="inner">
								<div class="post-title"><h2><a href="<?php the_permalink() ?>" hidefocus="true" style="outline: none;"><?php the_title(); ?></a></h2></div>
								<div class="post-desc">
									<?php the_excerpt(); ?>	
								</div>
							</div>
						</div>


					<?php endwhile; else : ?>
					<div class="post-item boxed">
						<div class="inner">
							<div class="post-title"><h2>Sin entradas</h2></div>
							<div class="post-desc">
								<p><?php _e( 'No hay entradas para mostrar.' ); ?></p>
							</div>
						</div>
					</div>

				<?php endif; ?>
				<?php wp_reset_query(); ?>

			</div>
			<div class="col-sm-4 sidebar-w">

				<div class="pestaña">
					<div class="blanco">
						<h3 class="text-center">Cursos</h3>
					</div>

					<div class="tabs_framed">
						<div class="inner">
							<ul class="tabs clearfix tab_id2 bookmarks2">
								<li class="first"><a href="#recentCurso" data-toggle="tab" hidefocus="true">Reciente</a></li>
								<li class="active last"><a href="#popularCurso" data-toggle="tab" hidefocus="true">Popular</a></li>
							</ul>

							<div class="tab-content boxed clearfix">
								<div class="tab-pane fade" id="recentCurso">
									<h4>Vivamus Luctus Urna Sed</h4>
									<div class="tab_image"><img src="images/temp/tabimage1.png" alt=""></div>
									<p>Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcud erat molestie vehicula. Sed auctor</p>
								</div>
								<div class="tab-pane fade in active" id="popularCurso">
									<h4>Etiam At Risus Et Justo</h4>
									<div class="tab_image pull-left"><img src="images/temp/tabimage2.png" alt=""></div>
									<p>Lorem ipsum dol or sit amet, cons ec tetur adipi scing elit. Nullam in dui mauris. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="pestaña">
					<div class="blanco">
						<h3 class="text-center">Postres</h3>
					</div>

					<div class="tabs_framed">
						<div class="inner">
							<ul class="tabs clearfix tab_id2 bookmarks2">
								<li class="first"><a href="#recentPostre" data-toggle="tab" hidefocus="true">Reciente</a></li>
								<li class="active last"><a href="#popularPostre" data-toggle="tab" hidefocus="true">Popular</a></li>
							</ul>

							<div class="tab-content boxed clearfix">
								<div class="tab-pane fade" id="recentPostre">
									<h4>Vivamus Luctus Urna Sed</h4>
									<div class="tab_image"><img src="images/temp/tabimage1.png" alt=""></div>
									<p>Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcud erat molestie vehicula. Sed auctor</p>
								</div>
								<div class="tab-pane fade in active" id="popularPostre">
									<h4>Etiam At Risus Et Justo</h4>
									<div class="tab_image pull-left"><img src="images/temp/tabimage2.png" alt=""></div>
									<p>Lorem ipsum dol or sit amet, cons ec tetur adipi scing elit. Nullam in dui mauris. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>


		</div>
	</div>
</div>
</div>
</div>

</div>
<!--/ container -->
<?php 
get_footer();
?>