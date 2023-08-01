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
					Give your <span class="accent-text">Wedding</span> the <span class="accent-text">Website</span> it deserves
				</h1>

				
			</div>

		
		</section>

		
	</div>
	<?php include("./inc/Footer.php"); ?>