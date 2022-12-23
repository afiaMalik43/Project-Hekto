@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- Promotion Start -->
<div class="col-xxl-12 px-5 hero">
		    <div class="row px-5">
		      	
		        <div class="col-8 col-sm-12 col-lg-8">
		      		<div class="row ">
		      			<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 pt-0 mt-0">
					    	<img src="images/image-32.png" class=" mx-lg-auto img-fluid" alt="Lamp" loading="lazy">
					    </div>
		      			<div class="col-lg-9 col-md-9 col-sm-8 py-5 my-5 py-md-2 my-md-2 my-sm-3">
					      	<p class="text-pink mt-5">Best furniture for your castle...</p>
					        <h1 class="display-5 fw-bold lh-1 mb-3">New Furniture Collection trends in 2022</h1>
					        <p class="lead hero-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Magna in est adipiscing in phasellus non in justo.</p>
					        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
					          <button type="button" class="btn btn-hero btn-lg px-4 me-md-2">Shop Now</button>
					        </div>
		      			</div>
		      		</div>
		      	</div>
		      	<div class="col-4 col-sm-12 col-md-6 col-lg-4 py-auto mx-auto px-auto my-auto my-md-5 my-sm-5">
		      		<img src="images/hero.png" class=" img-fluid my-auto mx-4 " alt="Pink Sofa" width="700" height="500" loading="lazy">
			    </div>
		    </div>
		</div>
        <!-- Promotion End -->

        <!-- Featured Product Section -->
		<div class="container col-xxl-8 py-5 justify-content-lg-center ">
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">Featured Products</h2>
			</div>

		    <div class="row align-items-center ">
		    	<div class="col-lg-3 col-md-6 col-sm-12 mx-auto" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image py-5 text-center">
			    			<img class=" center-block img-fluid" alt="Lamp" loading="lazy" src="images/image-3 (4).png" alt="Card image">
			    		</div>
						<div class="feature-card-body py-3 text-center">
							<p class="name">Cantelever Chair</p>
						    <p class="code">code:Y2531JH76</p>
						    <p class="price">$ 1200</p>
						</div>
		    		</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mx-auto" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image py-5 text-center">
			    			<img class=" center-block img-fluid" alt="Lamp" loading="lazy" src="images/image-3 (3).png" alt="Card image">
			    		</div>
						<div class="feature-card-body py-3 text-center">
							<p class="name">Cantelever Chair</p>
						    <p class="code">code:Y2531JH76</p>
						    <p class="price">$ 1200</p>
						</div>
		    		</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mx-auto" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image py-5 text-center">
			    			<img class=" center-block img-fluid" alt="Lamp" loading="lazy" src="images/image-3 (2).png" alt="Card image">
			    		</div>
						<div class="feature-card-body py-3 text-center">
							<p class="name">Cantelever Chair</p>
						    <p class="code">code:Y2531JH76</p>
						    <p class="price">$ 1200</p>
						</div>
		    		</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mx-auto" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image py-5 text-center">
			    			<img class=" center-block img-fluid" alt="Lamp" loading="lazy" src="images/image-3 (1).png" alt="Card image">
			    		</div>
						<div class="feature-card-body py-3 text-center">
							<p class="name">Cantelever Chair</p>
						    <p class="code">code:Y2531JH76</p>
						    <p class="price">$ 1200</p>
						</div>
		    		</div>
				</div>
			</div>
		</div>
		<!-- Featured Product Section End -->


		<!-- Latest Product Section -->
		<div container col-xxl-8 py-5 justify-content-lg-center>
			<div class="py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">Latest Products</h2>
			</div>
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<ul class="list-unstyled">
				    <li class="d-inline px-5"><a class="latest-products-menu" href="#">New Arrival</a></li>
				    <li class="d-inline px-5"><a class="latest-products-menu color-pinkk" href="#">Best Seller</a></li>
				    <li class="d-inline px-5"><a class="latest-products-menu" href="#">Featured</a></li>
				    <li class="d-inline px-5"><a class="latest-products-menu" href="#">Special Offer</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 px-auto py-3">
					<div class="latest-card-image w-100 text-center">
						<img class=" center-block img-fluid " loading="lazy" src="images/im (1).png" alt="Card image">
					</div>
					<div class="latest-card-body px-2 py-3">
						<span class="name">Comfort Handy Craft</span>
						<span class="p-price float-end px-1">$65.00</span><span class="n-price float-end px-2">$42.00</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 px-auto py-3">
					<div class="latest-card-image w-100 text-center">
						<img class=" center-block img-fluid " alt="Lamp" loading="lazy" src="images/im (2).png" alt="Card image">
					</div>
					<div class="latest-card-body px-2 py-3">
						<span class="name">Comfort Handy Craft</span>
						<span class="p-price float-end px-1">$65.00</span><span class="n-price float-end px-2">$42.00</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 px-auto py-3">
					<div class="latest-card-image w-100 text-center">
						<img class=" center-block img-fluid " alt="Lamp" loading="lazy" src="images/im (3).png" alt="Card image">
					</div>
					<div class="latest-card-body px-2 py-3">
						<span class="name">Comfort Handy Craft</span>
						<span class="p-price float-end px-1">$65.00</span><span class="n-price float-end px-2">$42.00</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 px-auto py-3">
					<div class="latest-card-image w-100 text-center">
						<img class=" center-block img-fluid " alt="Lamp" loading="lazy" src="images/im (4).png" alt="Card image">
					</div>
					<div class="latest-card-body px-2 py-3">
						<span class="name">Comfort Handy Craft</span>
						<span class="p-price float-end px-1">$65.00</span><span class="n-price float-end px-2">$42.00</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 px-auto py-3">
					<div class="latest-card-image w-100 text-center">
						<img class=" center-block img-fluid " alt="Lamp" loading="lazy" src="images/im (5).png" alt="Card image">
					</div>
					<div class="latest-card-body px-2 py-3">
						<span class="name">Comfort Handy Craft</span>
						<span class="p-price float-end px-1">$65.00</span><span class="n-price float-end px-2">$42.00</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 px-auto py-3">
					<div class="latest-card-image w-100 text-center">
						<img class=" center-block img-fluid " alt="Lamp" loading="lazy" src="images/im (6).png" alt="Card image">
					</div>
					<div class="latest-card-body px-2 py-3">
						<span class="name">Comfort Handy Craft</span>
						<span class="p-price float-end px-1">$65.00</span><span class="n-price float-end px-2">$42.00</span>
					</div>
				</div>-->
			</div>
			</div>
			
		</div>
		<!-- Latest Product Section End -->

		<!-- What Offer Section Start -->

		<div class="container col-xxl-8 py-5 justify-content-lg-center ">
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">What Shopex Offers!</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 p-auto">
					<div class="shopex-image text-center">
						<img class=" center-block img-fluid py-5" alt="Lamp" loading="lazy" src="images/Group (1).png" alt="Card image">
					</div>
					<div class="shopex-body text-center">
						<h4 class="shopex-heading">24/7 Support</h4>
						<p class="shopex-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 p-auto">
					<div class="shopex-image text-center">
						<img class=" center-block img-fluid py-5" alt="Lamp" loading="lazy" src="images/Group.png" alt="Card image">
					</div>
					<div class="shopex-body text-center">
						<h4 class="shopex-heading">24/7 Support</h4>
						<p class="shopex-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 p-auto">
					<div class="shopex-image text-center">
						<img class=" center-block img-fluid py-5" alt="Lamp" loading="lazy" src="images/Group (2).png" alt="Card image">
					</div>
					<div class="shopex-body text-center">
						<h4 class="shopex-heading">24/7 Support</h4>
						<p class="shopex-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 p-auto">
					<div class="shopex-image text-center">
						<img class=" center-block img-fluid py-5" alt="Lamp" loading="lazy" src="images/Group (3).png" alt="Card image">
					</div>
					<div class="shopex-body text-center">
						<h4 class="shopex-heading">24/7 Support</h4>
						<p class="shopex-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa purus gravida.</p>
					</div>
				</div>
			</div>

		</div>

		<!-- What offer Section End -->
        <!-- Banner Section Start -->
		<div class="bg-grey px-5">
			<div class="row flex-row py-5">
				<div class="col-lg-5 px-5 text-center">
						<img src="images/Group 153.png" class="d-center img-fluid mt-2 ml-5 " alt="Bootstrap Themes" loading="lazy">
				</div>
				<div class="col-lg-7 px-5 py-5 bg-grey ">
					<h2 class="h1 shopex-heading">Unique Features Of leatest & Trending Poducts</h2>
					<div class="row py-2"> 
						<div class="text-center justify-content-center col-lg-1 col-md-1 col-sm-2 col-xs-2 px-1 my-1 banner-bullet bg-danger rounded-circle"></div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 banner-p">All frames constructed with hardwood solids and laminates</div>
					</div>
					<div class="row py-2"> 
						<div class="text-center justify-content-center col-lg-1 col-md-2 col-sm-2 col-xs-3 px-1 my-1 banner-bullet bg-primary rounded-circle"></div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 banner-p">Reinforced with double wood dowels, glue, screw - nails corner blocks and machine nails</div>
					</div>
					<div class="row py-2"> 
						<div class="text-center justify-content-center col-lg-1 col-md-2 col-sm-2 col-xs-3 px-1 my-1 banner-bullet bg-success rounded-circle"></div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 banner-p">Arms, backs and seats are structurally reinforced</div>
					</div>
					<div class="row py-2"> 
						<div class="col-lg-4 my-3">
							<button type="button" class="btn btn-hero btn-lg px-4 me-md-2">Add To Cart</button>
						</div>
						
						<div class="col-lg-4 my-3 color-blue">
							<span class="font-weight-bold">B&B Italian Sofa</span><br>$32.00 
						</div>
					</div>
				</div>

				
			</div>
		</div>
		<!-- Banner Section End -->
		<!-- Trending Product Section -->
		<div class="container col-xxl-8 py-5 justify-content-lg-center ">
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">Trending Products</h2>
			</div>

		    <div class="row align-items-center mx-lg-auto my-4">
		    	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image mx-auto px-auto py-5 text-center">
			    			<img class=" center-block img-fluid" loading="lazy" src="images/image-3 (4).png" alt="Card image">
			    		</div>
						<div class="latest-card-body py-3 text-center">
						<p class="name">Comfort Handy Craft</p>
						<span class="n-price  px-2">$42.00</span><span class="price-cut-grey  px-1">$65.00</span>
						</div>
		    		</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image py-5 mx-auto px-auto text-center">
			    			<img class=" center-block img-fluid" loading="lazy" src="images/image-3 (3).png" alt="Card image">
			    		</div>
						<div class="latest-card-body py-3 mx-auto px-auto text-center">
						<p class="name">Comfort Handy Craft</p>
						<span class="n-price  px-2">$42.00</span><span class="price-cut-grey  px-1">$65.00</span>
						</div>
		    		</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image mx-auto px-auto py-5 text-center">
			    			<img class=" center-block img-fluid" loading="lazy" src="images/image-3 (2).png" alt="Card image">
			    		</div>
						<div class="latest-card-body py-3 text-center">
						<p class="name">Comfort Handy Craft</p>
						<span class="n-price  px-2">$42.00</span><span class="price-cut-grey  px-1">$65.00</span>
						</div>
		    		</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
		    		<div class="feature-card ">
		    			<div class="feature-card-image py-5 mx-auto px-auto text-center">
			    			<img class=" center-block mx-auto px-auto img-fluid" alt="Lamp" loading="lazy" src="images/image-3 (1).png" alt="Card image">
			    		</div>
						<div class="latest-card-body py-3 text-center">
						<p class="name">Comfort Handy Craft</p>
						<span class="n-price  px-2">$42.00</span><span class="price-cut-grey  px-1">$65.00</span>
						</div>
		    		</div>
				</div>
				<div class="col-lg-4 bg-baby-pink px-4 mx-2 my-4">
					<h5 class="color-primary py-2"> 23% off on all products</h5>
					<a href="#" class="align-top color-pink py-2">Shop Now</a>
					<img class=" center-block img-fluid " alt="Lamp" loading="lazy" src="images/image 1162.png">
				</div>
				<div class="col-lg-4 px-4 bg-grey mx-2">
					<h5 class="color-primary py-2"> 23% off on all products</h5>
					<a href="#" class="align-top color-pink py-2">View Collection</a>
					<img class=" center-block img-fluid "  loading="lazy" src="images/image 1161.png">
				</div>
				<div class="col-lg-3 mx-2 color-primary">
					<div class="row my-2">
						<div class="col-4 bg-grey">
						<img class=" center-block img-fluid "  loading="lazy" src="images/image 28.png">
						</div>
						<div class="col-8">
							<p>Executive seat chair<br>
							<span class="blue-cut">$32.00</span></p>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4 bg-grey">
						<img class=" center-block img-fluid " loading="lazy" src="images/image 19.png">
						</div>
						<div class="col-8">
							<p>Executive seat chair<br>
							<span class="blue-cut">$32.00</span></p>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4 bg-grey">
						<img class=" center-block img-fluid " loading="lazy" src="images/image 28.png">
						</div>
						<div class="col-8">
							<p>Executive seat chair<br>
							<span class="blue-cut">$32.00</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Trending Product Section End -->

		<!-- Discount Items Section Start -->

		<div container col-xxl-8 py-5 justify-content-lg-center>
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">Discount Items</h2>
			</div>

			<div class="px-lg-auto py-3 justify-content-center text-center">
				<ul class="list-unstyled">
				    <li class="d-inline px-5"><a class="latest-products-menu color-pinkk" href="#">Wood Chair</a></li>
				    <li class="d-inline px-5"><a class="latest-products-menu" href="#">Plastic Chair</a></li>
				    <li class="d-inline px-5"><a class="latest-products-menu" href="#">Sofa</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row px-5 py-5">
				<div class="col-lg-7 px-5 mx-4">
					<h4 class="color-primary py-2">20% discount on all Products</h4>
					<h5 class="color-pink py-2">Eams Sofa Compact</h5>
					<p class="color-grey py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu eget feugiat habitasse nec, bibendum condimentum.</p>
					<div class="row color-grey py-2">
						<div class="col-6"><i class="fa fa-check"></i>Material expose like metals</div>
						<div class="col-6"><i class="fa fa-check"></i>Material expose like metals</div>
						<div class="col-6"><i class="fa fa-check"></i>Material expose like metals</div>
						<div class="col-6"><i class="fa fa-check"></i>Material expose like metals</div>
					</div>
				</div>
				<div class="col-lg-4 text-center">
					<div class="image-container text-center">
						<img src="images/Group 154.png" loading="lazy" class=" center-block img-fluid">
					</div>
				</div>
			</div>
			</div>
			
		</div>

		<!-- Discount Items Section Ends -->


		<!-- Top Categories Section Start -->
		<div class="container my-5">
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">Top Categories</h2>
			</div>
			<div class="row py-auto my-auto">
				<div class="col-lg-3 col-md-6 col-sm-12 py-auto my-auto">
					<div class="text-center py-3 my-3">
						<div class=" bg-grey rounded-circle h-100 w-50 pb-20 mx-auto py-2 px-2">
							<img src="images/image 1171.png" loading="lazy" class=" center-block img-fluid ">
						</div>
						<div class="text-center">
							<p class="color-primary text-center shopex-heading">Mini LCW Chair<br>$36.00</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 py-auto  my-auto">
					<div class="my-3">
						<div class="bg-grey rounded-circle h-100 w-50 pb-20 mx-auto py-2 px-2"><img src="images/image 1168.png" loading="lazy" class=" center-block img-fluid "></div>
						<div class="cat-card-body color-primary text-center shopex-heading">
							<p>Mini LCW Chair<br>$36.00</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 py-auto  my-auto">
					<div class="my-3">
						<div class="bg-grey rounded-circle h-100 w-50 pb-20 mx-auto py-2 px-2"><img src="images/image 1171.png" loading="lazy" class=" center-block img-fluid "></div>
						<div class="cat-card-body color-primary text-center shopex-heading">
							<p>Mini LCW Chair<br>$36.00</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 com-sm-12 py-auto  my-auto">
					<div class="my-3">
						<div class="bg-grey rounded-circle h-100 w-50 pb-20 mx-auto py-2 px-2"><img src="images/image 1168.png" loading="lazy" class=" center-block img-fluid "></div>
						<div class="cat-card-body color-primary text-center shopex-heading">
							<p>Mini LCW Chair<br>$36.00</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Categories Section End -->

		<!-- Subscription Banner Start -->
			<div class="img-background my-5 py-5  text-center w-100">
			  <h2 class="color-primary py-2  mx-auto">Get Leatest Update By Subscribing To<br> 0ur Newsletter</h2>
			  <button class="bg-pink color-white h5 py-2 ">Shop Now</button>
			</div>
		<!-- Subscription Banner Ends-->
        <!-- Blog Section Start -->
		<div class="container">
			<div class="px-lg-auto py-3 justify-content-center text-center">
				<h2 class="feature-heading justify-content-center">Latest Blogs</h2>
			</div>
			<div class="row py-5 my-3">
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 py-2">
					<div class="blog-img w-100">
						<img class="img-fluid mw-100 h-auto" src="images/blog (1).png">
					</div>
					<div class="row color-primary py-3">
						<div class="col-md-1 col-sm-2"><i class="fa fa-pencil color-pinkk" aria-hidden="true"></i></div>
						<div class="col-md-3 col-sm-10">SaberAli</div>
						<div class="col-md-1 col-sm-2"><i class="fa fa-calendar color-golden" aria-hidden="true"></i></div>	
						<div class="col-md-5 col-sm-10">21 August,2020</div>					
					</div>
					<div>
						<h4 class="color-primary">Top esssential Trends in 2021</h4>
						<p class="color-grey">More off this less hello samlande lied much over tightly circa horse taped mightly</p>
						<a href="#" class="color-pink">Read more</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 py-2 ">
					<div class="blog-img">
						<img src="images/blog (3).png" class="img-fluid mw-100 h-auto">
					</div>
					<div class="row color-primary py-3">
						<div class="col-md-1 col-sm-2"><i class="fa fa-pencil color-pinkk" aria-hidden="true"></i></div>
						<div class="col-md-3 col-sm-10">SaberAli</div>
						<div class="col-md-1 col-sm-2"><i class="fa fa-calendar color-golden" aria-hidden="true"></i></div>	
						<div class="col-md-5 col-sm-10">21 August,2020</div>					
					</div>
					<div>
						<h4 class="color-primary">Top esssential Trends in 2021</h4>
						<p class="color-grey">More off this less hello samlande lied much over tightly circa horse taped mightly</p>
						<a href="#" class="color-pink">Read more</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 py-2 ">
					<div class="blog-img">
						<img src="images/blog (2).png" class="img-fluid mw-100 h-auto">
					</div>
					<div class="container">
						<div class="row color-primary py-3">
							<div class="col-1 col-md-1 col-sm-2"><i class="fa fa-pencil color-pinkk" aria-hidden="true"></i></div>
							<div class="col-3 col-md-3 col-sm-10">SaberAli</div>
							<div class="col-md-1 col-sm-2"><i class="fa fa-calendar color-golden" aria-hidden="true"></i></div>	
							<div class="col-md-5 col-sm-10">21 August,2020</div>					
						</div>
					</div>
					
					<div>
						<h4 class="color-primary">Top esssential Trends in 2021</h4>
						<p class="color-grey">More off this less hello samlande lied much over tightly circa horse taped mightly</p>
						<a href="#" class="color-pink">Read more</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Section End -->
@endsection
