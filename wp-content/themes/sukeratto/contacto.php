<?php 
/*
	Template name: contacto
*/
	?>

	<?php 
	get_header();
	?>


	<div class="plantilla">
		<div class="blanco">
			<div class="row ">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2 ">
							<div class="add-comment contact-form boxed">
								<div class="comment-form">
									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>	
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

							<!--<form action="#" method="post" id="commentForm" class="ajax_form">
								<div class="form-inner">
									<div class="add-comment-title"><h3 class="text-center">Envianos un mensaje</h3></div>
									<div>
										<h5>Estaremos encantados de atenderte</h5>
									</div>

									<div class="field_text">
										<input type="text" name="name" id="name" placeholder="Nombre">
									</div>

									<div class="clear"></div>

									<div class="field_text">
										<input type="text" name="email" id="email" placeholder="Correo">
									</div>

									<div class="clear"></div>

									<div class="field_text">
										<input type="text" name="telefono" id="telefono" placeholder="Telefono *">
									</div>

									<div class="clear"></div>

									<div class="field_text field_textarea">
										<textarea cols="30" rows="10" name="mensaje" id="mensaje" placeholder="Mensaje *" class="required"></textarea>
										<p>Los campos con * son obligatorios</p>
									</div>

									<div class="rowSubmit">
										<span class="btn btn-icon-left">
											<input type="submit" id="send" value="Enviar">
										</span>
									</div>
								</div>
							</form>-->
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