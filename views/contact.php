<?php

namespace Dorguzen\Views;




use controllers\FeedbackController;

class contact extends \Dorguzen\Core\DGZ_HtmlView
{


	function show()
	{
		$this->addMetadata([
			'<title>Contact Us — Nolimit Media | Get a Free Quote</title>',
			'<meta name="description" content="Ready to start your project? Get in touch with the Nolimit Media team for a free consultation on web design, development, SEO, or any of our digital services.">',
			'<meta name="keywords" content="contact Nolimit Media, free quote web design Canada, digital agency consultation, hire web developer Canada">',
			'<meta property="og:title" content="Contact Us — Nolimit Media">',
			'<meta property="og:description" content="Send us a message and a member of our team will be in touch shortly to discuss your digital needs.">',
			'<meta property="og:type" content="website">',
		]);
		?>

		<!-- ==========================
        BREADCRUMB - START
		=========================== -->
		<section class="breadcrumb-wrapper" xmlns="http://www.w3.org/1999/html">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<h3 class="text-center">Contact Us</h3>
					</div>
					<div class="col-xs-6">
						<ol class="breadcrumb">
							<a href="<?=$this->controller->config->getFileRootPath()?>"><i class="fa fa-home"></i> Home</a>&nbsp;| Contact Us
						</ol>
					</div>
				</div>
			</div>
		</section>
		<!-- ==========================
            BREADCRUMB - END
        =========================== -->



		<!-- ==========================
            PAGE CONTENT - START
        =========================== -->
		<section class="content news">
			<div class="container">

				<!-- START SIDE SLIDE-IN MENU -->
                <?php
                //Pull in the PHP file that has the JS code that handles all the JS to do with placing an ad
                ?>
                <!-- END OF SIDE SLIDE-IN MENU --> 

				<h2 class="hidden">Contact</h2>
				<div class="row">


					<!------------------------------------
                    GOOGLE MAPS START
                    -------------------------------------->
					<div class="col-md-12">
						<div class="attachment">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2872.1948941710457!2d-78.8945969880641!3d43.95533337096873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d51ba3a0b150b3%3A0x115ffe01fc47834d!2s2255%20Hackett%20Pl%2C%20Oshawa%2C%20ON%20L1L%200B3!5e0!3m2!1sen!2sca!4v1781984478534!5m2!1sen!2sca" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<!------------------------------------
                    GOOGLE MAPS END
                    -------------------------------------->





					<!------------------------------------
                    MAIN PAGE SECTION START
                    -------------------------------------->
					<div class="col-sm-9" style="margin-top: 50px;">
						<h2>Send us a quick message</h2>

						<form action="<?=$this->controller->config->getFileRootPath()?>feedback/processContact" method="post">
							<input type="hidden" name="_csrf_token" value="<?=getCsrfToken()?>">
							<div class="row">
								<div class="col-md-6">
									<label class="label-control" for="name">Name</label>
									<input type="text" id="name" name="name" class="form-control" required />
								</div>
								<div class="col-md-6">
									<label class="label-control" for="email">Email</label>
									<input type="email" id="email" name="email" class="form-control" required />
								</div>

								<div class="col-md-6">
									<label class="label-control" for="subject">Phone number</label>
									<input type="text" class="form-control" id="phone" name="phone" />
								</div>

								<div class="col-md-6">
									<label class="label-control" for="message">Tell us more about your requirement</label>
									<textarea class="form-control" id="message" name="message" rows="8"></textarea>
								</div>

								<div class="col-md-6" style="margin-top:10px;">
									<label></label>
									<input type="submit" id='sendMessage' name="sendMessage" value="Submit" class="btn btn-primary" />
								</div>
							</div>
						</form>

					</div>
					<!------------------------------------
                    MAIN PAGE END
                    -------------------------------------->


					<!------------------------------------
                    START OF SIDEBAR
                    -------------------------------------->
					<div class="col-sm-3 mt-4 mt-sm-0">
						<aside class="sidebar right">

							<!-- WIDGET: CONTACT INFO - START -->
							<div class="card border-0 shadow-sm mb-4" style="border-radius:12px; overflow:hidden;">
								<div class="card-header text-white fw-bold" style="background:var(--site-theme, #1565C0);">
									Contact Info
								</div>
								<div class="card-body">
									<p class="mb-2">
										<i class="fas fa-phone me-2"></i>
										<strong>Phone:</strong>
										<?php $tel = config('app.site_contact_tel'); echo htmlspecialchars(!empty($tel) ? $tel : 'site-contact-number-here'); ?>
									</p>
									<p class="mb-0">
										<i class="fas fa-envelope me-2"></i>
										<a href="mailto:<?= htmlspecialchars(config('app.appEmail')) ?>">Send us an email</a>
									</p>
								</div>
							</div>
							<!-- WIDGET: CONTACT INFO - END -->


							<!-- WIDGET: FACEBOOK NEWS - START -->
							<div class="card border-0 shadow-sm mb-4" style="border-radius:12px; overflow:hidden;">
								<div class="card-header text-white fw-bold" style="background:var(--site-theme, #1565C0);">
									Facebook
								</div>
								<div class="widget widget-facebook-news card-body">
									<div class="fb-page" data-height="800" data-href="https://www.facebook.com/yourAppName" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
										<blockquote cite="https://www.facebook.com/yourAppName/yourCity" class="fb-xfbml-parse-ignore">
											<a href="https://www.facebook.com/yourAppName">Facebook</a>
										</blockquote>
									</div>
								</div>
							</div>
							<!-- WIDGET: FACEBOOK NEWS - END -->



							<!-- WIDGET: FACEBOOK NEWS - START -->
							<div class="card border-0 shadow-sm mb-4" style="border-radius:12px; overflow:hidden;">
								<div class="card-header text-white fw-bold" style="background:var(--site-theme, #1565C0);">
									Twitter
								</div>
								<div class="widget" id="twitter-news">
									<a class="twitter-timeline" data-width="265" data-height="800" href="https://twitter.com/yourAppName">Tweets by yourAppName</a>
									<script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
								</div>
							</div>
							<!-- WIDGET: FACEBOOK NEWS - END -->



						</aside>
					</div><!--END OF COL-SM-3 DIV CONTAINING THE SIDEBAR 'ASIDE' ELEMENT-->
				</div><!--END OF ROW DIV, THE FIRST ELEMENT INSIDE THE CONTAINER DIV - WH WRAPS AROUND, OR IS FOLLOWED (INSIDE OF IT) BY THE COL-SM-9 DIV THAT HOLDS THE MAIN BODY OF THE PAGE-->
			</div><!--END OF CONTAINER DIV-->
		</section>
		<!-- ==========================
            BLOG - END
        =========================== -->
		<?php
	}
}

