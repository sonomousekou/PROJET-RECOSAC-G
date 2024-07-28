@extends('site.includes.base')
@section('title')
{{ __('Acceuil') }}
@endsection

@section('content')
    		<!-- Start Slider Area -->
		<section id="slider_area" class="text-center">
			<div class="slider_active owl-carousel">
				<div class="single_slide" style="background-image: url(assets_client/img/slider/1.jpg); background-size: cover; background-position: center;">
					<div class="container">	
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-left slider-animated-1">						
									<p class="animated">New Year 2018</p>
									<h1 class="animated">best shopping</h1>
									<h4 class="animated">Big Sale of This Week 50% off</h4>
									<a href="#" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>						
					</div>
				</div>
				
				<div class="single_slide" style="background-image: url(assets_client/img/slider/2.jpg); background-size: cover; background-position: center ;">
					<div class="container">		
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-center slider-animated-2">						
									<p class="animated">Women fashion</p>
									<h1 class="animated">popular style</h1>
									<h4 class="animated">Big Sale of This Week 50% off</h4>
									<a href="#" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>	
					</div>
				</div>
				
				<div class="single_slide" style="background-image: url(assets_client/img/slider/3.jpg); background-size: cover; background-position: center ;">
					<div class="container">
						<div class="single-slide-item-table">
							<div class="single-slide-item-tablecell">
								<div class="slider_content text-right slider-animated-3">						
									<p class="animated">Men Collection</p>
									<h1 class="animated">popular style</h1>
									<h4 class="animated">Big Sale of This Week 50% off</h4>
									<a href="#" class="btn main_btn animated">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Slider Area -->		

		<!-- Special Offer Area -->
		<div class="special_offer_area gray_section mt-3">
			<div class="container">
				<div class="row">		
					<div class="col-md-7 text-left">
						<div class="special_info">			
							<h3>Men Collection 2018</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum</p>							
							<a href="#" class="btn main_btn">Shop Now</a>					
						</div>
					</div>
				</div>

			</div>
		</div> <!-- End Special Offer Area -->


        <!--  Blog -->
        <section id="blog_area" class="section_padding">
            <div class="container">	
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section_title">							
							<h2>latest <span>Blog</span></h2>
							<div class="divider"></div>
						</div>
					</div>
				</div>			
				
				<div class="row">	
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single_blog">
							<div class="single_blog_img">
								<img src="assets_client/img/blog/1.jpg" alt="">
								<div class="blog_date text-center">
									<div class="bd_day"> 25</div>
									<div class="bd_month">Aug</div>
								</div>
							</div>
												
							<div class="blog_content">	
								<h4 class="post_title"><a href="#">Integer euismod dui non auctor</a> </h4>
								<ul class="post-bar">
									<li><i class="fa fa-user"></i> Admin</li>									
									<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
									<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
								</ul>							
								<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
							</div>
						</div>
					</div> <!--  End Col -->				
					
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single_blog">
							<div class="single_blog_img">
								<img src="assets_client/img/blog/2.jpg" alt="">
								<div class="blog_date text-center">
									<div class="bd_day"> 25</div>
									<div class="bd_month">Aug</div>
								</div>
							</div>
												
							<div class="blog_content">
								<h4 class="post_title"><a href="#">Integer tempor urna a condimentum</a> </h4>								
								<ul class="post-bar">
									<li><i class="fa fa-user"></i> Admin</li>									
									<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
									<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
								</ul>
								
								<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
							</div>
						</div>
					</div> <!--  End Col -->				
					
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single_blog">
							<div class="single_blog_img">
								<img src="assets_client/img/blog/3.jpg" alt="">
								<div class="blog_date text-center">
									<div class="bd_day"> 25</div>
									<div class="bd_month">Aug</div>
								</div>
							</div>
												
							<div class="blog_content">
				
								<h4 class="post_title"><a href="#">Vivamus velit est iaculis id tempus</a> </h4>
								<ul class="post-bar">
									<li><i class="fa fa-user"></i> Admin</li>										
									<li><i class="fa fa-comments-o"></i> <a href="#">2 comments</a></li>
									<li><i class="fa fa-heart-o"></i> <a href="#">4 like</a></li>
								</ul>
								<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
							</div>
						</div>
					</div> <!--  End Col -->

				</div>
            </div>
        </section>
        <!--  Blog end -->
		
		
        <!--  Process -->
		<section class="process_area section_padding gradient_section">
			<div class="container">
				<div class="row text-center">		
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-truck"></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>free shipping</h3>
								<p>Lorem ipsum dummy</p>
							</div>
						</div>	
					</div>	<!-- End Col -->				

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-money"></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>Cash On Delivery</h3>
								<p>Lorem ipsum dummy</p>
							</div>
						</div>	
					</div>	<!-- End Col -->				

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-headphones "></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>Support 24/7</h3>
								<p>Lorem ipsum dummy</p>
							</div>
						</div>	
					</div>	<!-- End Col -->				

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-process">
							<!-- process Icon -->
							<div class="picon"><i class="fa fa-clock-o"></i></div>
							<!-- process Content -->
							<div class="process_content">
								<h3>Opening All Week</h3>
								<p>Lorem ipsum dummy</p>
							</div>
						</div>	
					</div>	<!-- End Col -->
					
				</div>
			</div>
		</section>
        <!--  End Process -->

        <!--  Brand -->
		<section id="brand_area" class="text-center">
			<div class="container">					
				<div class="row">
					<div class="col-sm-12">
						<div class="brand_slide owl-carousel">
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/1.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/2.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/3.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/4.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/5.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/6.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/7.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/8.png" alt="" class="img-responsive" /></a> </div>
							<div class="item text-center"> <a href="#"><img src="assets_client/img/brand/9.png" alt="" class="img-responsive" /></a> </div>
						</div>
					</div>
				</div>
			</div>        
		</section>        
        <!--   Brand end  -->	
@endsection
