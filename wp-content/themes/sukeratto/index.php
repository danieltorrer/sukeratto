<?php	?>
<?php get_header(); ?>

<div class="plantilla">
	<div class="row">
		<!--<div class="col-sm-12 ">
			<div class="blanco titulo">
				<h1 class="text-center"><?php wp_title(''); ?></h1>
			</div>
		</div>-->

		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-8">
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
							<!--<li class="post-meta post-read last"><a class="btn btn-icon-left" href="<?php the_permalink() ?>" hidefocus="true" style="outline: none; opacity: 0.8;"><span>Ver más</span></a></li>-->
						</ul>
						<div class="inner">
							<div class="post-title"><h2><a href="<?php the_permalink() ?>" hidefocus="true" style="outline: none;"><?php the_title(); ?></a></h2></div>
							<div class="post-desc">
								<?php the_content(); ?>	
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
							<li class="active first"><a href="#recentCurso" data-toggle="tab" hidefocus="true">Reciente</a></li>
							<li class="last"><a href="#popularCurso" data-toggle="tab" hidefocus="true">Popular</a></li>
						</ul>

						<div class="tab-content boxed clearfix">
							<div class="tab-pane fade in active" id="recentCurso">
									<?php $cat_id = 9; //the certain category ID
									$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
									if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
									<h4><?php the_title(); ?></h4>
									<div class="tab_image"><?php the_post_thumbnail('thumbnail') ?></div>
									<p><?php the_excerpt(); ?></p>

								<?php endwhile; endif; 	wp_reset_postdata();?>	
							</div>

							<div class="tab-pane fade" id="popularCurso">
								<?php $args = array(
									'posts_per_page' => 1,
									'cat' => 9,
									'meta_key' => 'views',
									'orderby' => 'meta_value_num',
									'order' => 'ASC'
									); ?>

									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


									<a href="<?php get_permalink() ?>"><h4><?php get_the_title() ?> </h4></a>
									<div class="tab_image"><?php the_post_thumbnail('thumbnail') ?></div>
									<p><?php the_excerpt(); ?></p>

								<?php endwhile; else : ?>

								<p><?php _e( 'No hay entradas para mostrar.' ); ?></p>

								<?php endif; ?>
								<?php wp_reset_query(); ?>
								<?php
								wp_reset_postdata();
								?>
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
						<li class="active first"><a href="#recentPostre" data-toggle="tab" hidefocus="true">Reciente</a></li>
						<li class="last"><a href="#popularPostre" data-toggle="tab" hidefocus="true">Popular</a></li>
					</ul>

					<div class="tab-content boxed clearfix">
						<div class="tab-pane fade active in" id="recentPostre">
								<?php $cat_id = 3; //the certain category ID
								$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
								if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
								<h4><?php the_title(); ?></h4>
								<div class="tab_image"><?php the_post_thumbnail('thumbnail') ?></div>
								<p><?php the_excerpt(); ?></p>

							<?php endwhile; endif; ?>	
						</div>
						<div class="tab-pane fade" id="popularPostre">
								<?php $args = array(
									'posts_per_page' => 1,
									'cat' => 3,
									'meta_key' => 'views',
									'orderby' => 'meta_value_num',
									'order' => 'ASC'
									); ?>

									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


									<a href="<?php get_permalink() ?>"><h4><?php get_the_title() ?> </h4></a>
									<div class="tab_image"><?php the_post_thumbnail('thumbnail') ?></div>
									<p><?php the_excerpt(); ?></p>

								<?php endwhile; else : ?>

								<p><?php _e( 'No hay entradas para mostrar.' ); ?></p>

								<?php endif; ?>
								<?php wp_reset_query(); ?>
								<?php
								wp_reset_postdata();
								?>
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