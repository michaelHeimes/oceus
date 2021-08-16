<?php get_header();
	while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'inc/modules/hero' ); ?>

	<section class="wysi">
		<div class="contain">
			<?php the_content(); ?>
			
<!--
			<div class="action-fade">
				<h3 class="action-title">Commercial</h3>
				<p class="action-text">From remote, rural areas to densely populated cities, Oceus Networks’ products and services allow real-time access to critical information in diverse environments.</p>
				<div class="action-block" id="action-block-C">
					<div class="action-wrap">
						<img src="<?php bloginfo('template_url'); ?>/dist/img/action-commercial.jpg" alt="">
						<div class="poi-mobile" id="poi-mobile-C">
							<div class="poi" id="poi-mobile-C-1"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-C-2"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-C-3"><div class="poi-dot"></div></div>
						</div>
					</div>
						
					<div class="poi poi-desktop" id="poi-C-1">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Xiphos transmits IoT and Sensor data providing real-time analytics on crop health.</div>
					</div>
					<div class="poi poi-desktop" id="poi-C-2">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Xiphos connects farm employees and provides real-time data from anywhere on their property through a private 5G system.</div>
					</div>
					<div class="poi poi-desktop" id="poi-C-3">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">IoT smart agriculture systems utilizes private 5G/4G networks for real-time data to improve crop management and yield.</div>
					</div>
				</div>
			</div>
-->

			<div class="action-fade">
				<h3 class="action-title">Commercial Markets</h3>
				<p class="action-text">Oceus Networks delivers scalable wireless 5G private cellular network solutions, enabling operators shifting to data-driven operations and requiring enormous device and sensor densities linked to their networks. Oceus. Enabling tomorrow's Industrial Internet of Things and Industry 4.0 today.</p>

				<div class="action-block" id="action-block-A">
					<div class="action-wrap">
						<img src="<?php bloginfo('template_url'); ?>/dist/img/Oceus_in_Action_commercial.jpg" alt="">
						<div class="poi-mobile" id="poi-mobile-A">
							<div class="poi" id="poi-mobile-AA-1"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-AA-2"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-AA-3"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-AA-4"><div class="poi-dot"></div></div>
						</div>
					</div>
						
					<div class="poi poi-desktop" id="poi-AA-1">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Continuous communication, tracking, and control of Automated Ground Vehicles.</div>
						
					</div>
					<div class="poi poi-desktop" id="poi-AA-2">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Connectivity for productive devices including laptops, tablets, 2-way radios, and phones.</div>
					</div>
					<div class="poi poi-desktop" id="poi-AA-3">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Tagging, tracking, and metrics of inventory to the sub-pallet level.</div>
					</div>
					<div class="poi poi-desktop" id="poi-AA-4">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Real-time monitoring of HVAC systems.</div>
					</div>
				</div>
			</div>
			
			<div class="action-fade">
				<h3 class="action-title">Defense &amp; Intelligence</h3>
				<p class="action-text">Explore how Oceus’ products and solutions interact in the field. From the desert to the sea, we serve the defense and intelligence community with secure and reliable connectivity.</p>

				<div class="action-block" id="action-block-A">
					<div class="action-wrap">
						<img src="<?php bloginfo('template_url'); ?>/dist/img/action-defense.jpg" alt="">
						<div class="poi-mobile" id="poi-mobile-A">
							<div class="poi" id="poi-mobile-A-1"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-A-2"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-A-3"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-A-4"><div class="poi-dot"></div></div>
						</div>
					</div>
						
					<div class="poi poi-desktop" id="poi-A-1">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">IoT/Sensors provide secure convoy communications, situational awareness and real-time reporting.</div>
						
					</div>
					<div class="poi poi-desktop" id="poi-A-2">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Ruggedized Xiphos communication platforms designed to integrate into military vehicles provide enroute communications.</div>
					</div>
					<div class="poi poi-desktop" id="poi-A-3">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Xiphos Private LTE enables secure communications to the tactical edge, including seamless encrypted voice, video and data services, using approved CSFC architectures.</div>
					</div>
					<div class="poi poi-desktop" id="poi-A-4">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Airborne asset used to extend and connect Private LTE coverage areas.</div>
					</div>
				</div>
			</div>
			
			<div class="action-fade">
			<h3 class="action-title">Federal Civilian</h3>
			<p class="action-text">Our solutions address the rescue, recovery and security challenges of federal agencies, whether it's secure communications between Coast Guard vessels, international embassy personnel, or agents in remote border locations.</p>
				<div class="action-block" id="action-block-B">
					<div class="action-wrap">
						<img src="<?php bloginfo('template_url'); ?>/dist/img/action-federal.jpg" alt="">
						<div class="poi-mobile" id="poi-mobile-B">
							<div class="poi" id="poi-mobile-B-1"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-B-2"><div class="poi-dot"></div></div>
						</div>
					</div>
						
					<div class="poi poi-desktop" id="poi-B-1">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Xiphos Private LTE provides broadband connectivity to deployed teams back to their ship's bridge to enable real-time voice and video communications and situational awareness.
	</div>
					</div>
					<div class="poi poi-desktop" id="poi-B-2">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Xiphos Macro class system provides large bubble of private 5G and 4G services, enabling onboard ship communications and offboard communications to deployed teams.
	</div>
					</div>
					
				</div>
			</div>

			<div class="action-fade">
				<h3 class="action-title">Public Safety</h3>
				<p class="action-text">Oceus Networks makes reliable communications possible in challenging locations, which is key to first responders’ ability to save lives and ensure public safety.</p>
				<div class="action-block" id="action-block-D">
					<div class="action-wrap">
						<img src="<?php bloginfo('template_url'); ?>/dist/img/action-safety.jpg" alt="">
						<div class="poi-mobile" id="poi-mobile-D">
							<div class="poi" id="poi-mobile-D-1"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-D-2"><div class="poi-dot"></div></div>
							<div class="poi" id="poi-mobile-D-3"><div class="poi-dot"></div></div>
						</div>
					</div>
						
					<div class="poi poi-desktop" id="poi-D-1">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">Xiphos provides coverage on live mission sets with first responders on the ground. Integrated ATAK and LMR create situational awareness and enable pinpointing the user’s location.</div>
					</div>
					<div class="poi poi-desktop" id="poi-D-2">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">First responder uses end user devices to communicate and provide real-time health of the first responder and other members of the team. </div>
					</div>
					<div class="poi poi-desktop" id="poi-D-3">
						<div class="poi-dot"></div>
						<div class="poi-tooltip">In the hands of first responders, <a href="/products/xiphos-micro">Xiphos Micro</a> enables communications on the ground throughout the squad. Group coverage provides situational awareness and communication services between first responders.</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	
	<?php get_template_part( 'inc/modules/getInTouch'); ?>
	

	<?php endwhile; ?>
<?php get_footer(); ?>
