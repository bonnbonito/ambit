<?php
	$args = array( 
		'post_type' => 'partners',
		'posts_per_page' => -1
		);
	$the_query = new WP_Query( $args );
?>
<div class="section1-container">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1><?php the_field('section1_title'); ?></h1>
				<div class="vidcontent hidden-md-down">
					<?php the_field('section1_content'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="vidwrap">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vid.png" alt="">
				</div>
				<div class="vidcontent hidden-lg-up">
					<?php the_field('section1_content'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section2-container">
	<div class="container">
		<div class="row">
			<div class="col-5">
				<?php $section2img = get_field('section2_img'); ?>
				<img src="<?php echo $section2img['url']; ?>" alt="" class="img-fluid">
			</div>
			<div class="col-7">
				<h2 class="firstWord"><?php the_field('section2_title'); ?></h2>
				<?php the_field('section2_content'); ?>
				<div class="newsletter-form">
					<form action="">
						<input type="email" class="input-email" placeholder="Email address">
						<input type="submit" value="submit" class="input-submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section3-container" id="register">
	<div class="container">
		<h1><?php the_field('section3_title'); ?></h1>
		<div class="row justify-content-center hidden-md-down">
		<?php if ( $the_query->have_posts() ) : $i = 1; $five = true; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>		
		<div class="col-2">			
			<div class="icon-wrap">
				<a href="#" class="showDefLg" data-content-id="<?php echo get_the_ID(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon1.png" alt="" class="rounded-circle">
				</a>
			</div>				
		</div>
		<div class="col-12 projectDetails flex-last" data-content-id="<?php echo get_the_ID(); ?>" style="display: none;">			
			<p class="close">X</p>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			<a href="<?php the_permalink();?>">Learn more...</a>			
		</div>
		<?php if ( $i % 5 == 0 && $five): ?>
			</div><div class="row justify-content-center hidden-md-down">
			<?php $i = 0; $five = false ?>
		<?php elseif ( $i % 6 == 0 && !$five):  ?>
		
			</div><div class="row justify-content-center hidden-md-down">
			<?php $i = 0; $five = true ?>

		<?php endif; ?>

		<?php $i++; endwhile; endif; ?>
		</div>
		

		<?php if ( $the_query->have_posts() ) : $i = 1; ?>
		<div class="row justify-content-center hidden-lg-up">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-4">
				<div class="icon-wrap">
					<a href="#" class="showDef" data-toggle="modal" data-target="#data<?php echo $i; ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon1.png" alt="" class="rounded-circle">
					</a>
				</div>				
			</div>			
			<?php $i++; endwhile; ?>
		</div>

		<?php endif; wp_reset_query(); ?>

		<div class="img-ad">
			<?php $ad = get_field('image_ad'); ?>
			<img src="<?php echo $ad['url']; ?>" alt="Ads" class="img-fluid">
		</div>

	</div>
</div>

<div class="section4-container" id="news">
	<div class="container">
	<h2 class="title-light"><?php the_field('slider_title'); ?> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/s4-icons.png" alt=""></h2>		
	<div class="flexslider">
		<?php if( have_rows('slides') ): ?>
		<div class="slides">
			<?php while ( have_rows('slides') ) : the_row(); ?>
			<div>
				<div class="row justify-content-center">
					<div class="col-sm-6">
						<div class="slide-content">
							<h2 class="bigtitle"><?php the_sub_field('title'); ?></h2>
							<div><?php the_sub_field('content') ?></div>
							<a href="<?php the_sub_field('link') ?>" title="Read more">Read more</a>
						</div>						
					</div>
					<div class="col-sm-5">
						<?php $img = get_sub_field('image'); ?>
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>">
					</div>
				</div>
			</div>			
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>	
	</div>
</div>

<?php if ( $the_query->have_posts() ) : $i = 1; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<!-- Modal -->
<div class="modal fade" id="data<?php echo $i; ?>" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/x.png" alt="Close">
				</button>
			</div>
			<div class="modal-body">
				<?php the_post_thumbnail( 'full' ); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Learn more</a>
			</div>			
		</div>
	</div>
</div>
<?php $i++; endwhile; endif; wp_reset_query(); ?>
