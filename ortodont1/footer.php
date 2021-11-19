<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ortodont1
 */

?>

	<footer  class="site-footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-12">
					<div class="info-part">
						<div class="title">Разделы</div>
					</div>
					<ul class="footer-list">
						<li class="footer-list-item"><a href="" class="footer-link">Технологии</a></li>
						<li class="footer-list-item"><a href="" class="footer-link">Примеры работ</a></li>
						<li class="footer-list-item"><a href="" class="footer-link">Стоимость работ</a></li>
						<li class="footer-list-item"><a href="" class="footer-link">Отзывы</a></li>
					</ul>
					<div class="site-branding ">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$devwp_description = get_bloginfo( 'description', 'display' );
					if ( $devwp_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $devwp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->					
				</div>

				<div class="col-md-4 col-12">
					<div class="info-part">
						<div class="title">Контакты</div>
					</div>
					<div class="info">
						<span>Адрес</span>
						Киев, пр-т Победы, 304
					</div>
					<div class="info phone">
						<span>Телефон</span>
						<a href="">+38 093 555 55 55</a>
					</div>
					<div class="social social-footer">
							<div class="text">Follow</div>
              <a href="#" class="icon facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#" class="icon insta" target="_blank"><i class="fa fa-instagram"></i></a>							
					</div>					

				</div>

				<div class="col-md-4 col-12">
				<div class="info-part">
						<div class="title">Свяжитесь с нами</div>
					</div>
					<div class="info">
						<span>Вы можете подписаться рассылку для того чтобы получать 
							уведомления, новости, быть в курсе событий
						</span>
						<?php echo do_shortcode('[contact-form-7 id="138" title="Footer Subscription"]') ?>
					</div>
						<div class="developed">Разработка сайта: <a href="https://www.bohdandev.com.ua/" target="_blank">BBDesign</a></div>
				</div>

			</div><!-- row -->

		</div> <!-- container -->
		
		<div style="display:none" class="fancybox-hidden">
    <div id="contact_form_pop">
        <?php echo do_shortcode('[contact-form-7 id="139" title="Apply appointment"]'); ?>
    </div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
