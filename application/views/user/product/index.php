<?php $this->load->view('user/layout/header'); ?>

<!-- Start Blog List View Area -->
<section class="blog__list__view section-padding--lg menudetails-right-sidebar bg--white">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="food__menu__container">
					<div class="food__menu__inner d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
						<div class="food__menu__thumb">
							<img src="<?php echo base_url('assets/images/uploads/' . $product->img); ?>" alt="images">
						</div>
						<div class="food__menu__details">
							<div class="food__menu__content">
								<h2><?= $product->lib ?></h2>
								<ul class="food__dtl__prize d-flex">
									<li>$<?= $product->prixu ?></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incid
									dunt ut labo dolore magna aliqua. Ut enim ad minim veniaquis nostrud exercit ullamco
									laboris nisi ut aliq.</p>
								<div class="product-action-wrap">
									<div class="prodict-statas"><span>Category : <?= $product->cat_lib ?></span></div>
									<div class="product-quantity">
										<form id='myform' method='POST' action='#'>
											<div class="product-quantity">
												<div class="cart-plus-minus">
													<input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
													<div class="add__to__cart__btn">
														<a class="food__btn" href="cart.html">Add To Cart</a>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Product Descrive Area -->
					<div class="menu__descrive__area">
						<div class="menu__nav nav nav-tabs" role="tablist">
							<a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">Description</a>
						</div>
						<!-- Start Tab Content -->
						<div class="menu__tab__content tab-content" id="nav-tabContent">
							<!-- Start Single Content -->
							<div class="single__dec__content fade show active" id="nav-all" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliqui comi modo consequat. Duis aute irure
									dolor in reprehenderit in voluptate velit esse cillumfugiat nu pariatur.Excepteur
									sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
									id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
									accusantium doloremque laudantium,</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labor dolore magna aliqua. Ut enim minim veniam, <strong>“quis nostrud
										exercitation ullamco laboris nisi ut aliqui ”</strong> modo consequat. Duis aute
									irure dolor in reprehenderit in voluptate velit esse cillumfugiat nu
									pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
									deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
									sit voluptatem accusantium doloremque laudantium,</p>
							</div>
							<!-- End Single Content -->
							<!-- Start Single Content -->
							<div class="single__dec__content fade" id="nav-breakfast" role="tabpanel">
								<div class="review__wrapper">
									<!-- Start Single Review -->
									<div class="single__review d-flex">
										<div class="review__thumb">
											<img src="images/testimonial/rev/1.jpg" alt="review images">
										</div>
										<div class="review__details">
											<h3>Robart Hanson</h3>
											<div class="rev__meta d-flex justify-content-between">
												<span>Admin - February  13,  2018</span>
												<ul class="rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipis icing elit, sed tdomino
												eiusd tempor incididunt ut labore et dolore magna aliqua. Ut e veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquiconsequat.</p>
										</div>
									</div>
									<!-- End Single Review -->
									<!-- Start Single Review -->
									<div class="single__review d-flex">
										<div class="review__thumb">
											<img src="images/testimonial/rev/2.jpg" alt="review images">
										</div>
										<div class="review__details">
											<h3>Robart Hanson</h3>
											<div class="rev__meta d-flex justify-content-between">
												<span>Admin - February  13,  2018</span>
												<ul class="rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipis icing eltempor incididunt
												labore et dolore magna aliqua. Ut enim adm veniam, quis nostrud
												exercitation.</p>
										</div>
									</div>
									<!-- End Single Review -->
								</div>
							</div>
							<!-- End Single Content -->
						</div>
						<!-- End Tab Content -->
					</div>
					<!-- End Product Descrive Area -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="popupal__menu">
							<h4>Popular Menu</h4>
						</div>
					</div>
				</div>
				<div class="row mt--30">
					<?php foreach ($popularProducts as $product): ?>
						<!-- Start Single Product -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="beef_product">
								<div class="beef__thumb">
									<a href="<?=product_details($product->id)?>">
										<img src="<?php echo base_url('assets/images/uploads/' . $product->img); ?>" alt="beef images" height="190" width="250">
									</a>
								</div>
								<div class="beef__hover__info">
									<div class="beef__hover__inner">
										<span>Special</span>
										<span>offer</span>
									</div>
								</div>
								<div class="beef__details">
									<h4><a href="<?=product_details($product->id)?>"><?= $product->lib ?></a></h4>
									<ul class="beef__prize">
										<li class="old__prize">$<?= $product->prixu + 5 ?></li>
										<li>$<?= $product->prixu ?></li>
									</ul>
									<div class="beef__cart__btn">
										<a href="cart.html">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 md--mt--40 sm--mt--40">
				<div class="food__sidebar">
					<!-- Start Search Area -->
					<div class="food__search">
						<h4 class="side__title">Search</h4>
						<div class="serch__box">
							<input type="text" placeholder="Search keyword">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
					<!-- End Search Area -->
					<?php /* ?>
					<!-- Start Recent Post -->
					<div class="food__recent__post mt--60">
						<h4 class="side__title">Recent Posts</h4>
						<div class="recent__post__wrap">
							<!-- Start Single Post -->
							<div class="single__recent__post d-flex">
								<div class="recent__post__thumb">
									<a href="blog-details.html">
										<img src="<?php echo base_url('assets/user/images/blog/sm-img/4.jpg'); ?>" alt="post images">
									</a>
								</div>
								<div class="recent__post__details">
									<span>February  13,  2018</span>
									<h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
								</div>
							</div>
							<!-- End Single Post -->
						</div>
					</div>
					<!-- End Recent Post -->
					<?php */ ?>
					<!-- Start Category Area -->
					<div class="food__category__area mt--60">
						<h4 class="side__title">Categories</h4>
						<ul class="food__category">
							<?php foreach ($this->Site->getAllCategories() as $category): ?>
								<li><a href="#"><?= $category->lib ?> <span></span></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<!-- End Category Area -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Blog List View Area -->

<?php $this->load->view('user/layout/footer'); ?>
