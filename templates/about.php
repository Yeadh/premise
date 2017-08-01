<?php 
/**
 * Template Name: about
 *
 * @package premise
 * @since premise 1.0
 */

 get_template_part('sections/hero');
 get_header(); ?>

	<section class="history-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<div class="history-text-area">
						<div class="section-header">
							<h2>Our History</h2>
							<h3><?php premise_who_are_you(); ?></h3>
						</div>
						<div class="history-text">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
							<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
						</div>
					</div>
				</div><!-- .col -->
				<div class="col-md-6 col-md-pull-6">
					<div class="hst-feature-img">
						<img src="<?php premise_homeabout_image(); ?>" alt="" >
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- End History Area -->
	<section class="team-area">
		<div class="container">
			<div class="section-header text-center">
				<h2>Our Team</h2>
				<h3>We Are Passionate and Creative</h3>
			</div><!-- .section-header -->
			<div class="row">
			
			<?php
				$premise_team = new WP_Query(array(
					'post_type' => 'team_members',
				));
				
				while ( $premise_team->have_posts() ) : $premise_team->the_post(); ?>
				
				<div class="col-sm-4">
					<div class="team-member">
						<div class="inner-team-member text-center">
							<?php the_post_thumbnail(); ?>
							<div class="member-details">
								<h3><?php the_title(); ?></h3>
								<h4>CEO</h4>
								<div class="team-social-area">
									<ul>
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">Instagram</a></li>
										<li><a href="#">Pinterest</a></li>
									</ul>
								</div><!-- .team-social-area -->
							</div><!-- .member-details -->
						</div><!-- .inner-team-member -->
					</div><!-- .team-member -->
				</div><!-- .col -->
				<?php endwhile; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!--End Team area-->
	<section class="client-area">
		<div class="container">
			<div class="section-header text-center">
				<h2>Happy Clients</h2>
				<h3>They Give Us Their Compliments</h3>
			</div><!-- .section-header -->
			<div class="row">
				<div class="col-lg-12 p-l-r-0">
					<div class="client-logo">
						<a href="#"><img src="img/client/client1.png" alt=""></a>
						<a href="#"><img src="img/client/client2.png" alt=""></a>
						<a href="#"><img src="img/client/client3.png" alt=""></a>
						<a href="#"><img src="img/client/client4.png" alt=""></a>
						<a href="#"><img src="img/client/client5.png" alt=""></a>
					</div><!-- .client-logo -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!--End Clients area-->
<?php get_footer(); ?>