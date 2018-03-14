<? get_header(); ?>

<!-- main -->
		<section class="main">
			<script>
				$(document).ready(function() {
					$(".fancybox").fancybox({
						openEffect	: 'none',
						closeEffect	: 'none'
					});
			});</script>
			<!-- services -->
			<section class="services">

				<!-- services-left-col -->
				<div class="services-left-col">
					<!--<h2>Imax Кинотеатр</h2>-->

					<!-- slider -->
					<div class="slider" style="margin-top:9px; height: 404px;"><!--//Стиль прописан здесь, чтобы его убрать-->

						<div class="slides_container" style="height: 404px;">
							<!--<a href = "http://titanarena.ru/block6/ded-moroz-v-titan-arene/"><img src="http://titanarena.ru/wp-content/uploads/2014/08/santa.png" alt=""></a>-->
							<!--<a class="fancybox" href = "http://titanarena.ru/wp-content/uploads/2015/02/image-0001.jpg"><img src="http://titanarena.ru/wp-content/uploads/2015/02/titan_ice.png" alt=""></a>-->
							<!--<a href = "http://titanarena.ru/block6/otkrytie-magazina-bershka/"><img src="http://titanarena.ru/wp-content/uploads/2015/03/Bershka.jpg" alt=""></a>-->
<a href = "http://titanarena.ru/brend/nord-vil/"><img src="http://titanarena.ru/wp-content/uploads/2018/01/nordvill2.jpg"></a>
							<?php
							/*$additional_loop = new WP_Query("post_type=imax&meta_key=tabislide&meta_value=yes&paged=$paged");
							while ($additional_loop->have_posts()) : $additional_loop->the_post();
							$imax1 = get_post_meta($post->ID,'imax1',true);
							$imax2 = get_post_meta($post->ID,'imax2',true);
							$imax3 = get_post_meta($post->ID,'imax3',true);
							$imax4 = get_post_meta($post->ID,'imax4',true);
							?>
							<div class="col-slide">
								<div class="date"><p><?php echo $imax1; ?></p><b class="month"><?php echo $imax2; ?></b></div>
								<div class="text-imax">
									<a href="<? bloginfo('url'); ?>/imax-kinoteatr/" class="link-slide">смотреть</a>
									<span class="name-film"><?php the_title(); ?></span>
									<span class="genre"><?php echo $imax3; ?></span>
								</div>
								<?php the_post_thumbnail(array(316,400)); ?>
							</div>
							<?php endwhile; */?>
						</div>

					</div>
					<!-- end slider -->

				</div>
				<!-- end services-left-col -->

				<!-- services-top-col -->
				<div class="services-top-col">
					<a href="/block6/biliardnii-klub-aristokrat/"><img src="http://titanarena.ru/wp-content/uploads/2017/01/biliard.jpg" alt="" /></a>
					<!--img src="http://titanarena.ru/wp-content/uploads/2014/08/pull_and_bear.jpg" alt="" /-->
				<?
				/*$additional_loop = new WP_Query("post_type=block1&name=baner-risunok&paged=$paged");
				if ( $additional_loop->have_posts() ) :
				while ($additional_loop->have_posts()) : $additional_loop->the_post();
				$block1bis = get_post_meta($post->ID,'block1bis',true); ?>
				<a href="<?php echo $block1bis; ?>"><?php the_post_thumbnail(); ?></a>
				<?php
				endwhile;
				endif;*/
				?>

				<?
				$additional_loop = new WP_Query("post_type=block1&name=ledovaya-arena&paged=$paged");
				if ( $additional_loop->have_posts() ) :
				while ($additional_loop->have_posts()) : $additional_loop->the_post();
				$block1bis = get_post_meta($post->ID,'block1bis',true);
				?>
					<div class="ser-top-col-text">
						<h2><? the_title(); ?></h2>
						<p>Фотографии с мероприятий, проходивших в&nbsp;ТРК Титан&nbsp;Арена.</p>
						<a href="<? //echo $block1bis; ?>/fotoalbomy/">перейти</a>
					</div>
				<?
					endwhile;
					endif;
				?>
				</div>
				<!-- end services-top-col -->

				<!-- services-bottom-col -->
				<div class="services-bottom-col">
				<?
				$additional_loop = new WP_Query("post_type=block1&name=fudkort&paged=$paged");
				if ( $additional_loop->have_posts() ) :
				while ($additional_loop->have_posts()) : $additional_loop->the_post();
				$block1bis = get_post_meta($post->ID,'block1bis',true);
				?>
					<h2><? the_title(); ?></h2>
					<? the_content(); ?>
					<a href="<? echo $block1bis; ?>">рестораны и кафе</a>
				<?
					endwhile;
					endif;
				?>
				</div>
				<!-- end services-bottom-col -->

			</section>
			<!-- end services -->

			<!-- brands -->
			<section class="brands">

				<!-- brands-ins -->
				<div class="brands-ins">

					<!-- brands-main -->
					<div class="brands-main">
						<p class="title"><a href="<? bloginfo('url'); ?>/brendy/">132 магазина</a><span>Мы сотрудничаем более чем <br />с 50 именитыми брендами </span></p>
						<div class="clear"></div>
						<p>4 уровня комплекса товаров широкого спроса,<br />а также более 3 000 м2 высококлассных<br /> развлечений</p>
						<a href="<? bloginfo('url'); ?>/karta-centra/" class="button-brand">смотреть план этажей</a>
					</div>
					<!-- end brands-main -->
					<?
						$additional_loop = new WP_Query("post_type=block2&order=ASC&paged=$paged");
						$c1 = 1;
						while ($additional_loop->have_posts()) : $additional_loop->the_post();
						?>
						<a href="<? the_permalink(); ?>" class="logo-<? echo $c1; ?>"><? the_post_thumbnail(); ?></a>
						<?
						$c1 = $c1 +1;
						endwhile;
					?>
				</div>
				<!-- end brands-ins -->

			</section>
			<!-- end brands -->

			<!-- news -->
			<section class="news">

				<!-- news-content -->
				<div class="news-content">
					<!--<h2>события</h2>-->
					<h2>новости</h2>
					<!--<ul class="tabs_news">
						<?php
						$post_type = 'block6';
						$tax = 'block6_category';
						$args1=array(
							'exclude' => '15',
							  'child_of' => 0,
							  'hide_empty' => false
							);
						$tax_terms = get_terms($tax,$args1);
						if ($tax_terms) {
						  $licount = 1;
						  foreach ($tax_terms  as $tax_term) {
							$args=array(
								'exclude' => '15',
							  'post_type' => $post_type,
							  "$tax" => $tax_term->slug,
							  'post_status' => 'publish',
							  'posts_per_page' => -1,
							  'caller_get_posts'=> 1

							);
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) { ?>
							<li><a href="#tab<? echo $tax_term->term_id; ?>_news"><? echo $tax_term->name; ?></a></li>
							<?
							}
							wp_reset_query();
							$licount++;
						  }

						}
						?>
					</ul>-->

					<div class="tab_container_news">
						<?php
						//$additional_loop = new WP_Query("post_type=block6&cat-15&paged=$paged");
						$additional_loop = new WP_Query("post_type=block6&meta_key=tabs&meta_value=yes&paged=$paged");
						while ($additional_loop->have_posts()) : $additional_loop->the_post();
						?>
						<div class="main-events">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail();?>
								<?php the_title(); ?>
								<p><?php the_excerpt(); ?></p>
							</a>
						</div>
						<?php endwhile; ?>
						<?php
						$post_type = 'block6';
						$tax = 'block6_category';
						$args1=array(
               				  'exclude' => '15',
							  'child_of' => 0,
							  'hide_empty' => false
							);
						$tax_terms = get_terms($tax,$args1);
						if ($tax_terms) {
						  $licount = 1;
						  foreach ($tax_terms  as $tax_term) {
							$args=array(
							  'exclude' => '15',
							  'post_type' => $post_type,
							  /*"$tax" => $tax_term->slug,*/
							  'post_status' => 'publish',
							  'posts_per_page' => 6,
							  'caller_get_posts'=> 1,
							  'meta_query' => array(
									array(
										'key'     => 'tabs',
										'value'   => 'yes',
										'compare' => 'NOT LIKE'
									)
								)
							  /*'offset'=>1*/
							);//meta_key=tabs&meta_value=yes
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) { ?>
							<div id="tab<? echo $tax_term->term_id; ?>_news" class="tab_content_news">
							<div class="all-events">
							<?
							  while ($my_query->have_posts()) : $my_query->the_post();
							  ?>
								<div class="col-events">
									<a href="<? the_permalink(); ?>">
										<div class="col-events_img"><? the_post_thumbnail(array(185,168)/*,array(185,168)*/); ?></div>
										<?php the_title(); ?>
										<p><?php the_excerpt(); ?></p>
										<span><? the_time('d.m.Y'); ?></span>
									</a>
								</div>
								<?php
							  endwhile;
							  ?>
							  </div>
							  </div>

							  <?
							}
							wp_reset_query();
							$licount++;
						  }

						}
						?>



					</div>

				</div>
				<!-- end news-content -->

				<!-- more-news -->
				<div class="more-news">
					<a href="<?php bloginfo('url'); ?>/novosti">еще новости</a>
				</div>
				<!-- end more-news -->

			</section>
			<!-- end news -->

		</section>
		<!-- end main -->

<? get_footer(); ?>
