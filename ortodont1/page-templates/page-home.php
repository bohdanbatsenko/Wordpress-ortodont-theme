<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ortodont1
 */

get_header('home');
?>

	<div class="home-banner">

	<div class="sub-header-block">
		<div class="container">
			<div class="sub-header">
				<div class="row">
					<div class="col-md-3 hidden-col-sm">
						<div class="site-branding navbar-brand">
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
					</div> <!-- col-md-3 -->
					<div class="col-md-7 col-sm-8">
						<div class="phone">+38 096 546 69 77</div>
						<div class="address"><span>Киев,</span> пр-т Победы, 304</div>
					</div>

					<div class="col-md-2 col-sm-4">
						<div class="social">
							<div class="text">Follow</div>
              <a href="#" class="icon facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#" class="icon insta" target="_blank"><i class="fa fa-instagram"></i></a>							
						</div>
					</div>

				</div> <!-- row -->
				</div> <!-- sub-header -->
		</div><!--container-fluid -->
		
	</div><!--sub-header-block -->

	<!-- <div class="portrait-mobile"></div> -->

		
			<div class="container">
			<div class="portrait"></div>
				<div class="row">
					<div class="hero-wrapper">
					<div class="transform"></div>
					<div class="col-md-12">
						<div class="row">

							<div class="col-md-12">
								<div class="name">
								<h2>Ирина Володина</h2>
							</div>
						</div>
						<div class="col-md-8">
							<div class="title">
								<h1>Эстетическая<br>стоматология<br></h1>
							</div>
						</div>
						<div class="col-md-6">
							<!--a href="" class="button btn-hero blue-btn">Записаться на прием</a-->
							<a href="#contact_form_pop" class="fancybox-inline button btn-hero blue-btn">Записаться на прием</a>
						</div>
					

						</div>	<!-- row -->					
					</div> <!-- container -->
					</div> <!-- hero-wrapper -->
				</div> <!-- row -->
			</div><!-- container -->

	</div> <!-- home-banner -->
	


	<div id="technology-list" class="technology">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="text ">
                                <span>Технологии,</span> которые я использую в работе
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                
                                    <div class="col-sm-12">
                                        <div class="image-block digital">
                                            <div class="visible first">
                                                <span>technology</span>
                                                <div class="promo">
                                                    DIGITAL SMILE DESIGN
                                                </div>
                                            </div>
                                            <a class="full first js-move-slider url" data-slide-to="0" href="#digital-smile">
                                                <span>technology</span>
                                                <div class="promo one">
                                                    DIGITAL SMILE DESIGN 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-lg-7 col-md-6">
                                        <div class="image-block dentistry">
                                            <div class="visible second">
                                                <span>technology</span>
                                                <div class="promo">
                                                    ЦИФРОВАЯ СТОМАТОЛОГИЯ
                                                </div>
                                            </div>
                                            <a class="full second js-move-slider url" data-slide-to="1" href="#stomatology">
                                                <span>technology</span>
                                                <div class="promo">
                                                    ЦИФРОВАЯ СТОМАТОЛОГИЯ
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                

                                
                                    <div class="col-lg-5 col-md-6">
                                        <div class="image-block laser">
                                        <div class="visible third">
                                            <span>technology</span>
                                            <div class="promo">
                                                ЛАЗЕРНАЯ СТОМАТОЛОГИЯ 
                                            </div>
                                        </div>
                                        <a class="full third js-move-slider url" data-slide-to="2" href="#laser-stomatology">
                                            <span>technology</span>
                                            <div class="promo">
                                                ЛАЗЕРНАЯ СТОМАТОЛОГИЯ
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>

                            <div class="col-md-5 absolute-block">
                                <div class="image-block vinirs">
                                <div class="visible">
                                    <span>technology</span>
                                    <div class="promo">
                                        КЕРАМИЧЕСКИЕ CAD/CAM ВИНИРЫ 
                                    </div>
                                </div>
                                    <a class="full js-move-slider" data-slide-to="3" href="#ceramic-viniry">
                                        <div class="promo">
                                            КЕРАМИЧЕСКИЕ CAD/CAM ВИНИРЫ  
                                        </div>
                                        <span>technology</span>
                                    </a>
                                </div>
                            </div>
                        
                    </div> <!-- row -->
                </div> <!-- container-fluid -->
            </div> <!-- container -->
				</div> <!-- technology-list -->
				


				<div class="detail-area">
				<div class="container">
					<div class="container-fluid">
						<div class="detail-area-carousel owl-carousel"  id="carousel-body">

							<div class="item" data-hash="digital-smile">
								<div class="row">
									<div class="col-md-12">
											<h3 class="title">DIGITAL SMILE DESIGN </h3>
									</div>
									<div class="col-md-5">
											<div class="image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/technologies/digital-smile-design.jpg)"></div>
									</div>
									<div class="col-md-7">
											<div class="text">
													<p>
													В практике я использую только всемирно известные и признанные технологии. DigitalSmile Design - техника дизайна улыбки, которая совмещает планирование формы, положения и размеров зубов. Она хороша тем, что можно получить точный проект будущих зубов, составить идеальный план лечения, спрогнозировать результат. Сперва в компьютерной программе создается виртуальная улыбка. Затем модель печатается на 3д принтере. Все вместе это называется Facially Generated Treatment Planning. Это прославленная во всем мире технология позволяет с точностью до миллиметра спланировать зубы.													
</p>
											</div>
									</div>			
								</div>	<!-- row -->							
							</div> <!-- item -->

							<div class="item" data-hash="stomatology">
                  <div class="row">
                      <div class="col-md-12">
                          <h3 class="title">ЦИФРОВАЯ СТОМАТОЛОГИЯ </h3>
                      </div>
                      <div class="col-md-5">
                          <div class="image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/technologies/digital_dentistry.jpg)"></div>
                      </div>
                      <div class="col-md-7">
                          <div class="text">
                              <p>Цифровые техно 3D-рентгенография челюстей, специфотопротокол, сканирование челюстей применяются для диагностики зубной и челюстной системы. Исходя из результата, с предельной точностью формируется план лечения, процедуры. Это является гарантией успешного лечения.
															</p>
                          </div>
                      </div>
                  </div>							
							</div> <!-- item -->

							<div class="item" data-hash="laser-stomatology">
								<div class="row">
          	      <div class="col-md-12">
          	          <h3 class="title">ЛАЗЕРНАЯ СТОМАТОЛОГИЯ </h3>
          	      </div>
          	      <div class="col-md-5">
          	          <div class="image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/technologies/laser_dentistry.jpg)"></div>
          	      </div>
          	      <div class="col-md-7">
          	          <div class="text">
          	              <p>
													Стоматологический диодный лазер - это передовой уникальный инструмент в моей практике. В особенности EPIC X - ультрасовременный диодный лазер компании BIOLASE. Он позволяет проводить эстетическую коррекцию десневых зенитов, иссечение зубодесневых карманов и другие  микрохирургические процедуры. И все это не только без крови, но и гарантирует быстрое заживление десны - буквально через 2-3 дня! 
													</p>
          	          </div>
          	      </div>
          	  	</div>
							</div> <!-- item-->

							<div class="item" data-hash="ceramic-viniry">
								<div class="row">
          	      <div class="col-md-12">
          	          <h3 class="title">КЕРАМИЧЕСКИЕ CAD/CAM ВИНИРЫ </h3>
          	      </div>
          	      <div class="col-md-5">
          	          <div class="image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/technologies/cadcam-veneer.jpg)"></div>
          	      </div>
          	      <div class="col-md-7">
          	          <div class="text">
          	              <p>
														В своей практике я использую только высококачественные и прочные материалы. В отличие от большинства стоматологий, у нас керамические виниры моделируются в компьютерной программе. Затем винир фрезеруется в полной форме по технологии CAD/CAM, из керамической заготовки, с последующей покраской. Благодаря этому риск сколов и трещин сводится к минимуму, а конструкция получается предельно прочной и цельной.</p>
          	          </div>
          	      </div>
          	  	</div>
							</div> <!-- item-->


						</div> <!-- detail-area-carousel -->

				

					</div> <!-- container-fluid -->
					<!-- <a class="button secondary url" href="#digital-smile">digital-smile</a> 
          <a class="button secondary url" href="#stomatology">stomatology</a> 
          <a class="button secondary url" href="#laser-stomatology">laser-stomatology</a>  -->

				</div> <!-- container -->
			</div> <!-- detail-area -->
				
	 
		
			</div>


		<div id="gallery" class="gallery">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery-title">
                                Примеры работ
                            </div>
                        </div>
                    </div>
                </div>
						</div> <!-- container -->


            <div class="row" id="row_append">
						<?php

								$args = array(
									'post_type' => 'projects',
									'posts_per_page' => 4,
									'post_status' => 'published',
									'paged' => $paged,
									'order' => 'date'
								);
								$projects = new WP_Query($args); ?>

								<?php	while ($projects->have_posts()) :
									$projects->the_post();								
							?>

								<div class="picture"
								data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>"
								data-max="<?= $wp_query->max_num_pages; ?>"
								>
                    <a href="<?php the_permalink(); ?>" class="gallery-img">
                        <div class="background"  style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>">
                            <div class="full">
                                <span><?php the_title(); ?></span>
                            </div>
												</div>
                    </a>

									</div>
									<?php endwhile; ?>

									<?php wp_reset_postdata(); ?>		
									
								</div> <!-- row -->
								
								<a class=" blue-btn" id="more_posts" data-template="home-projects">
								Показать еще</a>
				</div>  <!-- gallery -->
	




				<div id="reviews" class="review-area">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="reviews" class="review-title">
                                <span class="text-blue">Отзывы</span> наших клиентов
                            </div>
                        </div>

                        <div class="col-md-12">
                          
												<div class="slider js_owl owl-carousel owl-theme owl-loaded owl-drag">
                                
    
													<div class="review">
                                        <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/evgenia.jpg)"></div>

                                        <div class="name">Евгения</div>
                                        <div class="review-text">Найти талантливого доктора — непросто, найти талантливого доктора, который ещё и умеет общаться с пациентами — это большая удача! Ирина Володина превзошла все ожидания и мне есть с чем сравнить (3 года ортодонтического лечения и ортопедии столкнули с разными докторами-стоматологами). 
Доброжелательность, открытость и дискутабельность плана лечения и несомненно высокий профессионализм — те качества, которые Вы найдёте, посетив стоматологию Ирины Володиной.</div>
                                    </div>
														



																	<div class="review">
                                       <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/daria_40A46nk.jpg)"></div>
                                      
                                        <div class="name">Дарья</div>
                                        <div class="review-text">Очень довольна! Так аккуратно, красиво и все четко быстро сделал. Сейчас такая редкость найти профессионала в мед сфере. И такое счастье найти такой контакт врача. Благодарю за работу! Теперь у меня  потрясающая улыбка и уверенно могу завтра идти на мероприятие)
Отдельная благодарность за понимание и что нашли время в ограниченные сроки!</div>
                                    </div>
																		
																		
																		
																		
																		
																		<div class="review">
                                        
                                            <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/inna.jpg)"></div>
                                        
                                        <div class="name">Инна</div>
                                        <div class="review-text">Всем привет! С огромным удовольствием оставляю свой отзыв) Ирина — это единственный для меня стоматолог к которому можно прийти и не переживать за результат, потому что я наперёд знаю, что она сделает все идеально 😁 мне все понравилось, ее подход, ее команда, ее терпения на такого пациента, как я 🙈 хочу Вас поблагодарить за мою улыбку, я не ошиблась, выбрав Вас своим стоматологом, Вы  — профессионал своего дела😊</div>
                                    </div>
																		
																		
																		
																		
																		<div class="review">

                                            <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/oksana.jpg)"></div>
                                        <div class="name">Оксана</div>
                                        <div class="review-text">Попала к Ирине по рекомендациям знакомых. Сделала все зубные проблемы, которые 5 лет собирала. Мега рада! Качество, отношение, атмосфера — всё на высоте! 
Со всей ответственностью рекомендую дальше)</div>
                                    </div>
																		
																		
																		
																		<div class="review">
                                            <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/jaklin.jpg)"></div>
                                        
                                        <div class="name">Жаклин</div>
                                        <div class="review-text">Первый стоматолог в моей жизни, с которым такое понимание, доверие и результативность! Безумно благодарна за Ваш профессионализм и человечность! Сказать, что довольна Вашей работой — это ничего не сказать!</div>
                                    </div>
																		
																		
																		
																	<div class="review">
                                            <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/evgen.jpg)"></div>
                                        
                                        <div class="name">Евгений</div>
                                        <div class="review-text">Ничего не делал с зубами 20 лет из-за стереотипа 'стоматология — это всегда больно' и часто скрывал зубы за сжатой улыбкой. К Ирине Володиной попал по рекомендации. Все работы были проделаны в максимально возможном комфорте и без какой-либо боли. 100%-ная ориентированность на клиента, нацеленность на качество, ощущение профессионализма не покидало ни единого раза, это именно тот случай, когда ты можешь полностью довериться врачу и не переживать за результат.</div>
                                    </div>
																		

																		
																		<div class="review">
                                         <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/andrey.jpg)"></div>
                                        
                                        <div class="name">Андрей</div>
                                        <div class="review-text">После долгих лет скитания от стоматолога к стоматологу в постоянных поисках я его наконец нашел того, кого искал! Душевный, профессиональный и ультра-современный подход, что еще нужно в этом деле? Ирина постоянно развивается и следит за всеми современными тенденциями в стоматологии, реально стоматология - его призвание и жизнь. Тот случай, когда к стоматологу идешь с удовольствием! Строго рекомендую)</div>
                                    </div>
																		

																		
																		<div class="review">
                                            <div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/reviews/tania.jpg)"></div>
                                        
                                        <div class="name">Татьяна</div>
                                        <div class="review-text">Это стоматолог, с которым комфортно себя чувствуешь и которому доверяешь. К которому не страшно идти на приём. Который говорит, что будет не больно, и действительно ничего не болит. Работает быстро и уверенно, что даёт прекрасный качественный результат и, что не менее важно, красивый. Наконец-то я нашла стоматолога, с которым моя улыбка станет ещё красивее, а нервные клетки не будут отмирать за время приема 😅</div>
                                    </div>

																

																	</div> <!-- slider js_owl -->

                        		</div> <!-- col-md-12 -->
                        <div class="col-md-12 text-center">
                            <a href="#" class="blue-btn thin">
                                Написать в Telegram
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- review-area -->



		<div id="services" class="services">
			<div class="container">
				<div class="row">
				<div class="col-md-12">
           <div class="services-title">
          	<span class="text-blue">Наши</span> услуги
            </div>
            </div>				
				</div>

				<div class="row">

				<?php

$args = array(
	'post_type' => 'services',
	'posts_per_page' => 8,
	'post_status' => 'published',
	'paged' => $paged,
	'order' => 'date'
);
$services = new WP_Query($args); ?>

<?php	while ($services->have_posts()) :
	$services->the_post();								
?>


<div class="col-6 col-lg-3">
		<div class="serv-block">
				<div class="photo" style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>"></div>
				<div class="case"><?php the_title(); ?></div>
				<div class="price"><?php the_field('services_price'); ?>$</div>
		</div>
	</div><!-- col-6 col-lg-3 -->


	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>	


					<!--div class="col-6 col-lg-3">
						<div class="serv-block">
								<div class="photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/services/services1.png)"></div>
								<div class="case">Consultation</div>
								<div class="price">20$</div>
						</div>
					</div--><!-- col-6 col-lg-3 -->


				</div><!-- row -->

			</div><!-- container -->
		</div><!-- services -->



<div id="education" class="education-area" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/home-education.jpg)">



            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="education-title">Обучение для стоматологов</h3>
                        <div class="text">
                            
                                Я не только всегда занимаюсь самообразованием, но и стараюсь передать свои знания и навыки подрастающему поколению.
                        </div>
                        <div class="promo-education">
                            Провожу <span>мастер-классы</span> для студентов по методикам:
                        </div>
                        <ul class="education-list">
                            <li><div class="edu-list-img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/education/edu1.png)"></div>Digital Smile Design. Планирование будущего лечения</li>
                            <li><div class="edu-list-img" style="background-image: url(<?php bloginfo('template_url'); ?>/img/homepage/education/edu2.png)"></div>Фотопротокол в стоматологической практике</li>
                        </ul>
                        <div class="small-text">
                            
                                Пожалуйста, свяжитесь со мной, чтобы узнать график, подробности и 
                                наполнение программ обучения.
                            
                        </div>

												<div class="education-buttons">
													<a href="#" target="_blank" class="link blue-btn">Facebook</a>
													<a href="#" id="tele_connect" class="link blue-btn">Telegram</a>
												</div>
                    </div>
                </div>
            </div>



</div>





	<div class="blog">
		
		<div class="container">
		</div><!-- container -->
	</div><!-- blog -->
    



<?php
get_footer();