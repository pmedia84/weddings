<?php
session_start();
include("./inc/functions.php");
$db = dbconnect();
//load products
$services_q = $db->prepare('SELECT * FROM services WHERE service_category ="Weddings" LIMIT 3');
$services_q->execute();
$services_r = $services_q->fetchAll();
$meta_description = "Luxury wedding websites from Parrot Media. Get your guests to your wedding in style.";
$meta_page_title = "Wedding websites - Parrot Media";
include("./inc/Page_meta.php");
?>
<body>
	<header>
		<?php include("./inc/Nav.php"); ?>
	</header>
	<main class="content" itemscope itemtype="https://schema.org/Service">
		<meta itemprop="serviceType" content="Wedding Websites" />
		<section class="hero container">
			<div class="hero-col">
				<p class="hero-cap">
					Luxury Wedding Websites in <span itemprop="areaServed" itemscope itemtype="https://schema.org/City"><span itemprop="name">Long Sutton</span></span>, <span itemprop="areaServed" itemscope itemtype="https://schema.org/State"><span itemprop="name">Lincolnshire</span></span>
				</p>
				<h1>
					Get your <span class="accent-text">Guests</span> to your <span class="accent-text">Wedding</span> in style.
				</h1>
				<p class="my-2">
					We are <span itemprop="provider" itemscope itemtype="https://schema.org/LocalBusiness"><span itemprop="name">Parrot Media</span></span>. Get a custom Wedding Website that will wow your guests, we do all the work for you, leaving you to get on with planning your Big Day.
				</p>
<ul class="my-2 feature-list">
	<li><div class="feature-list_feature">
			<svg class="icon feather-icon"><use href="assets/icons/undraw.svg#heart"></use></svg>
			Custom Design
		</div>
	</li>
	<li><div class="feature-list_feature">
			<svg class="icon feather-icon"><use href="assets/icons/undraw.svg#heart"></use></svg>
			Live RSVP
		</div>
	</li>
	<li><div class="feature-list_feature">
			<svg class="icon feather-icon"><use href="assets/icons/undraw.svg#heart"></use></svg>
			Guest List
		</div>
	</li>

</ul>
				<a href="" class="btn-primary btn-cta">Find Out More</a>
			</div>
			<img src="assets/img/hero-img.webp" alt="Web design ideas from Parrot Media" />
		</section>
		<section class="my-4 cta-section">
			<div class="container">
				<h2>Beautiful Wedding Websites</h2>
				<p>
					A Wedding Website from Parrot Media will get your guests to your wedding in style. Our Wedding Websites don't just tell your guests everything they need to know about your big day, you can collect RSVP's, manage your guest list, collect meal choices and many more features.
				</p>
				<br>
				<p>Not only do you get an amazing design that is unique to your big day, your guests also have access to their own area where they can manage their invitation and any additional guests that you have set for them.</p>

				<div class="grid-row-3col my-2">
					<div class="grid-col">
						<h3 class="my-2">Custom Wedding website design</h3>
						<img class="border-img" src="assets/img/custom-wedding-website.webp" alt="Web design ideas from Parrot Media" />

					</div>
					<div class="grid-col">
						<h3 class="my-2">Guest Area</h3>
						<img class="border-img" src="assets/img/guest-area.webp" alt="Web design ideas from Parrot Media" />

					</div>
					<div class="grid-col">
						<h3 class="my-2">Wedding admin area</h3>
						<img class="border-img" src="assets/img/wedding-admin.webp" alt="Web design ideas from Parrot Media" />

					</div>
				</div>
			</div>
		</section>
		<section class="container">
			<h2>Features</h2>
			<div class="grid-row-3col my-3">
				<div class="info-card">
					<div class="info-card-icon">
						<svg class="feather" slot="icon">
							<use xlink:href="/assets/icons/feather.svg#users"></use>
						</svg>
					</div>
					<div class="info-card-body">
						<h3>Guest List</h3>
						<p>Manage your guest list from your own Admin area. Giving you the ultimate level of control over your guest list, you can also add and remove any additional guests you want them to bring along.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-icon">
						<svg class="feather" slot="icon">
							<use xlink:href="/assets/icons/feather.svg#message-circle"></use>
						</svg>
					</div>
					<div class="info-card-body">
						<h3>RSVP</h3>
						<p>Your guests will be able to respond to your invites with a unique RSVP code, your guest list will update in real time.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-icon">
						<svg class="icon" slot="icon">
							<use xlink:href="/assets/icons/solid.svg#utensils"></use>
						</svg>
					</div>
					<div class="info-card-body">
						<h3>Menu Planner</h3>
						<p>Build a menu for your events, such as your Wedding Breakfast. Provide your guests with the ability to choose from your menu when they RSVP</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-icon">
						<svg class="feather" slot="icon">
							<use xlink:href="/assets/icons/feather.svg#globe"></use>
						</svg>
					</div>
					<div class="info-card-body">
						<h3>Custom Domain Name</h3>
						<p>Your wedding website will come with a free custom domain name for 12 months. For example: www.ourwedding.co.uk</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-icon">
						<svg class="feather" slot="icon">
							<use xlink:href="/assets/icons/feather.svg#pen-tool"></use>
						</svg>
					</div>
					<div class="info-card-body">
						<h3>Custom Design</h3>
						<p>Your wedding website comes with a custom design, you can suggest some designs if you have seen something you like. Or we will design one for you.</p>
					</div>
				</div>
				<div class="info-card">
					<div class="info-card-icon">
						<svg class="feather" slot="icon">
							<use xlink:href="/assets/icons/feather.svg#database"></use>
						</svg>
					</div>
					<div class="info-card-body">
						<h3>Free Hosting</h3>
						<p>We will host your website for free for the first 12 months. This also includes any Tech Support.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="container" id="pricing">
				<h2>Wedding Website prices</h2>
				<p>Our wedding website pricing is simple and straightforward, we offer 2 pricing levels depending on the type of website you want and your budget.</p>
				<p>A wedding website does not have to break the bank, our packages start from &pound;10.00 per month and you can upgrade at any time you wish. All of our packages come with a custom design that will amaze your guests.</p>
				<div class="grid-row-3col my-3">

					<?php
					if ($services_r > 0) :
						foreach ($services_r as $service) : ?>
							<div class="pricing-card">
								<div class="pricing-card-header">
									<h3><?= $service['service_name']; ?></h3>
									<p><?= $service['service_description']; ?></p>
									
								</div>
								<div class="pricing-card-body">
									<p class="pricing-card-price">&pound;<?= $service['service_price']; ?> / mth</p>
									<ul>
										<?php

										//load product features for selected product
										$service_items = $db->prepare('SELECT services_items.service_id, services_items.feature_id, services_features.feature_id, services_features.feature_description FROM services_items LEFT JOIN services_features ON services_features.feature_id=services_items.feature_id WHERE services_items.service_id=' . $service['service_id'] . '');
										$service_items->execute();
										$service_items_r = $service_items->fetchAll();
										?>
										<?php foreach ($service_items_r as $feature) : ?>
											<li><?= $feature['feature_description']; ?></li>
										<?php endforeach; ?>
									</ul>
									<button class=" btn-cta btn-lg my-2 add-to-cart <?php if($service['service_cta']=="YES"){echo"btn-primary";}else{echo"btn-primary btn-secondary";};?>" data-service_id="<?= $service['service_id']; ?>" title="Click here to get started">Get Started</button>

								</div>
							</div>
					<?php endforeach;
					endif;
					?>
			</section>

			<section class="cta-section my-3">
				<div class="container">
					<h2>Guest List</h2>
					<p>Manage your guest list the easy way! Add and remove guests, create guest groups and assign a lead guest. Collect address information and many more features. </p>
					<img src="assets/img/guest-list.webp" alt="intelligent guest list manager for your wedding website">
					<a href="" class="btn-primary btn-cta my-2">Find Out More</a>
				</div>
			</section>

			<section class="my-3">
			<div class="container">
				<h2>Live RSVP</h2>
				<p>Collect RSVP's automatically from your guests. Your guests will be able to search for their invite with a unique code that is generated when you add a guest. Your guests can then respond for their household or group.</p>
				<img src="assets/img/rsvp.png" alt="intelligent guest list manager for your wedding website">
			</div>

			</section>
	</main>
	<script src="./assets/js/accordion.js"></script>
	<script src="./assets/js/cart.js"></script>
	<?php include("./inc/Footer.php"); ?>