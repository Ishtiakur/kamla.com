<?php include 'home-header.php'; ?>

   <!--=====================================================--> 
            <!--Slider bootstrap carousel-->
   <!--=====================================================--> 
	
<div id="myCarousel" class="carousel slide  bs-slider      " data-interval="10000" data-ride="carousel">
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
	   <img src="img/dark sky.jpg" alt="Los Angeles">
        <div class="bs-slider-overlay"></div>

	  <div class="carousel-caption">
		<div class="wrapper" id="home">
			<!--  for slider heading and button -->
            <div id="home-content-box">
                <div id="home-content-box-inner">
                    <div id="home-heading">
                        <h1 class="animated fadeInLeft" >Hire Your Desired Employee in online </h1>
                        <h3 class="animated fadeInLeft" style="color:#fff">Millions of people at your service...</h3>
                    </div>
                    <div id="home-btn">
                        <a class="btn btn-outline-primary btn-lg animated fadeInUp delay" href="post.php" id="mybtn" role="button">I want to Hire</a>
						
                        <a class="btn btn-outline-primary btn-lg animated fadeInUp delay spacebtn" href="#" role="button" id="mybtn">I want to Work</a>
                     </div>
                 </div>
             </div>
       </div>
	  </div>
    </div>

    <div class="item">
      <img src="img/dark sky 2.jpg" alt="Chicago">
       <div class="bs-slider-overlay"></div>

	  <div class="carousel-caption">
		<div id="home-content-box">
                <div id="home-content-box-inner">
                    <div id="home-heading">
                        <h1 class="animated fadeInLeft" >We Provide Your Demand</h1>
                        <h3 class="animated fadeInLeft" style="color:#fff">You Are offered With Numerous Job Facilities</h3>
                    </div>
                    <div id="home-btn">
                        <a class="btn btn-outline-primary btn-lg animated fadeInUp delay" href="post.php" id="mybtn" role="button">I want to Hire</a>
						
                        <a class="btn btn-outline-primary btn-lg animated fadeInUp delay spacebtn" href="#" role="button" id="mybtn">I want to Work</a>
                     </div>
                 </div>
             </div>
      </div>
    </div>

    <div class="item">
      <img src="img/dark sky 3.jpg" alt="New York">
       <div class="bs-slider-overlay"></div>

	  <div class="carousel-caption">
		<div id="home-content-box">
                <div id="home-content-box-inner">
                    <div id="home-heading">
                        <h1 class="animated fadeInLeft" >We Provide Your Demand</h1>
                        <h3 class="animated fadeInLeft" style="color:#fff">Millions of Job Available Here For You</h3>
                    </div>
                    <div id="home-btn">
                        <a class="btn btn-outline-primary btn-lg animated fadeInUp delay" href="post.php" id="mybtn" role="button">I want to Hire</a>
						
                        <a class="btn btn-outline-primary btn-lg animated fadeInUp delay spacebtn" href="#" role="button" id="mybtn">I want to Work</a>
                     </div>
                 </div>
             </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span> 
  </a> 
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span> 
     <span class="sr-only">Next</span> 
   </a>
</div>
	 <!--================================================================================================--> 
									<!--Slider bootstrap carousel end-->
	 <!--================================================================================================--> 
    
    
    
    <?php include 'search-navigation.php'; ?>
    

    <!-- =========================================== -->
    <!-- documentation secttion and recent posted jobs -->
    <!-- =========================================== -->
    
<section id="">
    <div class="wrapper">
        <div class="container">
            <div class="row" id="description">
                <div class="col-md-7">
                    <h3>Need work done?</h3>
                    <p>Post your project and receive competitive bids from freelancers within minutes. Our reputation system will make it easy to find the perfect freelancer for your job. It's the simplest and safest way to get work done online.</p>
                    <p>We have millions of Freelancers for thousands of freelance jobs: from web design, mobile app development, virtual assistants, product manufacturing and graphic design. Whatever your needs, there will be a freelancer to get it done.</p>
                </div>
                <div class="col-md-5">
                    <div class="newsfeed_area wow fadeInRight">
                        <h2 style="color: #000">Recent Posted Jobs</h2>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start news tab content -->
                            <div class="tab-pane fade in active" id="news">
                                <ul class="news_tab">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
					                          <img class="media-object" src="img/news.jpg" alt="img">
					                        </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">27.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
					                          <img class="media-object" src="img/news.jpg" alt="img">
					                        </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
						                          <img class="media-object" src="img/news.jpg" alt="img">
						                       </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="see_all" href="#">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- =========================================== -->
    <!-- documentation secttion and recent posted jobs closed -->
    <!-- =========================================== -->


    <!-- =========================================== -->
    <!-- category section start -->
    <!-- =========================================== -->

    <section id="services">

        <div class="content-box">
            <div class="content-title animated fadeInDown" data-animated-duration="1s" data-animated-delay=".5s">

                <div class="devider text-center" style="font-size: 30px"> Get Your Work Start Now </div>
                <div class="content-title-underline"></div>
            </div>
            <div class="container">

                <div class="row animated fadeInUp" data-animated-duration="1s" data-animated-delay=".5s">

                    <div class="col-md-4">

                        <div class="service-item">

                            <div class="service-item-icon">

                                <i class="fa fa-paint-brush fa-3x"></i>

                            </div>
                            <div class="service-icon-title">
                                <a href="#">
                                    <h3> Web Design</h3>
                                </a>
                            </div>
                            <div class="service-item-desc">
                                <p>Contrary to popular belief text. </p>
                            </div>

                        </div>


                    </div>
                    <div class="col-md-4">

                        <div class="service-item">

                            <div class="service-item-icon">

                                <i class="fa fa-laptop fa-3x"></i>

                            </div>
                            <div class="service-icon-title">
                                <a href="#">
                                    <h3> Web Design</h3>
                                </a>
                            </div>
                            <div class="service-item-desc">
                                <p>Contrary to popular belief text. </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="service-item">

                            <div class="service-item-icon">

                                <i class="fa fa-tablet fa-3x"></i>

                            </div>
                            <div class="service-icon-title">
                                <a href="#">
                                    <h3> Web Design</h3>
                                </a>
                            </div>
                            <div class="service-item-desc">
                                <p>Contrary to popular beliefs text. </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="service-item">

                            <div class="service-item-icon">

                                <i class="fa fa-search fa-3x"></i>

                            </div>
                            <div class="service-icon-title">
                                <a href="#">
                                    <h3> Web Design</h3>
                                </a>
                            </div>
                            <div class="service-item-desc">
                                <p>Contrary to popular Ipsumtext. </p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="service-item">

                            <div class="service-item-icon">

                                <i class="fa fa-pencil-square-o fa-3x"></i>

                            </div>
                            <div class="service-icon-title">
                                <a href="#">
                                    <h3> Web Design</h3>
                                </a>
                            </div>
                            <div class="service-item-desc">
                                <p>Contrary to popular belief text. </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="service-item">

                            <div class="service-item-icon">

                                <i class="fa fa-life-ring fa-3x"></i>

                            </div>
                            <div class="service-icon-title">
                                <a href="#">
                                    <h3> Web Design</h3>
                                </a>
                            </div>
                            <div class="service-item-desc">
                                <p>Contrary to popular belief text. </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- =========================================== -->
    <!-- category section closed -->
    <!-- =========================================== -->


    <!--
        Some fun facts
        ==================================== -->

    <section id="facts" class="facts">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row number-counters">

                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                        <h2>Some Fun Facts</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- first count item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="counters-item">
                            <i class="fa fa-clock-o fa-3x"></i>
                            <strong data-to="3200">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Registered User</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="counters-item">
                            <i class="fa fa-users fa-3x"></i>
                            <strong data-to="120">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Total Posted Work</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="counters-item">
                            <i class="fa fa-rocket fa-3x"></i>
                            <strong data-to="360">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Complete Work</p>
                        </div>
                    </div>

                    <!-- end first count item -->

                </div>
            </div>
        </div>
    </section>

    <!--
        End Some fun facts
        ==================================== -->

  
<?php include 'home-footer.php'; ?>