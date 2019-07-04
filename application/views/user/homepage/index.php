<?php $this->load->view('user/layout/header'); ?>

<!-- Start Slider Area -->
<div class="slider__area slider--one">
	<div class="slider__activation--1">
		<!-- Start Single Slide -->
		<div class="slide fullscreen bg-image--1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="slider__content">
							<div class="slider__inner">
								<h2>“Pizza & Sandwich”</h2>
								<h1>food delivery & service</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Slide -->
	</div>
</div>
<!-- End Slider Area -->
<!-- Start Service Area -->
<section class="fd__service__area bg-image--2 section-padding--xlg">
	<div class="container">
		<div class="service__wrapper bg--white">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section__title service__align--left">
						<h2 class="title__line">How it work</h2>
					</div>
				</div>
			</div>
			<div class="row mt--30">
				<!-- Start Single Service -->
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service">
						<div class="service__title">
							<div class="ser__icon">
								<img src="<?php echo base_url('assets/user/images/icon/color-icon/1.png'); ?>" alt="icon image">
							</div>
							<h2><a href="service.html">Choose restaurant</a></h2>
						</div>
						<div class="service__details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore.</p>
						</div>
					</div>
				</div>
				<!-- End Single Service -->
				<!-- Start Single Service -->
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service">
						<div class="service__title">
							<div class="ser__icon">
								<img src="<?php echo base_url('assets/user/images/icon/color-icon/2.png'); ?>" alt="icon image">
							</div>
							<h2><a href="service.html">Select, you love to eat</a></h2>
						</div>
						<div class="service__details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore.</p>
						</div>
					</div>
				</div>
				<!-- End Single Service -->
				<!-- Start Single Service -->
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="service">
						<div class="service__title">
							<div class="ser__icon">
								<img src="<?php echo base_url('assets/user/images/icon/color-icon/3.png'); ?>" alt="icon image">
							</div>
							<h2><a href="service.html">Pickup or delivery</a></h2>
						</div>
						<div class="service__details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore.</p>
						</div>
					</div>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Service Area -->
<?php /* ?>
	<!-- Start Food Category -->
	<section class="food__category__area bg--white section-padding--lg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="section__title service__align--left">
						<p>the process of our service</p>
						<h2 class="title__line">Search by food category</h2>
					</div>
				</div>
			</div>
			<div class="food__category__wrapper mt--40">
				<div class="row">
					<!-- Start Single Category -->
					<div class="col-lg-4 col-md-6 col-sm-12 offset-lg-2">
						<div class="food__item foo">
							<div class="food__thumb">
								<a href="menu-details.html">
									<img src="<?php echo base_url('assets/user/images/product/md-product/1.jpg'); ?>" alt="product images">
								</a>
							</div>
							<div class="food__title">
								<h2><a href="menu-details.html">Breakfast Iteam</a></h2>
							</div>
						</div>
					</div>
					<!-- End Single Category -->
					<!-- Start Single Category -->
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="food__item foo">
							<div class="food__thumb">
								<a href="menu-details.html">
									<img src="<?php echo base_url('assets/user/images/product/md-product/2.jpg'); ?>" alt="product images">
								</a>
							</div>
							<div class="food__title">
								<h2><a href="menu-details.html">Lunch Iteam</a></h2>
							</div>
						</div>
					</div>
					<!-- End Single Category -->
					<!-- End Single Category -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Food Category -->
	<?php */ ?>
<!-- Start Special Menu -->
<section class="fd__special__menu__area bg-image--3 section-pt--lg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section__title service__align--left">
					<h2 class="title__line">Special Menu</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="special__food__menu mt--80">
		<div class="food__menu__prl bg-image--4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="food__nav nav nav-tabs" role="tablist">
							<a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
							<a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Pizza</a>
							<a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Sandwich</a>
						</div>
						<div class="fd__tab__content tab-content" id="nav-tabContent">
							<!-- Start Single tab -->
							<div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
								<div class="tab__content__wrap">
									<!-- Start Single Tab Content -->
									<div class="single__tab__content">
										<?php if ($allproducts) {
											foreach ($allproducts as $product) { ?>
												<!-- Start Single Food -->
												<div class="food__menu">
													<div class="food__menu__thumb">
														<a href="<?=product_details($product->id)?>">
															<img height="109" width="105" src="<?php echo base_url('assets/images/uploads/' . $product->img); ?>" alt="product images">
														</a>
													</div>
													<div class="food__menu__details">
														<div class="fd__menu__title__prize">
															<h4><a href="<?=product_details($product->id)?>"><?= $product->lib ?></a>
															</h4>
															<span class="menu__prize">$<?= $product->prixu ?></span>
														</div>
														<div class="fd__menu__details">
															<p>Ingredients :
																<?php
																$result = $this->product->getIngredientsByProduct($product->id);
																foreach ($result as $ingredient) {
																	echo $ingredient->lib;
																	if (next($result)) echo ", ";
																}
																?>
															</p>
														</div>
													</div>
												</div>
												<!-- End Single Food -->
											<?php }
										} ?>
									</div>
									<!-- End Single Tab Content -->
									<!-- Start Single Tab Content -->
									<div class="single__tab__content">
										<?php for ($i = 0; $i < 4; $i++): ?>
											<!-- Start Single Food -->
											<div class="food__menu">
												<div class="food__menu__thumb">
													<a href="menu-details.html">
														<img height="109" width="105" src="<?php echo base_url('assets/images/uploads/1.jpg'); ?>" alt="product images">
													</a>
												</div>
												<div class="food__menu__details">
													<div class="fd__menu__title__prize">
														<h4><a href="menu-details.html">Kabab Ghor</a></h4>
														<span class="menu__prize">$22</span>
													</div>
													<div class="fd__menu__details">
														<p>Food Type : Chicken Stack</p>
													</div>
												</div>
											</div>
											<!-- End Single Food -->
										<?php endfor; ?>
									</div>
									<!-- End Single Tab Content -->
								</div>
							</div>
							<!-- End Single tab -->
							<!-- Start Single tab -->
							<div class="single__tab__panel tab-pane fade" id="nav-breakfast" role="tabpanel">
								<div class="tab__content__wrap">
									<!-- Start Single Tab Content -->
									<div class="single__tab__content">
										<?php if ($allpizzas) {
											foreach ($allpizzas as $product) { ?>
												<!-- Start Single Food -->
												<div class="food__menu">
													<div class="food__menu__thumb">
														<a href="<?=product_details($product->id)?>">
															<img height="109" width="105" src="<?php echo base_url('assets/images/uploads/' . $product->img); ?>" alt="product images">
														</a>
													</div>
													<div class="food__menu__details">
														<div class="fd__menu__title__prize">
															<h4><a href="<?=product_details($product->id)?>"><?= $product->lib ?></a>
															</h4>
															<span class="menu__prize">$<?= $product->prixu ?></span>
														</div>
														<div class="fd__menu__details">
															<p>Ingredients :
																<?php
																$result = $this->product->getIngredientsByProduct($product->id);
																foreach ($result as $ingredient) {
																	echo $ingredient->lib;
																	if (next($result)) echo ", ";
																}
																?>
															</p>
														</div>
													</div>
												</div>
												<!-- End Single Food -->
											<?php }
										} ?>
									</div>
									<!-- End Single Tab Content -->
									<!-- Start Single Tab Content -->
									<div class="single__tab__content">
										<?php for ($i = 0; $i < 4; $i++): ?>
											<!-- Start Single Food -->
											<div class="food__menu">
												<div class="food__menu__thumb">
													<a href="menu-details.html">
														<img height="109" width="105" src="<?php echo base_url('assets/images/uploads/1.jpg'); ?>" alt="product images">
													</a>
												</div>
												<div class="food__menu__details">
													<div class="fd__menu__title__prize">
														<h4><a href="menu-details.html">Friends & Family Restaurant</a>
														</h4>
														<span class="menu__prize">$22</span>
													</div>
													<div class="fd__menu__details">
														<p>Food Type : Chicken Stack</p>
													</div>
												</div>
											</div>
											<!-- End Single Food -->
										<?php endfor; ?>
										<!-- Start Single Food -->
									</div>
									<!-- End Single Tab Content -->
								</div>
							</div>
							<!-- End Single tab -->
							<!-- Start Single tab -->
							<div class="single__tab__panel tab-pane fade" id="nav-lunch" role="tabpanel">
								<div class="tab__content__wrap">
									<!-- Start Single Tab Content -->
									<div class="single__tab__content">
										<?php if ($allsandwiches) {
											foreach ($allsandwiches as $product) { ?>
												<!-- Start Single Food -->
												<div class="food__menu">
													<div class="food__menu__thumb">
														<a href="<?=product_details($product->id)?>">
															<img height="109" width="105" src="<?php echo base_url('assets/images/uploads/' . $product->img); ?>" alt="product images">
														</a>
													</div>
													<div class="food__menu__details">
														<div class="fd__menu__title__prize">
															<h4><a href="<?=product_details($product->id)?>"><?= $product->lib ?></a>
															</h4>
															<span class="menu__prize">$<?= $product->prixu ?></span>
														</div>
														<div class="fd__menu__details">
															<p>Ingredients :
																<?php
																$result = $this->product->getIngredientsByProduct($product->id);
																foreach ($result as $ingredient) {
																	echo $ingredient->lib;
																	if (next($result)) echo ", ";
																}
																?>
															</p>
														</div>
													</div>
												</div>
												<!-- End Single Food -->
											<?php }
										} ?>
									</div>
									<!-- End Single Tab Content -->
								</div>
							</div>
							<!-- End Single tab -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Special Menu -->

<?php $this->load->view('user/layout/footer'); ?>
