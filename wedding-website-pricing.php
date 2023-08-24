<?php if ($services_r > 0) : ?>
			<section class="container" id="pricing">
				<h2>Website design prices</h2>
				<p>Compare our website design and build packages.</p>
				<div class="grid-row-3col my-3">
					<?php foreach ($services_r as $service) : ?>
						<div class="pricing-card">
							<div class="pricing-card-header">
								<h3><?= $service['service_name']; ?></h3>
							</div>
							<div class="pricing-card-body">
								<p class="pricing-card-price">&pound;<?= $service['service_price']; ?> / mth</p>
								<ul>
									<?php

									//load product features for selected product
									$service_items = $db->prepare('SELECT services_items.service_id, services_items.feature_id, services_features.feature_id, services_features.feature_description FROM services_items LEFT JOIN services_features ON services_features.feature_id=services_items.feature_id WHERE services_items.service_id=' . $service['service_id'] . ' LIMIT 3');
									$service_items->execute();
									$service_items_r = $service_items->fetchAll();
									?>
									<?php foreach ($service_items_r as $feature) : ?>
										<li><?= $feature['feature_description']; ?></li>
									<?php endforeach; ?>
								</ul>
								<button class="btn-primary btn-cta btn-lg my-2 add-to-cart" data-service_id="<?= $service['service_id']; ?>" title="Click here to get started">Get Started</button>
								
							</div>
						</div>
					<?php endforeach; ?>


				</div>
				<h3>Compare our packages</h3>
				<div class="table-wrapper">
					<table class="std-table">
						<th>
							<thead>
								<th></th>
								<th>Starter</th>
								<th>Enterprise</th>
								<th>eCommerce</th>
							</thead>
							<tr>
								<td>Custom Design</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>6 Pages</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Tech Support</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
							</tr>
							<tr>
								<td>Contact Form</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
							</tr>
							<tr>
								<td>Unlimited Pages</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#x"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>Free .co.uk Domain Name</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>Custom Add-ons</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#x"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>SSL Certificate</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>Unlimited Web Hosting</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>5 Business eMail Accounts</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#x"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#x"></use>
									</svg>
								</td>
							</tr>
							<tr>
								<td>Unlimited Business eMail Accounts</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#x"></use>
									</svg>
								</td>
								<td><svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg></td>
								<td>
									<svg class="feather">
										<use xlink:href="/assets/icons/feather.svg#check"></use>
									</svg>
								</td>
							</tr>
						</th>
					</table>
					<h3 class="my-3">FAQ's</h3>
					<div class="accordion-body">

						<div class="accordion-item">

							<button class="accordion-button" type="button">What Payment Methods Do You Accept?<svg class="feather">
									<use xlink:href="/assets/icons/feather.svg#chevron-down"></use>
								</svg></button>

							<div class="accordion-panel">
								<div class="accordion-panel-item">
									<p>We can accept bank transfer each month from you. However, the easiest and most convenient way to pay is via <i class="fa-brands fa-paypal"></i> PayPal. We have set up subscription plans with <i class="fa-brands fa-paypal"></i> PayPal, and as soon as we are all ready to go we will send you a link to start your first payment. This then comes out of your bank each month without you having to worry about it.</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">

							<button class="accordion-button" type="button">How Do I Change My Package? <svg class="feather">
									<use xlink:href="/assets/icons/feather.svg#chevron-down"></use>
								</svg></button>

							<div class="accordion-panel">
								<div class="accordion-panel-item">
									<p>Changing your package is really simple! All you have to do is contact us and tell us what you want to do and we will make the changes for you.</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">

							<button class="accordion-button" type="button">Is There A Minimum Contract? <svg class="feather">
									<use xlink:href="/assets/icons/feather.svg#chevron-down"></use>
								</svg></button>

							<div class="accordion-panel">
								<div class="accordion-panel-item">
									<p>There is no minimum contract length, however we do have a set up charge of £10 which also covers your first month of hosting. If you want to cancel your hosting package, simply fill out our <a href="contact">Contact</a> form and we will get in touch.</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">

							<button class="accordion-button" type="button">Do I Have Free Backups? <svg class="feather">
									<use xlink:href="/assets/icons/feather.svg#chevron-down"></use>
								</svg></button>

							<div class="accordion-panel">
								<div class="accordion-panel-item">
									<p>Yes, you really do have free daily backups that are included in your hosting packages. This is all set up automatically, so you don't need to worry!</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">

							<button class="accordion-button" type="button">How Can I View My Emails? <svg class="feather">
									<use xlink:href="/assets/icons/feather.svg#chevron-down"></use>
								</svg></button>

							<div class="accordion-panel">
								<div class="accordion-panel-item">
									<p>All our hosting packages give you access to Webmail, or for ultimate ease of use you can simply add your email account to any device that has an email client. Such as Gmail, Outlook Mail for IOS etc. If you need any help we are here to assist you in any way, so just get in touch.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>