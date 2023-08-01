<?php
session_start();
$meta_description = "Creative web solutions";
$meta_page_title = "Luxury Wedding Websites from Parrot Media";
include("./inc/Page_meta.php"); ?>

<body>
	<header>
		<?php include("./inc/Nav.php"); ?>
	</header>


	<div class="content" itemscope itemtype="https://schema.org/Service">
		<meta itemprop="serviceType" content="Web Development" />
		<section class="hero container">
			<div class="hero-col">
				<p class="hero-cap">
					Wedding websites <span itemprop="areaServed" itemscope itemtype="https://schema.org/City"><span itemprop="name">Long Sutton</span></span>, <span itemprop="areaServed" itemscope itemtype="https://schema.org/State"><span itemprop="name">Lincolnshire</span></span>
				</p>
				<h1>
					Coming Soon!
				</h1>
				<p>Wedding websites that will wow your guests. </p>

				
			</div>

		
		</section>

		
	</div>
	<?php include("./inc/Footer.php"); ?>